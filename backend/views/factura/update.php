<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Factura */

$this->title = 'Update Factura: ' . $model->IDFACTURA;
$this->params['breadcrumbs'][] = ['label' => 'Facturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDFACTURA, 'url' => ['view', 'id' => $model->IDFACTURA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="factura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>