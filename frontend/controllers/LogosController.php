<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Logotypes;
use app\models\Category;
use yii\db\Query;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;



/**
 * Site controller
 */
class LogosController extends Controller
{
    /**
     * @inheritdoc
     */


    public $enableCsrfValidation = false;

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Logotypes::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function createCategory($cat)
    {
        $category = Category::findOne(['name' => $cat]);
        if($category == null){
            $cat_row = new Category();
            $cat_row->name = $cat;
            if ($cat_row->save()) {
                //echo \yii\helpers\Json::encode($cat_row);
                $cat = $cat_row->id;
            } else {
                echo 'failed to create row';
                //echo $logo->errors();
            }
        }else{
            $cat = $category->id;
        }

        return $cat;
    }


    /**
     * Updates an existing Logotypes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);


        if (isset($_POST['Category']['name'])){
            $cat = $_POST['Category']['name'];


            $cat = self::createCategory($cat);


            $_POST['Logotypes']['category'] = $cat;
        }



        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Logotypes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $prepath = '../web/';
        $row = $this->findModel($id);

        unlink($prepath . $row->path);
        unlink($prepath . $row->path_230);
        $row->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Logotypes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Logotypes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Logotypes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



    public function AkImgResize($target, $newcopy, $w, $h, $ext) {
        list($w_orig, $h_orig) = getimagesize($target);
        $scale_ratio = $w_orig / $h_orig;
        if (($w / $h) > $scale_ratio) {
            $w = $h * $scale_ratio;
        } else {
            $h = $w / $scale_ratio;
        }
        $ext = strtolower($ext);
        if ($ext == "gif"){
            $img = imagecreatefromgif($target);
        } else if($ext =="png"){
            $img = imagecreatefrompng($target);
        } else {
            $img = imagecreatefromjpeg($target);
        }
        $tci = imagecreatetruecolor($w, $h);
        imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
        imagejpeg($tci, $newcopy, 90);
    }


    public function actionUpload()
    {

        var_dump($_POST['cat']);
        if (isset($_POST['cat'])){
            $cat = $_POST['cat'];
        }else{
            $cat = 'none';
        }

        $cat = self::createCategory($cat);


        $fileName = 'file';
        if (isset($_FILES[$fileName])) {
            $files = \yii\web\UploadedFile::getInstancesByName($fileName);


//            $_FILES[$i] = $file;

            //Print file data
            //print_r($file);
//            var_dump($_FILES[$i]);
//            $i++;
            //var_dump($_FILES);
            $prepath = '../web/';
            $uploadPath = '/src/upload';

            foreach ($files as $file) {
                $name = md5_file($file->tempName);

                $path = $uploadPath;
                if (!file_exists($prepath . $path)){
                    mkdir($prepath . $path, 0755, true);
                }
                for ($i = 0; $i <= 2; $i++) {
                    $path .= '/' . $name[$i];
                    if (!file_exists($prepath . $path)){
                        mkdir($prepath . $path, 0755, true);
                    }
                }


                if (!file_exists($prepath . $path . '/' . $file->name )) {
                    if ($file->saveAs($prepath . $path . '/' . $file->name)) {


                         $kaboom = explode(".", $file->name);
                         $fileExt = end($kaboom);
                         $target_file = $prepath . $path . '/' . $file->name;
                         $resized_file = $prepath . $path . '/230_' . $file->name;
                         $wmax = 230;
                         $hmax = 230;
                         self::AkImgResize($target_file, $resized_file, $wmax, $hmax, $fileExt);



                        //Now save file data to database
                        $logo = new Logotypes();




                        $logo->name = $file->name;
                        $logo->category = $cat;
                        $logo->path = $path . '/' . $file->name;
                        $logo->path_230 = $path . '/230_' . $file->name;


                        if ($logo->save()) {
                            echo \yii\helpers\Json::encode($logo);
                        } else {
                            echo 'failed';
                            echo \yii\helpers\Json::encode($logo);
                            //echo $logo->errors();
                        }
                        //echo \yii\helpers\Json::encode($file);
                    }
                }
            }
        }
    }
}