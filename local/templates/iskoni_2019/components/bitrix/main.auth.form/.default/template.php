<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
	'/bitrix/css/main/system.auth/flat/style.css'
);

if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
	return;
}
?>
<form class="form" name="<?= $arResult['FORM_ID'];?>" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?>">

	<?if ($arResult['ERRORS']):?>
	<div class="alert alert-danger">
		<? foreach ($arResult['ERRORS'] as $error)
		{
			echo $error;
		}
		?>
	</div>
	<?endif;?>
	<?/*if ($arResult['AUTH_SERVICES']):?>
		<?$APPLICATION->IncludeComponent('bitrix:socserv.auth.form',
			'flat',
			array(
				'AUTH_SERVICES' => $arResult['AUTH_SERVICES'],
				'AUTH_URL' => $arResult['CURR_URI']
	   		),
			$component,
			array('HIDE_ICONS' => 'Y')
		);
		?>
		<hr class="bxe-light">
	<?endif*/?>

    <div class="form-group">

        <input type="text" name="<?= $arResult['FIELDS']['login'];?>" class="form-control" data-rule-required="true" data-msg="Ошибка при заполнении" placeholder="<?=Loc::getMessage('MAIN_AUTH_FORM_FIELD_LOGIN');?>" maxlength="255" value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>">
    </div>

    <div class="form-group form-group_pass">
        <label>
            <input type="password" name="<?= $arResult['FIELDS']['password'];?>" maxlength="255" autocomplete="off" class="form-control" data-rule-required="true" data-msg="Ошибка при заполнении" placeholder="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_PASS');?>">

			<?/*if ($arResult['SECURE_AUTH']):?>
				<div class="bx-authform-psw-protected" id="bx_auth_secure" style="display:none">
					<div class="bx-authform-psw-protected-desc"><span></span>
						<?= Loc::getMessage('MAIN_AUTH_FORM_SECURE_NOTE');?>
					</div>
				</div>
				<script type="text/javascript">
					document.getElementById('bx_auth_secure').style.display = '';
				</script>
			<?endif*/?>
			
            <span class="icon toggle-password"></span>
        </label>
    </div>

	<?#if ($arResult['STORE_PASSWORD'] == 'Y'):?>
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="USER_REMEMBER" name="<?= $arResult['FIELDS']['remember'];?>" value="Y" checked>
            <label class="custom-control-label" for="USER_REMEMBER">
                <?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_REMEMBER');?>
            </label>
        </div>
    </div>
	<?#endif?>

	<?/*if ($arResult['CAPTCHA_CODE']):?>
		<input type="hidden" name="captcha_sid" value="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" />
		<div class="bx-authform-formgroup-container dbg_captha">
			<div class="bx-authform-label-container">
				<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_CAPTCHA');?>
			</div>
			<div class="bx-captcha"><img src="/bitrix/tools/captcha.php?captcha_sid=<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" width="180" height="40" alt="CAPTCHA" /></div>
			<div class="bx-authform-input-container">
				<input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
			</div>
		</div>
	<?endif;*/?>

    <div class="row text-center align-items-center">
        <div class="col-4">
            <input type="submit" name="<?= $arResult['FIELDS']['action'];?>" value="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_SUBMIT');?>" class="btn btn-orange">
        </div>
		
		<?if ($arResult['AUTH_FORGOT_PASSWORD_URL']):?>
        <div class="col-8">
            <a href="<?= $arResult['AUTH_FORGOT_PASSWORD_URL'];?>" rel="nofollow" class="form-link"><?= Loc::getMessage('MAIN_AUTH_FORM_URL_FORGOT_PASSWORD');?></a>
        </div>
		<?endif;?>
		
			<?/*if ($arResult['AUTH_REGISTER_URL']):?>
				<div class="bx-authform-link-container">
					<a href="<?= $arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
						<?= Loc::getMessage('MAIN_AUTH_FORM_URL_REGISTER_URL');?>
					</a>
				</div>
			<?endif;*/?>
    </div>
</form>

<script type="text/javascript">
	<?if ($arResult['LAST_LOGIN'] != ''):?>
	try{document.<?= $arResult['FORM_ID'];?>.USER_PASSWORD.focus();}catch(e){}
	<?else:?>
	try{document.<?= $arResult['FORM_ID'];?>.USER_LOGIN.focus();}catch(e){}
	<?endif?>
</script>
