<?php

// Pandora FMS - http://pandorafms.com
// ==================================================
// Copyright (c) 2005-2011 Artica Soluciones Tecnologicas
// Please see http://pandorafms.org for full contribution list

// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; version 2

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.

global $config;
check_login ();
ui_require_css_file ('firts_task');
?>
<?php 

ui_print_info_message ( array('no_close'=>true, 'message'=>  __('There are no custom graphs defined yet.') ) ); 
?>

<div class="new_task">
	<div class="image_task">
		<?php echo html_print_image('images/firts_task/icono_grande_custom_reporting.png', true, array("title" => __('Custom Graphs')));?>
	</div>
	<div class="text_task">
		<h3> <?php echo __('Create Custom Graph'); ?></h3>
		<p id="description_task"> <?php echo __("Graphs are designed to show the data collected by Pandora FMS in a temporary scale defined by the user.
				Pandora FMS Graphs display data in real time. They are generated every time the operator requires any of them and display the up-to-date state.
				There are two types of graphs: The agent's automated graphs and the graphs the user customizes by using one or more modules to do so."); ?></p>
		<form action="index.php?sec=gservers&sec2=godmode/servers/manage_recontask_form&create" method="post">
			<input type="submit" class="button_task" value="<?php echo __('Create Custom Graph'); ?>" />
		</form>
	</div>
</div>