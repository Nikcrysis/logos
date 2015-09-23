<?php
namespace frontend\widgets;

use yii\db\Query;
use yii\base\Widget;
use app\models\Logotypes;
use yii\data\Pagination;

use yii\helpers\Html;

class LogoWidget extends Widget
{
    public $cat;
    public $page;
    public $pages;
    public $logos;

    public function init()
    {
        parent::init();


        if ($this->page == 'index')
        {
            if ($this->cat == 'all' or $this->cat == null){
                $query= Logotypes::find()->limit(15);
            }else{

                $query_cat = new Query;
                $query_cat->select('id')
                    ->from('category')
                    ->where([ 'name' => $this->cat]);

                $cat_id = $query_cat->all()[0]['id'];

                $query= Logotypes::find()
                    ->limit(15)
                    ->where([
                        'category' => $cat_id
                    ]);
            }

            $logos = $query->all();
            shuffle($logos);
        }
        else
        {
            if ($this->cat == 'all' or $this->cat == null){
                $query = Logotypes::find();
            }else{
                $query_cat = new Query;
                $query_cat->select('id')
                    ->from('category')
                    ->where([ 'name' => $this->cat]);

                $cat_id = $query_cat->all()[0]['id'];



                $query = Logotypes::find()->where(['category' => $cat_id]);
            }

            $countQuery = clone $query;
            $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 15]);
            $logos = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
            $this->pages = $pages;

        }

        $this->logos = $logos;
    }

    public function run()
    {
        if ($this->page == 'index')
        {
            return $this->render('logos', [
                'logos' => $this->logos,
                ]);
        } else {
            return $this->render('logos', [
                'logos' => $this->logos,
                'pages' => $this->pages,
            ]);
        }


    }
}