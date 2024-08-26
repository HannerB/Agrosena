<?php
$tdataintegrantes = array();
$tdataintegrantes[".searchableFields"] = array();
$tdataintegrantes[".ShortName"] = "integrantes";
$tdataintegrantes[".OwnerID"] = "";
$tdataintegrantes[".OriginalTable"] = "integrantes";


$tdataintegrantes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataintegrantes[".originalPagesByType"] = $tdataintegrantes[".pagesByType"];
$tdataintegrantes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataintegrantes[".originalPages"] = $tdataintegrantes[".pages"];
$tdataintegrantes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataintegrantes[".originalDefaultPages"] = $tdataintegrantes[".defaultPages"];

//	field labels
$fieldLabelsintegrantes = array();
$fieldToolTipsintegrantes = array();
$pageTitlesintegrantes = array();
$placeHoldersintegrantes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsintegrantes["Spanish"] = array();
	$fieldToolTipsintegrantes["Spanish"] = array();
	$placeHoldersintegrantes["Spanish"] = array();
	$pageTitlesintegrantes["Spanish"] = array();
	$fieldLabelsintegrantes["Spanish"]["id"] = "Id";
	$fieldToolTipsintegrantes["Spanish"]["id"] = "";
	$placeHoldersintegrantes["Spanish"]["id"] = "";
	$fieldLabelsintegrantes["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipsintegrantes["Spanish"]["cedula"] = "";
	$placeHoldersintegrantes["Spanish"]["cedula"] = "";
	$fieldLabelsintegrantes["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsintegrantes["Spanish"]["nombre"] = "";
	$placeHoldersintegrantes["Spanish"]["nombre"] = "";
	$fieldLabelsintegrantes["Spanish"]["pertenece"] = "Pertenece";
	$fieldToolTipsintegrantes["Spanish"]["pertenece"] = "";
	$placeHoldersintegrantes["Spanish"]["pertenece"] = "";
	$fieldLabelsintegrantes["Spanish"]["idequipo"] = "Idequipo";
	$fieldToolTipsintegrantes["Spanish"]["idequipo"] = "";
	$placeHoldersintegrantes["Spanish"]["idequipo"] = "";
	if (count($fieldToolTipsintegrantes["Spanish"]))
		$tdataintegrantes[".isUseToolTips"] = true;
}


	$tdataintegrantes[".NCSearch"] = true;



$tdataintegrantes[".shortTableName"] = "integrantes";
$tdataintegrantes[".nSecOptions"] = 0;

$tdataintegrantes[".mainTableOwnerID"] = "";
$tdataintegrantes[".entityType"] = 0;
$tdataintegrantes[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataintegrantes[".strOriginalTableName"] = "integrantes";

	



$tdataintegrantes[".showAddInPopup"] = false;

$tdataintegrantes[".showEditInPopup"] = false;

$tdataintegrantes[".showViewInPopup"] = false;

$tdataintegrantes[".listAjax"] = false;
//	temporary
//$tdataintegrantes[".listAjax"] = false;

	$tdataintegrantes[".audit"] = false;

	$tdataintegrantes[".locking"] = false;


$pages = $tdataintegrantes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataintegrantes[".edit"] = true;
	$tdataintegrantes[".afterEditAction"] = 0;
	$tdataintegrantes[".closePopupAfterEdit"] = 1;
	$tdataintegrantes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataintegrantes[".add"] = true;
$tdataintegrantes[".afterAddAction"] = 0;
$tdataintegrantes[".closePopupAfterAdd"] = 1;
$tdataintegrantes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataintegrantes[".list"] = true;
}



$tdataintegrantes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataintegrantes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataintegrantes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataintegrantes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataintegrantes[".printFriendly"] = true;
}



$tdataintegrantes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataintegrantes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataintegrantes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataintegrantes[".isUseAjaxSuggest"] = true;



			

$tdataintegrantes[".ajaxCodeSnippetAdded"] = false;

$tdataintegrantes[".buttonsAdded"] = false;

$tdataintegrantes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataintegrantes[".isUseTimeForSearch"] = false;


$tdataintegrantes[".badgeColor"] = "3CB371";


$tdataintegrantes[".allSearchFields"] = array();
$tdataintegrantes[".filterFields"] = array();
$tdataintegrantes[".requiredSearchFields"] = array();

$tdataintegrantes[".googleLikeFields"] = array();
$tdataintegrantes[".googleLikeFields"][] = "id";
$tdataintegrantes[".googleLikeFields"][] = "idequipo";
$tdataintegrantes[".googleLikeFields"][] = "cedula";
$tdataintegrantes[".googleLikeFields"][] = "nombre";
$tdataintegrantes[".googleLikeFields"][] = "pertenece";



