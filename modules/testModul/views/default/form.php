<h1><?php echo $formTitle?></h1>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php if (Yii::$app->session->hasFlash('success')):?>
    <?php echo Yii::$app->session->getFlash('success');?>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('error')):?>
    <?php echo Yii::$app->session->getFlash('error');?>
<?php endif;?>

<?php $clientForm = ActiveForm::begin() ?>
<h2>Личные данные</h2>
<?= $clientForm->field($newClient, 'name')->label('Имя')?>
<?= $clientForm->field($newClient, 'surname')->label('Фамилия')?>
<?= $clientForm->field($newClient, 'age')->label('Возраст')->widget(\yii\widgets\MaskedInput::classname(),[
    'mask' => '99',
])?>
<?= $clientForm->field($newClient, 'pol')->label('Пол')->dropDownList(['Не указан'=>'Не указан','Муж'=>'Муж','Жен'=>'Жен'])?>
<h2>Виды связи</h2>
<?= $clientForm->field($newClient, 'email')?>
<?= $clientForm->field($newClient, 'phone')->label('Номер телефона')->widget(\yii\widgets\MaskedInput::classname(),[
    'mask' => '+375(99)999-99-99',
])?>
<?= $clientForm->field($newClient, 'address')->label('Адрес')?>
<h2>Место работы</h2>
<?= $clientForm->field($newClient, 'organization')->label('Место работы')?>
<?= $clientForm->field($newClient, 'position')->label('Должность')?>
<h2>Дополнительная информация</h2>
<?= $clientForm->field($newClient, 'info')->label('')->textArea(['rows'=>3])?>

<?= Html::submitButton('Добавить', ['class' => 'btn btn-success'])?>

<?php ActiveForm::end() ?>


 