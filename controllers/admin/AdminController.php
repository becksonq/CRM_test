<?php
/**
 * File: AdminController.php
 * Email: becksonq@gmail.com
 * Date: 24.04.2018
 * Time: 12:46
 */

namespace app\controllers\admin;


use yii\web\Controller;

class AdminController extends Controller
{
    public function actionIndex()
    {
        print 'e'; die;
        $this->render('/admin/views/site/login', []);
    }
}