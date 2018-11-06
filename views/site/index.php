<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Aplicación de países';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= Yii::t('app', '¡Bienvenido a Yii 2!')?> </h1>

        <p class="lead">Aplicación para registro de Paises y Ciudades</p>
    </div>

    <div class="body-content">
	
	<div class="jumbotron">
		<div class="row">
	        	<?= Html::a(Yii::t('app', 'Paises'), ['/country/index'], ['class' => 'btn btn-primary']) ?>
	        	<?= Html::a(Yii::t('app', 'Ciudades'), ['/cities/index'], ['class' => 'btn btn-primary']) ?>
		</div>
	</div>
        
    </div>
</div>
