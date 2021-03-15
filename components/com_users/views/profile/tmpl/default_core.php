<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<fieldset id="users-profile-core">
	<legend>
		<?php echo JText::_('COM_USERS_PROFILE_CORE_LEGEND'); ?>
	</legend>
	<dl class="dl-horizontal">
		<dt>
			<?php echo JText::_('COM_USERS_PROFILE_NAME_LABEL'); ?>
		</dt>
		<dd>
			<?php echo $this->escape($this->data->name); ?>
		</dd>
		<dt>
			<?php echo JText::_('COM_USERS_PROFILE_USERNAME_LABEL'); ?>
		</dt>
		<dd>
			<?php echo $this->escape($this->data->username); ?>
		</dd>
		<dt>
    		<?php echo JText::_('COM_USERS_PROFILE_EMAIL1_LABEL'); ?> 
		</dt>
		<dd>
    		<?php $user = JFactory::getUser();
          		echo $user->email; ?>
		</dd>

	</dl>
</fieldset>
