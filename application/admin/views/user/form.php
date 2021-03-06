<?php

$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['user/index']];
$this->params['breadcrumbs'][] = ($model->scenario == 'edit') ? 'Edit product ' . $model->id : 'New User';

?>

<h1 class="text-center"><?= ($model->scenario == 'edit') ? 'Edit User ' . $model->id : 'New User'; ?></h1>

<div class="col-lg-6 col-lg-offset-3">
    <?php $form = \yii\bootstrap\ActiveForm::begin([
        'enableClientValidation' => false
    ]) ?>

    <?= $form->field($model, 'login') ?>

    <?= $form->field($model, 'password') ?>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>

    <?php \yii\bootstrap\ActiveForm::end() ?>
</div>
