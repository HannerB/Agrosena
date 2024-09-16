<?php
$tdatarol = array();
$tdatarol[".searchableFields"] = array();
$tdatarol[".ShortName"] = "rol";
$tdatarol[".OwnerID"] = "";
$tdatarol[".OriginalTable"] = "rol";


$tdatarol[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatarol[".originalPagesByType"] = $tdatarol[".pagesByType"];
$tdatarol[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatarol[".originalPages"] = $tdatarol[".pages"];
$tdatarol[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatarol[".originalDefaultPages"] = $tdatarol[".defaultPages"];

//	field labels
$fieldLabelsrol = array();
$fieldToolTipsrol = array();
$pageTitlesrol = array();
$placeHoldersrol = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrol["Spanish"] = array();
	$fieldToolTipsrol["Spanish"] = array();
	$placeHoldersrol["Spanish"] = array();
	$pageTitlesrol["Spanish"] = array();
	$fieldLabelsrol["Spanish"]["id"] = "Id";
	$fieldToolTipsrol["Spanish"]["id"] = "";
	$placeHoldersrol["Spanish"]["id"] = "";
	$fieldLabelsrol["Spanish"]["rol"] = "Rol";
	$fieldToolTipsrol["Spanish"]["rol"] = "";
	$placeHoldersrol["Spanish"]["rol"] = "";
	if (count($fieldToolTipsrol["Spanish"]))
		$tdatarol[".isUseToolTips"] = true;
}


	$tdatarol[".NCSearch"] = true;



$tdatarol[".shortTableName"] = "rol";
$tdatarol[".nSecOptions"] = 0;

$tdatarol[".mainTableOwnerID"] = "";
$tdatarol[".entityType"] = 0;
$tdatarol[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdatarol[".strOriginalTableName"] = "rol";

	



$tdatarol[".showAddInPopup"] = false;

$tdatarol[".showEditInPopup"] = false;

$tdatarol[".showViewInPopup"] = false;

$tdatarol[".listAjax"] = false;
//	temporary
//$tdatarol[".listAjax"] = false;

	$tdatarol[".audit"] = false;

	$tdatarol[".locking"] = false;


$pages = $tdatarol[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarol[".edit"] = true;
	$tdatarol[".afterEditAction"] = 1;
	$tdatarol[".closePopupAfterEdit"] = 1;
	$tdatarol[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarol[".add"] = true;
$tdatarol[".afterAddAction"] = 1;
$tdatarol[".closePopupAfterAdd"] = 1;
$tdatarol[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarol[".list"] = true;
}



$tdatarol[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarol[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarol[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarol[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarol[".printFriendly"] = true;
}



$tdatarol[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarol[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarol[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarol[".isUseAjaxSuggest"] = true;



			

$tdatarol[".ajaxCodeSnippetAdded"] = false;

$tdatarol[".buttonsAdded"] = false;

$tdatarol[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarol[".isUseTimeForSearch"] = false;


$tdatarol[".badgeColor"] = "00C2C5";


$tdatarol[".allSearchFields"] = array();
$tdatarol[".filterFields"] = array();
$tdatarol[".requiredSearchFields"] = array();

$tdatarol[".googleLikeFields"] = array();
$tdatarol[".googleLikeFields"][] = "id";
$tdatarol[".googleLikeFields"][] = "rol";



$tdatarol[".tableType"] = "list";

$tdatarol[".printerPageOrientation"] = 0;
$tdatarol[".nPrinterPageScale"] = 100;

$tdatarol[".nPrinterSplitRecords"] = 40;

$tdatarol[".geocodingEnabled"] = false;










$tdatarol[".pageSize"] = 20;

$tdatarol[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarol[".strOrderBy"] = $tstrOrderBy;

$tdatarol[".orderindexes"] = array();


$tdatarol[".sqlHead"] = "SELECT id,  	rol";
$tdatarol[".sqlFrom"] = "FROM rol";
$tdatarol[".sqlWhereExpr"] = "";
$tdatarol[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarol[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarol[".arrGroupsPerPage"] = $arrGPP;

$tdatarol[".highlightSearchResults"] = true;

$tableKeysrol = array();
$tdatarol[".Keys"] = $tableKeysrol;


$tdatarol[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "rol";
	$fdata["Label"] = GetFieldLabel("rol","id");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatarol["id"] = $fdata;
		$tdatarol[".searchableFields"][] = "id";
//	rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rol";
	$fdata["GoodName"] = "rol";
	$fdata["ownerTable"] = "rol";
	$fdata["Label"] = GetFieldLabel("rol","rol");
	$fdata["FieldType"] = 200;


	
	
			

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

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


	$tdatarol["rol"] = $fdata;
		$tdatarol[".searchableFields"][] = "rol";


$tables_data["rol"]=&$tdatarol;
$field_labels["rol"] = &$fieldLabelsrol;
$fieldToolTips["rol"] = &$fieldToolTipsrol;
$placeHolders["rol"] = &$placeHoldersrol;
$page_titles["rol"] = &$pageTitlesrol;


changeTextControlsToDate( "rol" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rol"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rol"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rol()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	rol";
$proto0["m_strFrom"] = "FROM rol";
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
	"m_strTable" => "rol",
	"m_srcTableName" => "rol"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "rol";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rol",
	"m_strTable" => "rol",
	"m_srcTableName" => "rol"
));

$proto8["m_sql"] = "rol";
$proto8["m_srcTableName"] = "rol";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "rol";
$proto11["m_srcTableName"] = "rol";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "rol";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "rol";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "rol";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rol";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rol = createSqlQuery_rol();


	
		;

		

$tdatarol[".sqlquery"] = $queryData_rol;



$tdatarol[".hasEvents"] = false;

?>