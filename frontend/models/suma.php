<?php

namespace frontend\models;

use yii\base\Model;

class suma extends Model
{
    public $n1;
    public $n2;
 public function rules(){
   return[
       [['n1','n2'],'required'],
       ['n1','number'],['n2','number']
   ];
 }
}
?>