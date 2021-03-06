<?php

return [

	'user-management' => [
		'title' => 'User Management',
		'created_at' => 'Time',
		'fields' => [
		],
	],

	'abilities' => [
		'title' => 'Abilities',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
		],
	],

	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'abilities' => 'Abilities',
		],
	],

	'users' => [
		'title' => 'Users',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'roles' => 'Roles',
			'remember-token' => 'Remember token',
		],
	],

    'herbariums' => [
		'title' => 'Herbaria',
		'created_at' => 'Time',
		'fields' => [
			'code' => 'Code',
			'name' => 'Name',
			'curator' => 'Curator',
            'email' => 'Email',
		],
	],

    'collectors' => [
		'title' => 'Collectors',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
            'abbreviation' => 'Standard Abbreviation',
			'institute' => 'Institue',
		],
	],

    'collections' => [
		'title' => 'Collections',
		'created_at' => 'Time',
		'fields' => [
			'number' => 'Number',
            'date' => 'Collection Date',
			'location' => 'Location',
		],
	],

    'specimens' => [
		'title' => 'Specimens',
		'created_at' => 'Time',
		'fields' => [
            'barcode' => 'Barcode',
			'number' => 'Number',
            'date' => 'Collection Date',
			'location' => 'Location',
		],
	],

	'app_create' => 'Create',
	'app_save' => 'Save',
	'app_edit' => 'Edit',
	'app_view' => 'View',
	'app_update' => 'Update',
	'app_list' => 'List',
    'app_action' => 'Action',
	'app_no_entries_in_table' => 'No entries in table',
	'custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Logout',
	'app_add_new' => 'Add new',
	'app_are_you_sure' => 'Are you sure?',
	'app_back_to_list' => 'Back to list',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Delete',
	'global_title' => 'CASBRAHMS Manager',
];
