<?php

namespace app\controllers;

use app\models\Task;

use phpDocumentor\Reflection\Types\Null_;
use yii\web\Controller;
use \yii\web\HttpException;


class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $task = new Task();
        $data = $task->find()->all();
        return $this->render('index', array(
            'data' => $data
        ));
    }


    public function actionRead($id = NULL)
    {
        if ($id === NULL)
            throw new HttpException(404, 'Not Found');

        $post = Task::find($id);

        if ($post === NULL)
            throw new HttpException(404, 'Document Does Not Exist');

        echo $this->render('read', array(
            'post' => $post
        ));
    }

}
