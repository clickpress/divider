<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Trennlinie
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Trennlinie' => 'system/modules/trennlinie/Trennlinie.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_trennlinie' => 'system/modules/trennlinie/templates',
));
