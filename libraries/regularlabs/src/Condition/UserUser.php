<?php
/**
 * @package         Regular Labs Library
 * @version         21.3.19623
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            http://www.regularlabs.com
 * @copyright       Copyright © 2021 Regular Labs All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

namespace RegularLabs\Library\Condition;

defined('_JEXEC') or die;

use Joomla\CMS\Factory as JFactory;

/**
 * Class UserUser
 * @package RegularLabs\Library\Condition
 */
class UserUser
	extends User
{
	public function pass()
	{
		return $this->passSimple(JFactory::getUser()->get('id'));
	}
}
