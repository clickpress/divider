<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Divider
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContentDivider' => 'system/modules/divider/ContentDivider.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_divider' => 'system/modules/divider/templates',
));
