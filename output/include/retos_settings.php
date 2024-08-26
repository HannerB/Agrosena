<?php
$tdataretos = array();
$tdataretos[".searchableFields"] = array();
$tdataretos[".ShortName"] = "retos";
$tdataretos[".OwnerID"] = "";
$tdataretos[".OriginalTable"] = "retos";


$tdataretos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataretos[".originalPagesByType"] = $tdataretos[".pagesByType"];
$tdataretos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataretos[".originalPages"] = $tdataretos[".pages"];
$tdataretos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataretos[".originalDefaultPages"] = $tdataretos[".defaultPages"];

//	field labels
$fieldLabelsretos = array();
$fieldToolTipsretos = array();
$pageTitlesretos = array();
$placeHoldersretos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsretos["Spanish"] = array();
	$fieldToolTipsretos["Spanish"] = array();
	$placeHoldersretos["Spanish"] = array();
	$pageTitlesretos["Spanish"] = array();
	$fieldLabelsretos["Spanish"]["id"] = "Id";
	$fieldToolTipsretos["Spanish"]["id"] = "";
	$placeHoldersretos["Spanish"]["id"] = "";
	$fieldLabelsretos["Spanish"]["reto"] = "Reto";
	$fieldToolTipsretos["Spanish"]["reto"] = "";
	$placeHoldersretos["Spanish"]["reto"] = "";
	if (count($fieldToolTipsretos["Spanish"]))
		$tdataretos[".isUseToolTips"] = true;
}


	$tdataretos[".NCSearch"] = true;



$tdataretos[".shortTableName"] = "retos";
$tdataretos[".nSecOptions"] = 0;

$tdataretos[".mainTableOwnerID"] = "";
$tdataretos[".entityType"] = 0;
$tdataretos[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataretos[".strOriginalTableName"] = "retos";

	



$tdataretos[".showAddInPopup"] = false;

$tdataretos[".showEditInPopup"] = false;

$tdataretos[".showViewInPopup"] = false;

$tdataretos[".listAjax"] = false;
//	temporary
//$tdataretos[".listAjax"] = false;

	$tdataretos[".audit"] = false;

	$tdataretos[".locking"] = false;


$pages = $tdataretos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataretos[".edit"] = true;
	$tdataretos[".afterEditAction"] = 0;
	$tdataretos[".closePopupAfterEdit"] = 1;
	$tdataretos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataretos[".add"] = true;
$tdataretos[".afterAddAction"] = 0;
$tdataretos[".closePopupAfterAdd"] = 1;
$tdataretos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataretos[".list"] = true;
}



$tdataretos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataretos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataretos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataretos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataretos[".printFriendly"] = true;
}



$tdataretos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataretos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataretos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataretos[".isUseAjaxSuggest"] = true;



			

$tdataretos[".ajaxCodeSnippetAdded"] = false;

$tdataretos[".buttonsAdded"] = false;

$tdataretos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretos[".isUseTimeForSearch"] = false;


$tdataretos[".badgeColor"] = "9ACD32";


$tdataretos[".allSearchFields"] = array();
$tdataretos[".filterFields"] = array();
$tdataretos[".requiredSearchFields"] = array();

$tdataretos[".googleLikeFields"] = array();
$tdataretos[".googleLikeFields"][] = "id";
$tdataretos[".googleLikeFields"][] = "reto";



$tdataretos[".tableType"] = "list";

$tdataretos[".printerPageOrientation"] = 0;
$tdataretos[".nPrinterPageScale"] = 100;

$tdataretos[".nPrinterSplitRecords"] = 40;

$tdataretos[".geocodingEnabled"] = false;










$tdataretos[".pageSize"] = 20;

$tdataretos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataretos[".strOrderBy"] = $tstrOrderBy;

$tdataretos[".orderindexes"] = array();


$tdataretos[".sqlHead"] = "SELECT id,  	reto";
$tdataretos[".sqlFrom"] = "FROM retos";
$tdataretos[".sqlWhereExpr"] = "";
$tdataretos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretos[".arrGroupsPerPage"] = $arrGPP;

$tdataretos[".highlightSearchResults"] = true;

$tableKeysretos = array();
$tableKeysretos[] = "id";
$tdataretos[".Keys"] = $tableKeysretos;


$tdataretos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "retos";
	$fdata["Label"] = GetFieldLabel("retos","id");
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


	$tdataretos["id"] = $fdata;
		$tdataretos[".searchableFields"][] = "id";
//	reto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reto";
	$fdata["GoodName"] = "reto";
	$fdata["ownerTable"] = "retos";
	$fdata["Label"] = GetFieldLabel("retos","reto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "reto";

		$fdata["sourceSingle"] = "reto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reto";

	
	
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


	$tdataretos["reto"] = $fdata;
		$tdataretos[".searchableFields"][] = "reto";


$tables_data["retos"]=&$tdataretos;
$field_labels["retos"] = &$fieldLabelsretos;
$fieldToolTips["retos"] = &$fieldToolTipsretos;
$placeHolders["retos"] = &$placeHoldersretos;
$page_titles["retos"] = &$pageTitlesretos;


changeTextControlsToDate( "retos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["retos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["retos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_retos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	reto";
$proto0["m_strFrom"] = "FROM retos";
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
	"m_strTable" => "retos",
	"m_srcTableName" => "retos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "retos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "retos",
	"m_srcTableName" => "retos"
));

$proto8["m_sql"] = "reto";
$proto8["m_srcTableName"] = "retos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "retos";
$proto11["m_srcTableName"] = "retos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "reto";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "retos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "retos";
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
$proto0["m_srcTableName"]="retos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retos = createSqlQuery_retos();


	
		;

		

$tdataretos[".sqlquery"] = $queryData_retos;



$tdataretos[".hasEvents"] = false;

?>