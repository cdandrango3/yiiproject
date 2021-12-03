<?php

namespace frontend\controllers;

use frontend\models\suma;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use frontend\models\ContactForm;

class MoneyController extends Controller
{
     public function actionMoney(){
         $model=new suma;
         if ($model->load(Yii::$app->request->post()) && $model->validate()){
             $suma=$model->n1+$model->n2;
             $envio="la suma es" . $suma;
             return $this->render('money',['model'=>$model,'mensaje'=>$envio]);
         }
         return $this->render('money',['model'=>$model,'mensaje'=>""]);
     }
}
?>