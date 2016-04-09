<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
	'devMode' => false,
	'defaultWeekStartDay' => 1,
	'phpMaxMemoryLimit' => '512M',
	'phpSessionName' => 'PHPSESSID',
	'sendPoweredByHeader' => false,
	'timezone' => 'Europe/London',
	'defaultFilePermissions' => 0644,
	'defaultFolderPermissions' => 0755,
	'enableCsrfProtection' => true,
	'omitScriptNameInUrls' => true,
	'errorTemplatePrefix' => "_errors/",
	'defaultImageQuality' => 90,
	'generateTransformsBeforePageLoad' => true,
	'maxUploadFileSize' => 33554432,
	'preserveImageColorProfiles' => true,
);
