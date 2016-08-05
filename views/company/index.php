<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Company';
 ?>

 <div class="company-index">

   <div class="panel panel-primary">
   <div class="panel-heading"><h1><center><?= Html::encode($this->title) ?></center></h1></div>
   </div>


   <?= GridView::widget([
       'dataProvider' => $dataProvider,
       'filterModel' => $searchModel,
       'columns' => [
           //['class' => 'yii\grid\SerialColumn'],

           'id_company',
           'company',
           'email:email',
           'phone',
           'city',
           'province',


           ['class' => 'yii\grid\ActionColumn',
       'header' => '',
       'template'=>'{delete}',
         'buttons' => [
             'delete' => function($url, $model) {
               return Html::a('<span class="glyphicon glyphicon-trash"></span> Delete',$url, [
                   'title' => Yii::t('yii','delete'),'class'=>'btn btn-danger btn-sm btn-block',
                   'data-confirm' => Yii::t('yii','Are You Sure Delete this Data ?'),
                   'data-method' => 'post',

               ]);
             }




         ],

     ],
       ],
   ]); ?>

 </div>
