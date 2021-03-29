<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
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
		<div class="row">
			<div class="col-4">
				<img style="display:block; margin-left: auto; margin-right: auto; width: 65%;" src="/images/profile/pro1.jpg" alt>
			</div>
			<div class="col-8">
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
					<!-- change from date into email -->
					<?php echo JText::_('COM_USERS_PROFILE_EMAIL1_LABEL'); ?>
				</dt>
				<dd>
					<?php $user = JFactory::getUser();
					echo $user->email; ?>
				</dd>
				<?php
					$lang = JFactory::getLanguage();
					// echo 'Current language is: ' . $lang->getName();
				?>
				<dt>
					<?php echo JText::_('COM_USERS_PROFILE_POSITION'); ?>
				</dt>
				<dd>
					<?php
					// Thai (th-TH)
						if ($lang->getName() == "English (United Kingdom)"){
							echo "Secretary of Computer Science";
						} elseif ($lang->getName() == "Thai (th-TH)"){
							echo "เลขานุการสาขาวิชาวิทยาการคอมพิวเตอร์";
						} 
					?>
				</dd>
				<dt>
					<?php echo JText::_('COM_USERS_PROFILE_DUTY'); ?>	
				</dt>
				<dd>
					<?php
					// Thai (th-TH)
						if ($lang->getName() == "English (United Kingdom)"){
							echo "Administering the secretary work of computer science";
						} elseif ($lang->getName() == "Thai (th-TH)"){
							echo "บริหารงานเลขานุการสาขาวิชาวิทยาการคอมพิวเตอร์";
						} 
					?>	
				</dd>
			</div>
		</div>
</fieldset>