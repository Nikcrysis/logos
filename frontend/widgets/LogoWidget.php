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
            $query->select('path')
                ->from('logotypes');
        }else{
            $query->select('path')
                ->from('logotypes')
                ->where(['category' => $this->cat]);
        }
        $this->logos = $query->all();

    }

    public function run()
    {
        return $this->render('logos', [
          'logos' => $this->logos,
        ]);
    }
}