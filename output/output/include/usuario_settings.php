<?php
$tdatausuario = array();
$tdatausuario[".searchableFields"] = array();
$tdatausuario[".ShortName"] = "usuario";
$tdatausuario[".OwnerID"] = "";
$tdatausuario[".OriginalTable"] = "usuario";


$tdatausuario[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" );
$tdatausuario[".originalPagesByType"] = $tdatausuario[".pagesByType"];
$tdatausuario[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" ) );
$tdatausuario[".originalPages"] = $tdatausuario[".pages"];
$tdatausuario[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\"}" );
$tdatausuario[".originalDefaultPages"] = $tdatausuario[".defaultPages"];

//	field labels
$fieldLabelsusuario = array();
$fieldToolTipsusuario = array();
$pageTitlesusuario = array();
$placeHoldersusuario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuario["Spanish"] = array();
	$fieldToolTipsusuario["Spanish"] = array();
	$placeHoldersusuario["Spanish"] = array();
	$pageTitlesusuario["Spanish"] = array();
	$fieldLabelsusuario["Spanish"]["id_usuario"] = "Id Usuario";
	$fieldToolTipsusuario["Spanish"]["id_usuario"] = "";
	$placeHoldersusuario["Spanish"]["id_usuario"] = "";
	$fieldLabelsusuario["Spanish"]["rol"] = "Rol";
	$fieldToolTipsusuario["Spanish"]["rol"] = "";
	$placeHoldersusuario["Spanish"]["rol"] = "";
	$fieldLabelsusuario["Spanish"]["contrase_a"] = "Contraseña";
	$fieldToolTipsusuario["Spanish"]["contrase_a"] = "";
	$placeHoldersusuario["Spanish"]["contrase_a"] = "";
	$fieldLabelsusuario["Spanish"]["idevaluador"] = "Idevaluador";
	$fieldToolTipsusuario["Spanish"]["idevaluador"] = "";
	$placeHoldersusuario["Spanish"]["idevaluador"] = "";
	$fieldLabelsusuario["Spanish"]["nomusuario"] = "Nomusuario";
	$fieldToolTipsusuario["Spanish"]["nomusuario"] = "";
	$placeHoldersusuario["Spanish"]["nomusuario"] = "";
	$fieldLabelsusuario["Spanish"]["id_rol"] = "Id Rol";
	$fieldToolTipsusuario["Spanish"]["id_rol"] = "";
	$placeHoldersusuario["Spanish"]["id_rol"] = "";
	if (count($fieldToolTipsusuario["Spanish"]))
		$tdatausuario[".isUseToolTips"] = true;
}


	$tdatausuario[".NCSearch"] = true;



$tdatausuario[".shortTableName"] = "usuario";
$tdatausuario[".nSecOptions"] = 0;

$tdatausuario[".mainTableOwnerID"] = "";
$tdatausuario[".entityType"] = 0;
$tdatausuario[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdatausuario[".strOriginalTableName"] = "usuario";

	



$tdatausuario[".showAddInPopup"] = false;

$tdatausuario[".showEditInPopup"] = false;

$tdatausuario[".showViewInPopup"] = false;

$tdatausuario[".listAjax"] = false;
//	temporary
//$tdatausuario[".listAjax"] = false;

	$tdatausuario[".audit"] = false;

	$tdatausuario[".locking"] = false;


$pages = $tdatausuario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuario[".edit"] = true;
	$tdatausuario[".afterEditAction"] = 1;
	$tdatausuario[".closePopupAfterEdit"] = 1;
	$tdatausuario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuario[".add"] = true;
$tdatausuario[".afterAddAction"] = 1;
$tdatausuario[".closePopupAfterAdd"] = 1;
$tdatausuario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuario[".list"] = true;
}



$tdatausuario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuario[".printFriendly"] = true;
}



$tdatausuario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuario[".isUseAjaxSuggest"] = true;



			

$tdatausuario[".ajaxCodeSnippetAdded"] = false;

$tdatausuario[".buttonsAdded"] = false;

$tdatausuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuario[".isUseTimeForSearch"] = false;


$tdatausuario[".badgeColor"] = "CD853F";


$tdatausuario[".allSearchFields"] = array();
$tdatausuario[".filterFields"] = array();
$tdatausuario[".requiredSearchFields"] = array();

$tdatausuario[".googleLikeFields"] = array();
$tdatausuario[".googleLikeFields"][] = "id_usuario";
$tdatausuario[".googleLikeFields"][] = "id_rol";
$tdatausuario[".googleLikeFields"][] = "rol";
$tdatausuario[".googleLikeFields"][] = "contraseña";
$tdatausuario[".googleLikeFields"][] = "idevaluador";
$tdatausuario[".googleLikeFields"][] = "nomusuario";



