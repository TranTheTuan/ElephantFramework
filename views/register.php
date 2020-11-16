<h1>Create an account</h1>
<?php $form = app\core\form\Form::begin('/register', 'post') ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($register, 'firstname') ?>
    </div>
    <div class="col">
        <?php echo $form->field($register, 'lastname') ?>
    </div>
</div>
    <?php echo $form->field($register, 'email') ?>
    <?php echo $form->field($register, 'password')->fieldPassword() ?>
    <?php echo $form->field($register, 'passwordConfirm')->fieldPassword() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php app\core\form\Form::end() ?>
