<?php
$tdataresultado = array();
$tdataresultado[".searchableFields"] = array();
$tdataresultado[".ShortName"] = "resultado";
$tdataresultado[".OwnerID"] = "";
$tdataresultado[".OriginalTable"] = "resultado";


$tdataresultado[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataresultado[".originalPagesByType"] = $tdataresultado[".pagesByType"];
$tdataresultado[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataresultado[".originalPages"] = $tdataresultado[".pages"];
$tdataresultado[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
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
	$fieldLabelsresultado["Spanish"]["idevaluador"] = "Evaluador";
	$fieldToolTipsresultado["Spanish"]["idevaluador"] = "";
	$placeHoldersresultado["Spanish"]["idevaluador"] = "";
	$fieldLabelsresultado["Spanish"]["idequipo"] = "Equipo";
	$fieldToolTipsresultado["Spanish"]["idequipo"] = "";
	$placeHoldersresultado["Spanish"]["idequipo"] = "";
	$fieldLabelsresultado["Spanish"]["puntaje"] = "Puntaje";
	$fieldToolTipsresultado["Spanish"]["puntaje"] = "";
	$placeHoldersresultado["Spanish"]["puntaje"] = "";
	$fieldLabelsresultado["Spanish"]["reto"] = "Reto";
	$fieldToolTipsresultado["Spanish"]["reto"] = "";
	$placeHoldersresultado["Spanish"]["reto"] = "";
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


$tdataresultado[".badgeColor"] = "6DA5C8";


$tdataresultado[".allSearchFields"] = array();
$tdataresultado[".filterFields"] = array();
$tdataresultado[".requiredSearchFields"] = array();

$tdataresultado[".googleLikeFields"] = array();
$tdataresultado[".googleLikeFields"][] = "idevaluador";
$tdataresultado[".googleLikeFields"][] = "idequipo";
$tdataresultado[".googleLikeFields"][] = "puntaje";
$tdataresultado[".googleLikeFields"][] = "reto";



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


$tdataresultado[".sqlHead"] = "SELECT resultado.idevaluador,  resultado.idequipo,  resultado.puntaje,  equipos.reto";
$tdataresultado[".sqlFrom"] = "FROM resultado  LEFT OUTER JOIN equipos ON resultado.idequipo = equipos.id";
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
$tableKeysresultado[] = "idevaluador";
$tableKeysresultado[] = "idequipo";
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
	$fdata["FullName"] = "resultado.idevaluador";

	
	
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
	$fdata["FullName"] = "resultado.idequipo";

	
	
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
	$fdata["FullName"] = "resultado.puntaje";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "idevaluador";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataresultado["puntaje"] = $fdata;
		$tdataresultado[".searchableFields"][] = "puntaje";
//	reto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reto";
	$fdata["GoodName"] = "reto";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultado","reto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "reto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "equipos.reto";

	
	
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


	$tdataresultado["reto"] = $fdata;
		$tdataresultado[".searchableFields"][] = "reto";


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
$proto0["m_strFieldList"] = "resultado.idevaluador,  resultado.idequipo,  resultado.puntaje,  equipos.reto";
$proto0["m_strFrom"] = "FROM resultado  LEFT OUTER JOIN equipos ON resultado.idequipo = equipos.id";
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

$proto6["m_sql"] = "resultado.idevaluador";
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

$proto8["m_sql"] = "resultado.idequipo";
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

$proto10["m_sql"] = "resultado.puntaje";
$proto10["m_srcTableName"] = "resultado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado"
));

$proto12["m_sql"] = "equipos.reto";
$proto12["m_srcTableName"] = "resultado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "resultado";
$proto15["m_srcTableName"] = "resultado";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idevaluador";
$proto15["m_columns"][] = "idequipo";
$proto15["m_columns"][] = "puntaje";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "resultado";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "resultado";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
												$proto18=array();
$proto18["m_link"] = "SQLL_LEFTJOIN";
			$proto19=array();
$proto19["m_strName"] = "equipos";
$proto19["m_srcTableName"] = "resultado";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "equipo";
$proto19["m_columns"][] = "reto";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "LEFT OUTER JOIN equipos ON resultado.idequipo = equipos.id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "resultado";
$proto20=array();
$proto20["m_sql"] = "equipos.id = resultado.idequipo";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= resultado.idequipo";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

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