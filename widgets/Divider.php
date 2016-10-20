<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Class SelectMenu
 *
 * Provide methods to handle select menus.
 * @copyright  Leo Feyer 2005-2013
 * @author     Leo Feyer <https://contao.org>
 * @package    Core
 */
class Divider extends \Widget
{


	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'form_divider';


	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{

		return sprintf('<hr>%s',
						$this->wizard);
	}
}
