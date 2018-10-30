<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cities */

$this->title = Yii::t('app', 'Crear ciudades');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ciudades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
