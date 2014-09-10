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
 * Class ContentDivider
 *
 * Front end content element "divider".
 * @copyright  CLICKPRESS Internetagentur 2005-2013
 * @author     Stefan Schulz-Lauterbach <http://clickpress.de>
 * @package    divider
 */
class ContentDivider extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_divider';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		return;
	}
}
