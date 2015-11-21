<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    
    <?= Html::img('/img/logo.jpg',['alt' => 'logo', 'width' => '10em', 'height' => '10em']) ?>

    <code><?= __FILE__ ?></code>
</div>
