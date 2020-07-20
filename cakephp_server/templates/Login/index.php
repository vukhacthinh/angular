<div class="base">
        <title>Login V16</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title href="icons/favicon.ico"></title>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
                <?= $this->Form->create(@$loginForm,['login-form',['class'=>'ogin100-form validate-form p-b-33 p-t-5']]);?>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <?= $this->Form->text('employee_code', ['id' => 'employee_code', 'class' => 'icon-person input100', 'placeholder' => __('社員番号'), 'escape' => false, 'tabindex'=>1, 'autocomplete'=> 'off']); ?>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <?= $this->Form->password('pass', ['id' => 'pass', 'class' => 'icon-locked input100', 'placeholder' => __('パスワード'), 'escape' => false, 'value'=>'','tabindex'=>2, 'autocomplete'=> 'off']); ?>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                <?=$this->Form->end();?>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
</div>
<?=$this->Html->css('util.css');?>
<?=$this->Html->css('main.css');?>
<?=$this->Html->css('font-awesome-4.7.0/css/font-awesome.min.css');?>
<?=$this->Html->css('Linearicons-Free-v1.0.0/icon-font.min.css');?>
<?=$this->Html->css('Linearicons-Free-v1.0.0/icon-font.min.css');?>
<?=$this->Html->css('main.css');?>
<?=$this->Html->css('main.css');?>
<?= $this->Html->script('main.js');?>

