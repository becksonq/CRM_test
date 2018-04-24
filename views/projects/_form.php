<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Projects;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList( Projects::getUsersList(),[ 'prompt' => 'Выберите пользователя' ] ) ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'date_start')->widget(DatePicker::class, [
        'language'      => 'ru',
        'type'          => DatePicker::TYPE_COMPONENT_APPEND,
        'options'       => ['placeholder' => 'Выберите дату...'],
        'pluginOptions' => [
            'autoclose'      => true,
            'format'         => 'dd-mm-yyyy',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'date_finish')->widget(DatePicker::class, [
        'language'      => 'ru',
        'type'          => DatePicker::TYPE_COMPONENT_APPEND,
        'options'       => ['placeholder' => 'Выберите дату...'],
        'pluginOptions' => [
            'autoclose'      => true,
            'format'         => 'dd-mm-yyyy',
            'todayHighlight' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
