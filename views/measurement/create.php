<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Phone */

$this->title = 'Create หมายเลขโทรศัพท์';
$this->params['breadcrumbs'][] = ['label' => 'Phones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>