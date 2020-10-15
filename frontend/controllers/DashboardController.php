<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Dashboard controller
 */
class DashboardController extends Controller
{
    public $layout = 'dash';
    
    public function actionPanel()
    {
        return $this->render('dashboard');
    }
    
    public function actionMessage()
    {
        return $this->render('message');
    }
    
    public function actionBooking()
    {
        return $this->render('bookings');
    }
    
    public function actionWallet()
    {
        return $this->render('wallet');
    }
    
    public function actionListing()
    {
        return $this->render('listings');
    }
    
    public function actionAddListing()
    {
        return $this->render('add-listing');
    }
    
    public function actionReview()
    {
        return $this->render('reviews');
    }
    
    public function actionBookmark()
    {
        return $this->render('bookmarks');
    }
    
    public function actionProfile()
    {
        return $this->render('profile');
    }
    
    public function actionInvoice()
    {
        $this->layout = false;
        return $this->render('invoice');
    }
}
