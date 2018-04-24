<?php

namespace app\controllers\admin;


use yii\web\Controller;
use Yii;

class AdminController extends Controller
{
    public $layout = '/admin/main';

    /**
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect('/user/security/login');
        }

        return $this->render('/admin/index');
    }
}