<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\LessonSection;
$lessonsections = LessonSection::find()->all();
$items = ArrayHelper::map($lessonsections,'id','title');
    $params = [
        'prompt' => 'Выберите раздел'
    ];

/* @var $this yii\web\View */
/* @var $model app\models\LessonTopic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lesson-topic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lesson_section_id')->dropDownList($items,$params) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serialNumber')->textInput() ?>

    <?= $form->field($model, 'additionalInformation')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
