<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Table;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
        $values = Table::find()->indexBy('id')->all();

        if (Model::loadMultiple($values, Yii::$app->request->post()) && Model::validateMultiple($values)) {
            foreach ($values as $value) {
                $value->save(false);
            }
        }

        return $this->render('index', ['values' => $values]);
    }
}
