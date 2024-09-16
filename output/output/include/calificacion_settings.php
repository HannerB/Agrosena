<?php
$tdatacalificacion = array();
$tdatacalificacion[".searchableFields"] = array();
$tdatacalificacion[".ShortName"] = "calificacion";
$tdatacalificacion[".OwnerID"] = "";
$tdatacalificacion[".OriginalTable"] = "calificacion";


$tdatacalificacion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacalificacion[".originalPagesByType"] = $tdatacalificacion[".pagesByType"];
$tdatacalificacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacalificacion[".originalPages"] = $tdatacalificacion[".pages"];
$tdatacalificacion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacalificacion[".originalDefaultPages"] = $tdatacalificacion[".defaultPages"];

//	field labels
$fieldLabelscalificacion = array();
$fieldToolTipscalificacion = array();
$pageTitlescalificacion = array();
$placeHolderscalificacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscalificacion["Spanish"] = array();
	$fieldToolTipscalificacion["Spanish"] = array();
	$placeHolderscalificacion["Spanish"] = array();
	$pageTitlescalificacion["Spanish"] = array();
	$fieldLabelscalificacion["Spanish"]["id"] = "Id";
	$fieldToolTipscalificacion["Spanish"]["id"] = "";
	$placeHolderscalificacion["Spanish"]["id"] = "";
	$fieldLabelscalificacion["Spanish"]["nota"] = "Nota";
	$fieldToolTipscalificacion["Spanish"]["nota"] = "";
	$placeHolderscalificacion["Spanish"]["nota"] = "";
	if (count($fieldToolTipscalificacion["Spanish"]))
		$tdatacalificacion[".isUseToolTips"] = true;
}


	$tdatacalificacion[".NCSearch"] = true;



$tdatacalificacion[".shortTableName"] = "calificacion";
$tdatacalificacion[".nSecOptions"] = 0;

$tdatacalificacion[".mainTableOwnerID"] = "";
$tdatacalificacion[".entityType"] = 0;
$tdatacalificacion[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdatacalificacion[".strOriginalTableName"] = "calificacion";

	



$tdatacalificacion[".showAddInPopup"] = false;

$tdatacalificacion[".showEditInPopup"] = false;

$tdatacalificacion[".showViewInPopup"] = false;

$tdatacalificacion[".listAjax"] = false;
//	temporary
//$tdatacalificacion[".listAjax"] = false;

	$tdatacalificacion[".audit"] = false;

	$tdatacalificacion[".locking"] = false;


$pages = $tdatacalificacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalificacion[".edit"] = true;
	$tdatacalificacion[".afterEditAction"] = 1;
	$tdatacalificacion[".closePopupAfterEdit"] = 1;
	$tdatacalificacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalificacion[".add"] = true;
$tdatacalificacion[".afterAddAction"] = 1;
$tdatacalificacion[".closePopupAfterAdd"] = 1;
$tdatacalificacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalificacion[".list"] = true;
}



$tdatacalificacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalificacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalificacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalificacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalificacion[".printFriendly"] = true;
}



$tdatacalificacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalificacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalificacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalificacion[".isUseAjaxSuggest"] = true;



			

$tdatacalificacion[".ajaxCodeSnippetAdded"] = false;

$tdatacalificacion[".buttonsAdded"] = false;

$tdatacalificacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalificacion[".isUseTimeForSearch"] = false;


$tdatacalificacion[".badgeColor"] = "008B8B";


$tdatacalificacion[".allSearchFields"] = array();
$tdatacalificacion[".filterFields"] = array();
$tdatacalificacion[".requiredSearchFields"] = array();

$tdatacalificacion[".googleLikeFields"] = array();
$tdatacalificacion[".googleLikeFields"][] = "id";
$tdatacalificacion[".googleLikeFields"][] = "nota";



$tdatacalificacion[".tableType"] = "list";

$tdatacalificacion[".printerPageOrientation"] = 0;
$tdatacalificacion[".nPrinterPageScale"] = 100;

$tdatacalificacion[".nPrinterSplitRecords"] = 40;

$tdatacalificacion[".geocodingEnabled"] = false;










$tdatacalificacion[".pageSize"] = 20;

$tdatacalificacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalificacion[".strOrderBy"] = $tstrOrderBy;

$tdatacalificacion[".orderindexes"] = array();


$tdatacalificacion[".sqlHead"] = "SELECT id,  	nota";
$tdatacalificacion[".sqlFrom"] = "FROM calificacion";
$tdatacalificacion[".sqlWhereExpr"] = "";
$tdatacalificacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalificacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalificacion[".arrGroupsPerPage"] = $arrGPP;

$tdatacalificacion[".highlightSearchResults"] = true;

$tableKeyscalificacion = array();
$tableKeyscalificacion[] = "id";
$tdatacalificacion[".Keys"] = $tableKeyscalificacion;


$tdatacalificacion[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calificacion";
	$fdata["Label"] = GetFieldLabel("calificacion","id");
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


	$tdatacalificacion["id"] = $fdata;
		$tdatacalificacion[".searchableFields"][] = "id";
//	nota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nota";
	$fdata["GoodName"] = "nota";
	$fdata["ownerTable"] = "calificacion";
	$fdata["Label"] = GetFieldLabel("calificacion","nota");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nota";

		$fdata["sourceSingle"] = "nota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nota";

	
	
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


	$tdatacalificacion["nota"] = $fdata;
		$tdatacalificacion[".searchableFields"][] = "nota";


$tables_data["calificacion"]=&$tdatacalificacion;
$field_labels["calificacion"] = &$fieldLabelscalificacion;
$fieldToolTips["calificacion"] = &$fieldToolTipscalificacion;
$placeHolders["calificacion"] = &$placeHolderscalificacion;
$page_titles["calificacion"] = &$pageTitlescalificacion;


changeTextControlsToDate( "calificacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calificacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calificacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calificacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nota";
$proto0["m_strFrom"] = "FROM calificacion";
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
	"m_strTable" => "calificacion",
	"m_srcTableName" => "calificacion"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calificacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nota",
	"m_strTable" => "calificacion",
	"m_srcTableName" => "calificacion"
));

$proto8["m_sql"] = "nota";
$proto8["m_srcTableName"] = "calificacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "calificacion";
$proto11["m_srcTableName"] = "calificacion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "nota";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "calificacion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "calificacion";
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
$proto0["m_srcTableName"]="calificacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calificacion = createSqlQuery_calificacion();


	
		;

		

$tdatacalificacion[".sqlquery"] = $queryData_calificacion;



$tdatacalificacion[".hasEvents"] = false;

?>