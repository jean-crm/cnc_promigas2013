<div class="row-fluid">
    <?php
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */

    $this->pageTitle = Yii::app()->name . ' - Login';
    $this->breadcrumbs = array(
        'Login',
    );
    ?>
    <legend><?php echo Yii::t('app', 'Login'); ?></legend>

    <p>Por favor complete el siguiente formulario con sus datos de acceso:</p>

    <div class="form span4">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username', array('placeholder' => "Escriba su nombre de usuario.")); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('placeholder' => "Escriba su contraseña.")); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

        <div class="control-group">
            <?php echo CHtml::submitButton('Login', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>
    </div><!-- form -->
</div>
<div class=" alert alert-info">Si usted tiene duda sobre los contenidos de esta encuesta o tiene problemas para el ingreso, favor comunicarse con el Centro Nacional de Consultoría al <b><i>339-4888</i></b> o al correo electrónico <b><i><?php echo Yii::app()->params['adminEmail']; ?></i></b></div>