$tdatausuario[".tableType"] = "list";

$tdatausuario[".printerPageOrientation"] = 0;
$tdatausuario[".nPrinterPageScale"] = 100;

$tdatausuario[".nPrinterSplitRecords"] = 40;

$tdatausuario[".geocodingEnabled"] = false;










$tdatausuario[".pageSize"] = 20;

$tdatausuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuario[".strOrderBy"] = $tstrOrderBy;

$tdatausuario[".orderindexes"] = array();


$tdatausuario[".sqlHead"] = "SELECT id_usuario,  	id_rol,  	rol,  	`contraseña`,  	idevaluador,  	nomusuario";
$tdatausuario[".sqlFrom"] = "FROM usuario";
$tdatausuario[".sqlWhereExpr"] = "";
$tdatausuario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuario[".arrGroupsPerPage"] = $arrGPP;

$tdatausuario[".highlightSearchResults"] = true;

$tableKeysusuario = array();
$tableKeysusuario[] = "id_usuario";
$tdatausuario[".Keys"] = $tableKeysusuario;


$tdatausuario[".hideMobileList"] = array();




//	id_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_usuario";
	$fdata["GoodName"] = "id_usuario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","id_usuario");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_usuario";

		$fdata["sourceSingle"] = "id_usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_usuario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausuario["id_usuario"] = $fdata;
		$tdatausuario[".searchableFields"][] = "id_usuario";
//	id_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_rol";
	$fdata["GoodName"] = "id_rol";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","id_rol");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_rol";

		$fdata["sourceSingle"] = "id_rol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_rol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausuario["id_rol"] = $fdata;
		$tdatausuario[".searchableFields"][] = "id_rol";
//	rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rol";
	$fdata["GoodName"] = "rol";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","rol");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "rol";

		$fdata["sourceSingle"] = "rol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "admin";
	$edata["LookupValues"][] = "evaluador";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausuario["rol"] = $fdata;
		$tdatausuario[".searchableFields"][] = "rol";
//	contraseña
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contraseña";
	$fdata["GoodName"] = "contrase_a";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","contrase_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contraseña";

		$fdata["sourceSingle"] = "contraseña";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`contraseña`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausuario["contraseña"] = $fdata;
		$tdatausuario[".searchableFields"][] = "contraseña";
//	idevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idevaluador";
	$fdata["GoodName"] = "idevaluador";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","idevaluador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idevaluador";

		$fdata["sourceSingle"] = "idevaluador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idevaluador";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausuario["idevaluador"] = $fdata;
		$tdatausuario[".searchableFields"][] = "idevaluador";
//	nomusuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nomusuario";
	$fdata["GoodName"] = "nomusuario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","nomusuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomusuario";

		$fdata["sourceSingle"] = "nomusuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomusuario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausuario["nomusuario"] = $fdata;
		$tdatausuario[".searchableFields"][] = "nomusuario";


$tables_data["usuario"]=&$tdatausuario;
$field_labels["usuario"] = &$fieldLabelsusuario;
$fieldToolTips["usuario"] = &$fieldToolTipsusuario;
$placeHolders["usuario"] = &$placeHoldersusuario;
$page_titles["usuario"] = &$pageTitlesusuario;


changeTextControlsToDate( "usuario" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["usuario"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["usuario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_usuario,  	id_rol,  	rol,  	`contraseña`,  	idevaluador,  	nomusuario";
$proto0["m_strFrom"] = "FROM usuario";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_usuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto6["m_sql"] = "id_usuario";
$proto6["m_srcTableName"] = "usuario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rol",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto8["m_sql"] = "id_rol";
$proto8["m_srcTableName"] = "usuario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rol",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto10["m_sql"] = "rol";
$proto10["m_srcTableName"] = "usuario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contraseña",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto12["m_sql"] = "`contraseña`";
$proto12["m_srcTableName"] = "usuario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idevaluador",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto14["m_sql"] = "idevaluador";
$proto14["m_srcTableName"] = "usuario";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nomusuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto16["m_sql"] = "nomusuario";
$proto16["m_srcTableName"] = "usuario";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "usuario";
$proto19["m_srcTableName"] = "usuario";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_usuario";
$proto19["m_columns"][] = "id_rol";
$proto19["m_columns"][] = "rol";
$proto19["m_columns"][] = "contraseña";
$proto19["m_columns"][] = "idevaluador";
$proto19["m_columns"][] = "nomusuario";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "usuario";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "usuario";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="usuario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuario = createSqlQuery_usuario();


	
		;

						

$tdatausuario[".sqlquery"] = $queryData_usuario;



include_once(getabspath("include/usuario_events.php"));
$tdatausuario[".hasEvents"] = true;

?>