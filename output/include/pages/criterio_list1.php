<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => true,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'master' => array( 'evaluador' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'criterio1' => array( 'totalsType' => '' ),
'criterio2' => array( 'totalsType' => '' ),
'criterio3' => array( 'totalsType' => '' ),
'criterio4' => array( 'totalsType' => '' ),
'criterio5' => array( 'totalsType' => '' ),
'criterio6' => array( 'totalsType' => '' ),
'criterio7' => array( 'totalsType' => '' ),
'criterio8' => array( 'totalsType' => '' ),
'criterio9' => array( 'totalsType' => '' ),
'criterio10' => array( 'totalsType' => '' ),
'equipo' => array( 'totalsType' => '' ),
'nombreevaluador' => array( 'totalsType' => '' ),
'idevaluador' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'equipo',
'criterio1',
'criterio2',
'criterio3',
'criterio4',
'criterio5',
'criterio6',
'criterio7' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'criterio1',
'idevaluador',
'nombreevaluador',
'equipo',
'id',
'criterio7',
'criterio6',
'criterio5',
'criterio4',
'criterio3',
'criterio2' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array( 'criterio1',
'criterio2',
'criterio3',
'criterio4',
'criterio5',
'criterio6',
'criterio7' ),
'fieldItems' => array( 'criterio1' => array( 'simple_grid_field2',
'simple_grid_field12' ),
'criterio2' => array( 'simple_grid_field3',
'simple_grid_field13' ),
'criterio3' => array( 'simple_grid_field4',
'simple_grid_field14' ),
'criterio4' => array( 'simple_grid_field5',
'simple_grid_field15' ),
'criterio5' => array( 'simple_grid_field6',
'simple_grid_field16' ),
'criterio6' => array( 'simple_grid_field7',
'simple_grid_field17' ),
'criterio7' => array( 'simple_grid_field8',
'simple_grid_field18' ),
'equipo' => array( 'grid_field',
'grid_field2' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'inline_add',
'inline_save_all',
'inline_cancel_all',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'grid' => array( 'grid_checkbox',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_field2',
'grid_field',
'simple_grid_field12',
'simple_grid_field2',
'simple_grid_field13',
'simple_grid_field3',
'simple_grid_field14',
'simple_grid_field4',
'simple_grid_field15',
'simple_grid_field5',
'simple_grid_field16',
'simple_grid_field6',
'simple_grid_field17',
'simple_grid_field7',
'simple_grid_field18',
'simple_grid_field8' ),
'top' => array( 'master_info' ) ),
'formXtTags' => array( 'above-grid' => array( 'inlineadd_link',
'saveall_link',
'cancelall_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'inline_add' => 'above-grid',
'inline_save_all' => 'above-grid',
'inline_cancel_all' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'grid_checkbox' => 'grid',
'grid_inline_edit' => 'grid',
'grid_inline_save' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_field2' => 'grid',
'grid_field' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field8' => 'grid',
'master_info' => 'top' ),
'itemLocations' => array( 'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_inline_edit' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_label3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_label3' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_label4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_label4' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'cell_label5' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_label5' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'cell_label6' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_label6' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'cell_label7' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_label7' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field13' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'grid_field' ),
'grid_field_label' => array( 'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'grid_field2' ),
'master_info' => array( 'master_info' ),
'edit_selected' => array( 'edit_selected' ),
'grid_inline_edit' => array( 'grid_inline_edit' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'expand_button' => array( 'expand_button' ),
'inline_add' => array( 'inline_add' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'cell_top' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column',
'inlineedit_column',
'inline_save',
'inline_cancel' ),
'items' => array( 'grid_checkbox',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'equipo_fieldheadercolumn',
'equipo_fieldcolumn' ),
'items' => array( 'grid_field2',
'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label1' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array( 'criterio1_fieldheadercolumn',
'criterio1_fieldcolumn' ),
'items' => array( 'simple_grid_field12',
'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label2' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array( 'criterio2_fieldheadercolumn',
'criterio2_fieldcolumn' ),
'items' => array( 'simple_grid_field13',
'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label3' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array( 'criterio3_fieldheadercolumn',
'criterio3_fieldcolumn' ),
'items' => array( 'simple_grid_field14',
'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label4' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array( 'criterio4_fieldheadercolumn',
'criterio4_fieldcolumn' ),
'items' => array( 'simple_grid_field15',
'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label5' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array( 'criterio5_fieldheadercolumn',
'criterio5_fieldcolumn' ),
'items' => array( 'simple_grid_field16',
'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label6' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array( 'criterio6_fieldheadercolumn',
'criterio6_fieldcolumn' ),
'items' => array( 'simple_grid_field17',
'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label7' => array( 'cols' => array( 0 ),
'rows' => array( 8 ),
'tags' => array( 'criterio7_fieldheadercolumn',
'criterio7_fieldcolumn' ),
'items' => array( 'simple_grid_field18',
'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 10 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 1,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list1',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => -1,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'inline_add',
'inline_save_all',
'inline_cancel_all' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'vertical-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_top' ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_label' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label1' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label2' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label3' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label4' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label5' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label6' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label7' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview' ) ),
'section' => 'foot' ) ),
'cells' => array( 'cell_top' => array( 'model' => 'cell_top',
'items' => array( 'grid_checkbox',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel' ),
'useFullWidth' => true ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array(  ),
'persistent' => false,
'useFullWidth' => true ),
'cell_label' => array( 'model' => 'cell_label',
'items' => array( 'grid_field2',
'grid_field' ),
'align' => 'left',
'orientation' => 'horizontal',
'field' => 'equipo',
'columnName' => 'field' ),
'cell_label1' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field12',
'simple_grid_field2' ),
'align' => 'left',
'orientation' => 'vertical',
'useFullWidth' => true,
'field' => 'criterio1',
'columnName' => 'field' ),
'cell_label2' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field13',
'simple_grid_field3' ),
'align' => 'left',
'orientation' => 'vertical',
'useFullWidth' => true,
'field' => 'criterio2',
'columnName' => 'field' ),
'cell_label3' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field14',
'simple_grid_field4' ),
'align' => 'left',
'orientation' => 'vertical',
'useFullWidth' => true,
'field' => 'criterio3',
'columnName' => 'field' ),
'cell_label4' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field15',
'simple_grid_field5' ),
'align' => 'left',
'orientation' => 'vertical',
'useFullWidth' => true,
'field' => 'criterio4',
'columnName' => 'field' ),
'cell_label5' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field16',
'simple_grid_field6' ),
'align' => 'left',
'orientation' => 'vertical',
'useFullWidth' => true,
'field' => 'criterio5',
'columnName' => 'field' ),
'cell_label6' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field17',
'simple_grid_field7' ),
'align' => 'left',
'orientation' => 'vertical',
'field' => 'criterio6',
'columnName' => 'field' ),
'cell_label7' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field18',
'simple_grid_field8' ),
'align' => 'left',
'orientation' => 'vertical',
'field' => 'criterio7',
'columnName' => 'field' ) ),
'deferredItems' => array( 'grid_checkbox_head' ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'edit_selected',
'export_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'criterio1',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'criterio2',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'criterio3',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'criterio4',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'criterio5',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'criterio6',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'criterio7',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'id',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field11' => array( 'field' => 'equipo',
'type' => 'search_panel_field',
'required' => false ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field2' => array( 'field' => 'criterio1',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'font-size' => '10px',
'placeholder' => array( 'field' => 'criterio1',
'table' => 'criterio',
'type' => 5 ) ),
'simple_grid_field3' => array( 'field' => 'criterio2',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'font-size' => '10px' ),
'simple_grid_field4' => array( 'field' => 'criterio3',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'font-size' => '10px' ),
'simple_grid_field5' => array( 'field' => 'criterio4',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'font-size' => '10px' ),
'simple_grid_field6' => array( 'field' => 'criterio5',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'font-size' => '10px' ),
'simple_grid_field7' => array( 'field' => 'criterio6',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'font-size' => '10px' ),
'simple_grid_field8' => array( 'field' => 'criterio7',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'font-size' => '10px' ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'criterio1',
'font-size' => '10px' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'criterio2',
'font-size' => '10px' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'criterio3',
'font-size' => '10px' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'criterio4',
'font-size' => '10px' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'criterio5',
'font-size' => '10px' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'criterio6',
'font-size' => '10px' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'criterio7',
'font-size' => '10px' ),
'grid_field' => array( 'field' => 'equipo',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'bold' => true,
'font-size' => '11' ),
'search_panel_field12' => array( 'field' => 'nombreevaluador',
'type' => 'search_panel_field',
'required' => false ),
'grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'equipo',
'bold' => true,
'font-size' => '11' ),
'search_panel_field13' => array( 'field' => 'idevaluador',
'type' => 'search_panel_field',
'required' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'evaluador' => 'true' ) ),
'edit_selected' => array( 'type' => 'edit_selected' ),
'grid_inline_edit' => array( 'type' => 'grid_inline_edit' ),
'grid_inline_save' => array( 'type' => 'grid_inline_save' ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'inline_save_all' => array( 'type' => 'inline_save_all' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'expand_button' => array( 'type' => 'expand_button' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 13,
'pageWidth' => 'full',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'pageCSS' => '/* Put  your custom CSS code here */

select[multiple], select[size] {
    height: 20px;
    width: 70px;
}',
'listTotals' => 1 );
		?>