$tdataintegrantes[".tableType"] = "list";

$tdataintegrantes[".printerPageOrientation"] = 0;
$tdataintegrantes[".nPrinterPageScale"] = 100;

$tdataintegrantes[".nPrinterSplitRecords"] = 40;

$tdataintegrantes[".geocodingEnabled"] = false;










$tdataintegrantes[".pageSize"] = 20;

$tdataintegrantes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataintegrantes[".strOrderBy"] = $tstrOrderBy;

$tdataintegrantes[".orderindexes"] = array();


$tdataintegrantes[".sqlHead"] = "SELECT id,  	idequipo,  	cedula,  	nombre,  	pertenece";
$tdataintegrantes[".sqlFrom"] = "FROM integrantes";
$tdataintegrantes[".sqlWhereExpr"] = "";
$tdataintegrantes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataintegrantes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataintegrantes[".arrGroupsPerPage"] = $arrGPP;

$tdataintegrantes[".highlightSearchResults"] = true;

$tableKeysintegrantes = array();
$tableKeysintegrantes[] = "id";
$tdataintegrantes[".Keys"] = $tableKeysintegrantes;


$tdataintegrantes[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "integrantes";
	$fdata["Label"] = GetFieldLabel("integrantes","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataintegrantes["id"] = $fdata;
		$tdataintegrantes[".searchableFields"][] = "id";
//	idequipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idequipo";
	$fdata["GoodName"] = "idequipo";
	$fdata["ownerTable"] = "integrantes";
	$fdata["Label"] = GetFieldLabel("integrantes","idequipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idequipo";

		$fdata["sourceSingle"] = "idequipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idequipo";

	
	
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


	$tdataintegrantes["idequipo"] = $fdata;
		$tdataintegrantes[".searchableFields"][] = "idequipo";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "integrantes";
	$fdata["Label"] = GetFieldLabel("integrantes","cedula");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "cedula";

		$fdata["sourceSingle"] = "cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cedula";

	
	
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


	$tdataintegrantes["cedula"] = $fdata;
		$tdataintegrantes[".searchableFields"][] = "cedula";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "integrantes";
	$fdata["Label"] = GetFieldLabel("integrantes","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataintegrantes["nombre"] = $fdata;
		$tdataintegrantes[".searchableFields"][] = "nombre";
//	pertenece
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pertenece";
	$fdata["GoodName"] = "pertenece";
	$fdata["ownerTable"] = "integrantes";
	$fdata["Label"] = GetFieldLabel("integrantes","pertenece");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pertenece";

		$fdata["sourceSingle"] = "pertenece";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pertenece";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataintegrantes["pertenece"] = $fdata;
		$tdataintegrantes[".searchableFields"][] = "pertenece";


$tables_data["integrantes"]=&$tdataintegrantes;
$field_labels["integrantes"] = &$fieldLabelsintegrantes;
$fieldToolTips["integrantes"] = &$fieldToolTipsintegrantes;
$placeHolders["integrantes"] = &$placeHoldersintegrantes;
$page_titles["integrantes"] = &$pageTitlesintegrantes;


changeTextControlsToDate( "integrantes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["integrantes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["integrantes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_integrantes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	idequipo,  	cedula,  	nombre,  	pertenece";
$proto0["m_strFrom"] = "FROM integrantes";
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
	"m_strName" => "id",
	"m_strTable" => "integrantes",
	"m_srcTableName" => "integrantes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "integrantes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idequipo",
	"m_strTable" => "integrantes",
	"m_srcTableName" => "integrantes"
));

$proto8["m_sql"] = "idequipo";
$proto8["m_srcTableName"] = "integrantes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "integrantes",
	"m_srcTableName" => "integrantes"
));

$proto10["m_sql"] = "cedula";
$proto10["m_srcTableName"] = "integrantes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "integrantes",
	"m_srcTableName" => "integrantes"
));

$proto12["m_sql"] = "nombre";
$proto12["m_srcTableName"] = "integrantes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pertenece",
	"m_strTable" => "integrantes",
	"m_srcTableName" => "integrantes"
));

$proto14["m_sql"] = "pertenece";
$proto14["m_srcTableName"] = "integrantes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "integrantes";
$proto17["m_srcTableName"] = "integrantes";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "idequipo";
$proto17["m_columns"][] = "cedula";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "pertenece";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "integrantes";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "integrantes";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="integrantes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_integrantes = createSqlQuery_integrantes();


	
		;

					

$tdataintegrantes[".sqlquery"] = $queryData_integrantes;



$tdataintegrantes[".hasEvents"] = false;

?>