<?
IncludeModuleLangFile(__FILE__);
Class svx_hlemails extends CModule
{
	const MODULE_ID = 'svx.hlemails';
	var $MODULE_ID = 'svx.hlemails'; 
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $strError = '';

	function __construct()
	{
		$arModuleVersion = array();
		include(dirname(__FILE__)."/version.php");
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = GetMessage("svx.hlemails_MODULE_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("svx.hlemails_MODULE_DESC");

		$this->PARTNER_NAME = GetMessage("svx.hlemails_PARTNER_NAME");
		$this->PARTNER_URI = GetMessage("svx.hlemails_PARTNER_URI");
	}
	function InstallDB($arParams = array())
	{
		RegisterModuleDependences('main', 'OnBuildGlobalMenu', self::MODULE_ID, 'CSvxhlemails', 'OnBuildGlobalMenu');

		if( CModule::IncludeModule("highloadblock") ){
			// create if not exist iblock and fields
			
			$highloadBlockData = array ( 'NAME' => 'Svxhlemails', 'TABLE_NAME' => 'svx_hl_emails' );
			$result = Bitrix\Highloadblock\HighloadBlockTable::add($highloadBlockData);
			$highLoadBlockId = $result->getId();
			//если произошла ошибка выведем её
			if(!$highLoadBlockId){
			    var_dump($result->getErrorMessages());
			    return false;
			}

			$userName    = array(
				'ENTITY_ID'         => 'HLBLOCK_'.$highLoadBlockId,
				'FIELD_NAME'        => 'UF_SVX_HL_NAME',
				'USER_TYPE_ID'      => 'string',
				'XML_ID'            => 'UF_SVX_HL_NAME',
				'SORT'              => 500,
				'MULTIPLE'          => 'N',
				'MANDATORY'         => 'N',
				'SHOW_FILTER'       => 'N',
				'SHOW_IN_LIST'      => '',
				'EDIT_IN_LIST'      => '',
				'IS_SEARCHABLE'     => 'N',
				'SETTINGS'          => array(
					'DEFAULT_VALUE' => '',
					),
				'EDIT_FORM_LABEL'   => array(
					'ru'    => 'Имя',
					'en'    => 'Name',
					),
				'LIST_COLUMN_LABEL' => array(
					'ru'    => 'Имя',
					'en'    => 'Name',
					),
				'LIST_FILTER_LABEL' => array(
					'ru'    => 'Имя',
					'en'    => 'Name',
					),
				'ERROR_MESSAGE'     => array(
					'ru'    => '',
					'en'    => '',
					),
				'HELP_MESSAGE'      => array(
					'ru'    => '',
					'en'    => '',
					),
			);
			$userPhone    = array(
				'ENTITY_ID'         => 'HLBLOCK_'.$highLoadBlockId,
				'FIELD_NAME'        => 'UF_SVX_HL_PHONE',
				'USER_TYPE_ID'      => 'string',
				'XML_ID'            => 'UF_SVX_HL_PHONE',
				'SORT'              => 500,
				'MULTIPLE'          => 'N',
				'MANDATORY'         => 'N',
				'SHOW_FILTER'       => 'N',
				'SHOW_IN_LIST'      => '',
				'EDIT_IN_LIST'      => '',
				'IS_SEARCHABLE'     => 'N',
				'SETTINGS'          => array(
					'DEFAULT_VALUE' => '',
					),
				'EDIT_FORM_LABEL'   => array(
					'ru'    => 'Телефон',
					'en'    => 'Phone',
					),
				'LIST_COLUMN_LABEL' => array(
					'ru'    => 'Телефон',
					'en'    => 'Phone',
					),
				'LIST_FILTER_LABEL' => array(
					'ru'    => 'Телефон',
					'en'    => 'Phone',
					),
				'ERROR_MESSAGE'     => array(
					'ru'    => '',
					'en'    => '',
					),
				'HELP_MESSAGE'      => array(
					'ru'    => '',
					'en'    => '',
					),
			);
			$userEmail    = array(
				'ENTITY_ID'         => 'HLBLOCK_'.$highLoadBlockId,
				'FIELD_NAME'        => 'UF_SVX_HL_EMAIL',
				'USER_TYPE_ID'      => 'string',
				'XML_ID'            => 'UF_SVX_HL_EMAIL',
				'SORT'              => 500,
				'MULTIPLE'          => 'N',
				'MANDATORY'         => 'Y',
				'SHOW_FILTER'       => 'N',
				'SHOW_IN_LIST'      => '',
				'EDIT_IN_LIST'      => '',
				'IS_SEARCHABLE'     => 'N',
				'SETTINGS'          => array(
					'DEFAULT_VALUE' => '',
					),
				'EDIT_FORM_LABEL'   => array(
					'ru'    => 'Email',
					'en'    => 'Email',
					),
				'LIST_COLUMN_LABEL' => array(
					'ru'    => 'Email',
					'en'    => 'Email',
					),
				'LIST_FILTER_LABEL' => array(
					'ru'    => 'Email',
					'en'    => 'Email',
					),
				'ERROR_MESSAGE'     => array(
					'ru'    => '',
					'en'    => '',
					),
				'HELP_MESSAGE'      => array(
					'ru'    => '',
					'en'    => '',
					),
			);

			$userTypeEntity    = new CUserTypeEntity();

			$userNameId = $userTypeEntity->Add($userName);
			$userPhoneId = $userTypeEntity->Add($userPhone);
			$userEmailId = $userTypeEntity->Add($userEmail);

			if(!$userNameId || !$userPhoneId || !$userEmailId){
				return false;
			}
		}

		return true;
	}

	function UnInstallDB($arParams = array())
	{		
		UnRegisterModuleDependences('main', 'OnBuildGlobalMenu', self::MODULE_ID, 'CSvxhlemails', 'OnBuildGlobalMenu');

		if( CModule::IncludeModule("highloadblock") && $arParams['removeData'] == 'Y' ){
			// remove if exist iblock and fields and confirmed

			$result = Bitrix\Highloadblock\HighloadBlockTable::delete('Svxhlemails');

			// $userTypeEntity    = new CUserTypeEntity();
			// $oUserTypeEntity->Delete( $iUserFieldId ); 
		}

		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function getBaseDir()
	{
		$basedir = 'bitrix';
		if( 
			is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/local/modules/') 
			&& is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/local/components/') 
			&& is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/local/admin/') 
		){
			$basedir = 'local';
		}

		return $basedir;
	}

	function InstallFiles($arParams = array())
	{
		$basedir = self::getBaseDir();

		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/'.$basedir.'/modules/'.self::MODULE_ID.'/admin'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.' || $item == 'menu.php')
						continue;
					file_put_contents($file = $_SERVER['DOCUMENT_ROOT'].'/'.$basedir.'/admin/'.self::MODULE_ID.'_'.$item,
					'<'.'? require($_SERVER["DOCUMENT_ROOT"]."/'.$basedir.'/modules/'.self::MODULE_ID.'/admin/'.$item.'");?'.'>');
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/'.$basedir.'/modules/'.self::MODULE_ID.'/install/components'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					CopyDirFiles($p.'/'.$item, $_SERVER['DOCUMENT_ROOT'].'/'.$basedir.'/components/'.$item, $ReWrite = True, $Recursive = True);
				}
				closedir($dir);
			}
		}
		return true;
	}

	function UnInstallFiles()
	{
		$basedir = self::getBaseDir();

		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/'.$basedir.'/modules/'.self::MODULE_ID.'/admin'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					unlink($_SERVER['DOCUMENT_ROOT'].'/'.$basedir.'/admin/'.self::MODULE_ID.'_'.$item);
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/'.$basedir.'/modules/'.self::MODULE_ID.'/install/components'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.' || !is_dir($p0 = $p.'/'.$item))
						continue;

					$dir0 = opendir($p0);
					while (false !== $item0 = readdir($dir0))
					{
						if ($item0 == '..' || $item0 == '.')
							continue;
						DeleteDirFilesEx('/'.$basedir.'/components/'.$item.'/'.$item0);
					}
					closedir($dir0);
				}
				closedir($dir);
			}
		}
		return true;
	}

	function DoInstall()
	{
		global $APPLICATION;
		$this->InstallFiles();
		$this->InstallDB();
		RegisterModule(self::MODULE_ID);
	}

	function DoUninstall()
	{
		global $APPLICATION;
		UnRegisterModule(self::MODULE_ID);
		$this->UnInstallDB();
		$this->UnInstallFiles();
	}
}
?>
