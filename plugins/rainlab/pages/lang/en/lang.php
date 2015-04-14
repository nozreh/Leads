<?php

return [
    'plugin' => [
        'name' => 'Pages',
        'description' => 'Pages & menus features.',
    ],
    'page' => [
        'menu_label' => 'Pages',
        'delete_confirmation' => 'Do you really want to delete selected pages? This will also delete the subpages, if any.',
        'no_records' => 'No pages found',
        'delete_confirm_single' => 'Do you really want delete this page? This will also delete the subpages, if any.',
        'new' => 'New page',
        'add_subpage' => 'Add subpage',
        'invalid_url' => 'Invalid URL format. The URL should start with the forward slash symbol and can contain digits, Latin letters and the following symbols: _-/',
        'url_not_unique' => 'This URL is already used by another page.',
        'layout' => 'Layout',
        'layouts_not_found' => 'Layouts not found',
        'saved' => 'The page has been successfully saved.',
        'manage_pages' => 'Manage the static pages',
        'manage_menus' => 'Manage the static menus',
        'access_snippets' => 'Manage snippets',
        'manage_content' => 'Manage content'
    ],
    'menu' => [
        'menu_label' => 'Menus',
        'delete_confirmation' => 'Do you really want to delete selected menus?',
        'no_records' => 'No menus found',
        'new' => 'New menu',
        'new_name' => 'New menu',
        'new_code' => 'new-menu',
        'delete_confirm_single' => 'Do you really want delete this menu?',
        'saved' => 'The menu has been successfully saved.',
        'name' => 'Name',
        'code' => 'Code',
        'items' => 'Menu items',
        'add_subitem' => 'Add subitem',
        'no_records' => 'No items found',
        'code_required' => 'The Code is requried',
        'invalid_code' => 'Invalid Code format. The Code can contain digits, Latin letters and the following symbols: _-'
    ],
    'menuitem' => [
        'title' => 'Title',
        'editor_title' => 'Edit Menu Item',
        'type' => 'Type',
        'allow_nested_items' => 'Allow nested items',
        'allow_nested_items_comment' => 'Nested items could be generated dynamically by static page and some other item types',
        'url' => 'URL',
        'reference' => 'Reference',
        'title_required' => 'The Title is required',
        'unknown_type' => 'Uknown menu item type',
        'unnamed' => 'Unnamed menu item',
        'add_item' => 'Add <u>I</u>tem',
        'new_item' => 'New menu item',
        'replace' => 'Replace this item with its generated children',
        'replace_comment' => 'Use this checkbox to push generated menu items to the same level with this item. This item itself will be hidden.',
        'cms_page' => 'CMS Page',
        'cms_page_comment' => 'Select a page to open when the menu item is clicked.',
        'reference_required' => 'The menu item reference is required.',
        'url_required' => 'The URL is required',
        'cms_page_required' => 'Please select a CMS page',
        'code' => 'Code',
        'code_comment' => 'Enter the menu item code if you want to access it with the API.'
    ],
    'content' => [
        'menu_label' => 'Content',
        'cant_save_to_dir' => 'Saving content files to the static-pages directory is not allowed.'
    ],
    'sidebar' => [
        'add' => 'Add',
        'search' => 'Search...'
    ],
    'object' => [
        'invalid_type' => 'Unknown object type',
        'not_found' => 'The requested object was not found.'
    ],
    'editor' => [
        'title' => 'Title',
        'new_title' => 'New page title',
        'content' => 'Content',
        'url' => 'URL',
        'filename' => 'File Name',
        'layout' => 'Layout',
        'description' => 'Description',
        'preview' => 'Preview',
        'enter_fullscreen' => 'Enter fullscreen mode',
        'exit_fullscreen' => 'Exit fullscreen mode',
        'hidden' => 'Hidden',
        'hidden_comment' => 'Hidden pages are accessible only by logged-in back-end users.',
        'navigation_hidden' => 'Hide in navigation',
        'navigation_hidden_comment' => 'Check this box to hide this page from automatically generated menus and breadcrumbs.',
    ],
    'snippet' => [
        'partialtab' => 'Snippet',
        'code' => 'Snippet code',
        'code_comment' => 'Enter a code to make this partial available as a snippet in the Static Pages plugin.',
        'name' => 'Name',
        'name_comment' => 'The name is displayed in the snippet list in the Static Pages sidebar and on a Page when a snippet is added.',
        'no_records' => 'No snippets found',
        'menu_label' => 'Snippets',
        'column_property' => 'Property title',
        'column_type' => 'Type',
        'column_code' => 'Code',
        'column_default' => 'Default',
        'column_options' => 'Options',
        'column_type_string' => 'String',
        'column_type_checkbox' => 'Checkbox',
        'column_type_dropdown' => 'Dropdown',
        'not_found' => 'Snippet with the requested code :code was not found in the theme.',
        'property_format_error' => 'Property code should start with a Latin letter and can contain only Latin letters and digits',
        'invalid_option_key' => 'Invalid drop-down option key: %s. Option keys can contain only digits, Latin letters and characters _ and -'
    ]
];