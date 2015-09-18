<?php
namespace frontend\widgets;

use yii\db\Query;
use yii\base\Widget;
use yii\helpers\Html;

class LogoWidget extends Widget
{
    public $cat;
    public $logos;

    public function init()
    {
        parent::init();

        $query = new Query;
        if ($this->cat == 'all' or $this->cat == null){
            $query->select('path, path_230')
                ->from('logotypes')
                ->limit(15);
        }else{

            $query_cat = new Query;
            $query_cat->select('id')
                ->from('category')
                ->where([ 'name' => $this->cat]);

            $cat_id = $query_cat->all()[0]['id'];



            $query->select('path, path_230')
                ->from('logotypes')
                ->limit(15)
                ->where([
                    'category' => $cat_id
                ]);
        }
        $logos = $query->all();
        shuffle($logos);
        $this->logos = $logos;
    }

    public function run()
    {
        return $this->render('logos', [
          'logos' => $this->logos,
        ]);

    }
}