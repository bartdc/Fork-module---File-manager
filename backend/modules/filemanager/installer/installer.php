<?php

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * Installer for the file manager module
 *
 * @author Bart De Clercq <info@lexxweb.be>
 */
class FilemanagerInstaller extends ModuleInstaller
{
	/**
	 * Install the module
	 */
	public function install()
	{
		// add 'file manager' as a module
		$this->addModule('filemanager');

		// import locale
		$this->importLocale(dirname(__FILE__) . '/data/locale.xml');

		// module rights
		$this->setModuleRights(1, 'filemanager');

		// action rights
		$this->setActionRights(1, 'filemanager', 'index');

		// set navigation
		$navigationModulesId = $this->setNavigation(null, 'Modules');
		$this->setNavigation($navigationModulesId, 'Filemanager', 'filemanager/index');
	}
}
