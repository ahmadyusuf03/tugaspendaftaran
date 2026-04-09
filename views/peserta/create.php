<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Peserta $model */

$this->title = 'Create Peserta';
$this->params['breadcrumbs'][] = ['label' => 'Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
