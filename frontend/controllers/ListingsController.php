<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * List controller
 */
class ListingsController extends Controller
{
    public $layout = 'main2';
    
    public function actionListSidebar()
    {
        return $this->render('list-with-sidebar');
    }
    public function actionListFullwidth()
    {
        return $this->render('list-full-width');
    }
    
    public function actionListFullwidthMap()
    {
        return $this->render('list-full-width-map');
    }
    
}
