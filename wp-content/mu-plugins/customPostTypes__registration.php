
<?php

	function customPostTypes_registration__HANDLER(){
		
		//-> Projects Post type
		register_post_type("project", array(
			"public" => true,
			"supports" => array("title", "editor", "excerpt"),
			"show_in_rest" => false,
			"rewrite" => array(
				"slug" => "projects",
			),
			"has_archive" => false,
			"labels" => array(
				"name" => "Projects",
				"all_items" => "All Projects",
				"add_new_item" => "Add new Project",
				"edit_item" => "Edit Project",
				"singular_name" => "Project"
			),
			"menu_icon" => "dashicons-awards"
		));
	}

add_action('init', "customPostTypes_registration__HANDLER");
