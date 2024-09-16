<?php
$tdataresultado = array();
$tdataresultado[".searchableFields"] = array();
$tdataresultado[".ShortName"] = "resultado";
$tdataresultado[".OwnerID"] = "";
$tdataresultado[".OriginalTable"] = "resultado";


$tdataresultado[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresultado[".originalPagesByType"] = $tdataresultado[".pagesByType"];
$tdataresultado[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresultado[".originalPages"] = $tdataresultado[".pages"];
$tdataresultado[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresultado[".originalDefaultPages"] = $tdataresultado[".defaultPages"];

//	field labels
$fieldLabelsresultado = array();
$fieldToolTipsresultado = array();
$pageTitlesresultado = array();
$placeHoldersresultado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresultado["Spanish"] = array();
	$fieldToolTipsresultado["Spanish"] = array();
	$placeHoldersresultado["Spanish"] = array();
	$pageTitlesresultado["Spanish"] = array();
	$fieldLabelsresultado["Spanish"]["idevaluador"] = "Idevaluador";
	$fieldToolTipsresultado["Spanish"]["idevaluador"] = "";
	$placeHoldersresultado["Spanish"]["idevaluador"] = "";
	$fieldLabelsresultado["Spanish"]["idequipo"] = "Idequipo";
	$fieldToolTipsresultado["Spanish"]["idequipo"] = "";
	$placeHoldersresultado["Spanish"]["idequipo"] = "";
	$fieldLabelsresultado["Spanish"]["puntaje"] = "Puntaje";
	$fieldToolTipsresultado["Spanish"]["puntaje"] = "";
	$placeHoldersresultado["Spanish"]["puntaje"] = "";
	if (count($fieldToolTipsresultado["Spanish"]))
		$tdataresultado[".isUseToolTips"] = true;
}


	$tdataresultado[".NCSearch"] = true;



$tdataresultado[".shortTableName"] = "resultado";
$tdataresultado[".nSecOptions"] = 0;

$tdataresultado[".mainTableOwnerID"] = "";
$tdataresultado[".entityType"] = 0;
$tdataresultado[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataresultado[".strOriginalTableName"] = "resultado";

	



$tdataresultado[".showAddInPopup"] = false;

$tdataresultado[".showEditInPopup"] = false;

$tdataresultado[".showViewInPopup"] = false;

$tdataresultado[".listAjax"] = false;
//	temporary
//$tdataresultado[".listAjax"] = false;

	$tdataresultado[".audit"] = false;

	$tdataresultado[".locking"] = false;


$pages = $tdataresultado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresultado[".edit"] = true;
	$tdataresultado[".afterEditAction"] = 1;
	$tdataresultado[".closePopupAfterEdit"] = 1;
	$tdataresultado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresultado[".add"] = true;
$tdataresultado[".afterAddAction"] = 1;
$tdataresultado[".closePopupAfterAdd"] = 1;
$tdataresultado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresultado[".list"] = true;
}



$tdataresultado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresultado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresultado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresultado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresultado[".printFriendly"] = true;
}



$tdataresultado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresultado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresultado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresultado[".isUseAjaxSuggest"] = true;



			

$tdataresultado[".ajaxCodeSnippetAdded"] = false;

$tdataresultado[".buttonsAdded"] = false;

$tdataresultado[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresultado[".isUseTimeForSearch"] = false;


$tdataresultado[".badgeColor"] = "00C2C5";


$tdataresultado[".allSearchFields"] = array();
$tdataresultado[".filterFields"] = array();
$tdataresultado[".requiredSearchFields"] = array();

$tdataresultado[".googleLikeFields"] = array();
$tdataresultado[".googleLikeFields"][] = "idevaluador";
$tdataresultado[".googleLikeFields"][] = "idequipo";
$tdataresultado[".googleLikeFields"][] = "puntaje";



$tdataresultado[".tableType"] = "list";

$tdataresultado[".printerPageOrientation"] = 0;
$tdataresultado[".nPrinterPageScale"] = 100;

$tdataresultado[".nPrinterSplitRecords"] = 40;

$tdataresultado[".geocodingEnabled"] = false;










$tdataresultado[".pageSize"] = 20;

$tdataresultado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresultado[".strOrderBy"] = $tstrOrderBy;

$tdataresultado[".orderindexes"] = array();


$tdataresultado[".sqlHead"] = "SELECT idevaluador,  	idequipo,  	puntaje";
$tdataresultado[".sqlFrom"] = "FROM resultado";
$tdataresultado[".sqlWhereExpr"] = "";
$tdataresultado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresultado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresultado[".arrGroupsPerPage"] = $arrGPP;

$tdataresultado[".highlightSearchResults"] = true;

$tableKeysresultado = array();
$tdataresultado[".Keys"] = $tableKeysresultado;


$tdataresultado[".hideMobileList"] = array();




//	idevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idevaluador";
	$fdata["GoodName"] = "idevaluador";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado","idevaluador");
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


	$tdataresultado["idevaluador"] = $fdata;
		$tdataresultado[".searchableFields"][] = "idevaluador";
//	idequipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idequipo";
	$fdata["GoodName"] = "idequipo";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado","idequipo");
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


	$tdataresultado["idequipo"] = $fdata;
		$tdataresultado[".searchableFields"][] = "idequipo";
//	puntaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "puntaje";
	$fdata["GoodName"] = "puntaje";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado","puntaje");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "puntaje";

		$fdata["sourceSingle"] = "puntaje";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "puntaje";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 100;

	
	
	
	
	
	
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


	$tdataresultado["puntaje"] = $fdata;
		$tdataresultado[".searchableFields"][] = "puntaje";


$tables_data["resultado"]=&$tdataresultado;
$field_labels["resultado"] = &$fieldLabelsresultado;
$fieldToolTips["resultado"] = &$fieldToolTipsresultado;
$placeHolders["resultado"] = &$placeHoldersresultado;
$page_titles["resultado"] = &$pageTitlesresultado;


changeTextControlsToDate( "resultado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["resultado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["resultado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_resultado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idevaluador,  	idequipo,  	puntaje";
$proto0["m_strFrom"] = "FROM resultado";
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
	"m_strName" => "idevaluador",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultado"
));

$proto6["m_sql"] = "idevaluador";
$proto6["m_srcTableName"] = "resultado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idequipo",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultado"
));

$proto8["m_sql"] = "idequipo";
$proto8["m_srcTableName"] = "resultado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "puntaje",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultado"
));

$proto10["m_sql"] = "puntaje";
$proto10["m_srcTableName"] = "resultado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "resultado";
$proto13["m_srcTableName"] = "resultado";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "idevaluador";
$proto13["m_columns"][] = "idequipo";
$proto13["m_columns"][] = "puntaje";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "resultado";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "resultado";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="resultado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_resultado = createSqlQuery_resultado();


	
		;

			

$tdataresultado[".sqlquery"] = $queryData_resultado;



$tdataresultado[".hasEvents"] = false;

?>