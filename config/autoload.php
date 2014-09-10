<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
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
	// Widgets
	'Divider'        => 'system/modules/divider/widgets/Divider.php',
	'ContentDivider' => 'system/modules/divider/ContentDivider.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_divider' => 'system/modules/divider/templates',
));
