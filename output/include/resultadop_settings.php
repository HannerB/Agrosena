<?php
$tdataresultadop = array();
$tdataresultadop[".searchableFields"] = array();
$tdataresultadop[".ShortName"] = "resultadop";
$tdataresultadop[".OwnerID"] = "";
$tdataresultadop[".OriginalTable"] = "resultado";


$tdataresultadop[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataresultadop[".originalPagesByType"] = $tdataresultadop[".pagesByType"];
$tdataresultadop[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataresultadop[".originalPages"] = $tdataresultadop[".pages"];
$tdataresultadop[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataresultadop[".originalDefaultPages"] = $tdataresultadop[".defaultPages"];

//	field labels
$fieldLabelsresultadop = array();
$fieldToolTipsresultadop = array();
$pageTitlesresultadop = array();
$placeHoldersresultadop = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresultadop["Spanish"] = array();
	$fieldToolTipsresultadop["Spanish"] = array();
	$placeHoldersresultadop["Spanish"] = array();
	$pageTitlesresultadop["Spanish"] = array();
	$fieldLabelsresultadop["Spanish"]["idevaluador"] = "Evaluador";
	$fieldToolTipsresultadop["Spanish"]["idevaluador"] = "";
	$placeHoldersresultadop["Spanish"]["idevaluador"] = "";
	$fieldLabelsresultadop["Spanish"]["idequipo"] = "Equipo";
	$fieldToolTipsresultadop["Spanish"]["idequipo"] = "";
	$placeHoldersresultadop["Spanish"]["idequipo"] = "";
	$fieldLabelsresultadop["Spanish"]["Puntaje_final"] = "Puntaje Final";
	$fieldToolTipsresultadop["Spanish"]["Puntaje_final"] = "";
	$placeHoldersresultadop["Spanish"]["Puntaje_final"] = "";
	$fieldLabelsresultadop["Spanish"]["reto"] = "Reto";
	$fieldToolTipsresultadop["Spanish"]["reto"] = "";
	$placeHoldersresultadop["Spanish"]["reto"] = "";
	$fieldLabelsresultadop["Spanish"]["equipo"] = "Equipo";
	$fieldToolTipsresultadop["Spanish"]["equipo"] = "";
	$placeHoldersresultadop["Spanish"]["equipo"] = "";
	if (count($fieldToolTipsresultadop["Spanish"]))
		$tdataresultadop[".isUseToolTips"] = true;
}


	$tdataresultadop[".NCSearch"] = true;



$tdataresultadop[".shortTableName"] = "resultadop";
$tdataresultadop[".nSecOptions"] = 0;

$tdataresultadop[".mainTableOwnerID"] = "";
$tdataresultadop[".entityType"] = 1;
$tdataresultadop[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataresultadop[".strOriginalTableName"] = "resultado";

	



$tdataresultadop[".showAddInPopup"] = false;

$tdataresultadop[".showEditInPopup"] = false;

$tdataresultadop[".showViewInPopup"] = false;

$tdataresultadop[".listAjax"] = false;
//	temporary
//$tdataresultadop[".listAjax"] = false;

	$tdataresultadop[".audit"] = false;

	$tdataresultadop[".locking"] = false;


$pages = $tdataresultadop[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresultadop[".edit"] = true;
	$tdataresultadop[".afterEditAction"] = 1;
	$tdataresultadop[".closePopupAfterEdit"] = 1;
	$tdataresultadop[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresultadop[".add"] = true;
$tdataresultadop[".afterAddAction"] = 1;
$tdataresultadop[".closePopupAfterAdd"] = 1;
$tdataresultadop[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresultadop[".list"] = true;
}



$tdataresultadop[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresultadop[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresultadop[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresultadop[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresultadop[".printFriendly"] = true;
}



$tdataresultadop[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresultadop[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresultadop[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresultadop[".isUseAjaxSuggest"] = true;





$tdataresultadop[".ajaxCodeSnippetAdded"] = false;

$tdataresultadop[".buttonsAdded"] = false;

$tdataresultadop[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresultadop[".isUseTimeForSearch"] = false;


$tdataresultadop[".badgeColor"] = "CFAE83";


$tdataresultadop[".allSearchFields"] = array();
$tdataresultadop[".filterFields"] = array();
$tdataresultadop[".requiredSearchFields"] = array();

$tdataresultadop[".googleLikeFields"] = array();
$tdataresultadop[".googleLikeFields"][] = "idevaluador";
$tdataresultadop[".googleLikeFields"][] = "idequipo";
$tdataresultadop[".googleLikeFields"][] = "Puntaje final";
$tdataresultadop[".googleLikeFields"][] = "reto";
$tdataresultadop[".googleLikeFields"][] = "equipo";



$tdataresultadop[".tableType"] = "list";

$tdataresultadop[".printerPageOrientation"] = 0;
$tdataresultadop[".nPrinterPageScale"] = 100;

$tdataresultadop[".nPrinterSplitRecords"] = 40;

$tdataresultadop[".geocodingEnabled"] = false;










$tdataresultadop[".pageSize"] = 20;

$tdataresultadop[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY reto, AVG(resultado.puntaje) DESC";
$tdataresultadop[".strOrderBy"] = $tstrOrderBy;

$tdataresultadop[".orderindexes"] = array();


$tdataresultadop[".sqlHead"] = "SELECT resultado.idevaluador,  resultado.idequipo,  AVG(resultado.puntaje) AS `Puntaje final`,  equipos.reto,  equipos.equipo";
$tdataresultadop[".sqlFrom"] = "FROM resultado  INNER JOIN equipos ON resultado.idequipo = equipos.id";
$tdataresultadop[".sqlWhereExpr"] = "";
$tdataresultadop[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresultadop[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresultadop[".arrGroupsPerPage"] = $arrGPP;

$tdataresultadop[".highlightSearchResults"] = true;

$tableKeysresultadop = array();
$tableKeysresultadop[] = "idevaluador";
$tableKeysresultadop[] = "idequipo";
$tdataresultadop[".Keys"] = $tableKeysresultadop;


$tdataresultadop[".hideMobileList"] = array();




//	idevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idevaluador";
	$fdata["GoodName"] = "idevaluador";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultadop","idevaluador");
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


	$tdataresultadop["idevaluador"] = $fdata;
		$tdataresultadop[".searchableFields"][] = "idevaluador";
//	idequipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idequipo";
	$fdata["GoodName"] = "idequipo";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultadop","idequipo");
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


	$tdataresultadop["idequipo"] = $fdata;
		$tdataresultadop[".searchableFields"][] = "idequipo";
//	Puntaje final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Puntaje final";
	$fdata["GoodName"] = "Puntaje_final";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("resultadop","Puntaje_final");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Puntaje final";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AVG(resultado.puntaje)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
	
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


	$tdataresultadop["Puntaje final"] = $fdata;
		$tdataresultadop[".searchableFields"][] = "Puntaje final";
//	reto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reto";
	$fdata["GoodName"] = "reto";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultadop","reto");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "idevaluador";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataresultadop["reto"] = $fdata;
		$tdataresultadop[".searchableFields"][] = "reto";
//	equipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "equipo";
	$fdata["GoodName"] = "equipo";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultadop","equipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "equipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "equipos.equipo";

	
	
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


	$tdataresultadop["equipo"] = $fdata;
		$tdataresultadop[".searchableFields"][] = "equipo";


$tables_data["resultadop"]=&$tdataresultadop;
$field_labels["resultadop"] = &$fieldLabelsresultadop;
$fieldToolTips["resultadop"] = &$fieldToolTipsresultadop;
$placeHolders["resultadop"] = &$placeHoldersresultadop;
$page_titles["resultadop"] = &$pageTitlesresultadop;


changeTextControlsToDate( "resultadop" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["resultadop"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["resultadop"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_resultadop()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "resultado.idevaluador,  resultado.idequipo,  AVG(resultado.puntaje) AS `Puntaje final`,  equipos.reto,  equipos.equipo";
$proto0["m_strFrom"] = "FROM resultado  INNER JOIN equipos ON resultado.idequipo = equipos.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY reto, AVG(resultado.puntaje) DESC";
	
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
	"m_srcTableName" => "resultadop"
));

$proto6["m_sql"] = "resultado.idevaluador";
$proto6["m_srcTableName"] = "resultadop";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idequipo",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultadop"
));

$proto8["m_sql"] = "resultado.idequipo";
$proto8["m_srcTableName"] = "resultadop";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_AVG";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "puntaje",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultadop"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "AVG(resultado.puntaje)";
$proto10["m_srcTableName"] = "resultadop";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Puntaje final";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultadop"
));

$proto13["m_sql"] = "equipos.reto";
$proto13["m_srcTableName"] = "resultadop";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "equipo",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultadop"
));

$proto15["m_sql"] = "equipos.equipo";
$proto15["m_srcTableName"] = "resultadop";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "resultado";
$proto18["m_srcTableName"] = "resultadop";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "idevaluador";
$proto18["m_columns"][] = "idequipo";
$proto18["m_columns"][] = "puntaje";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "resultado";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "resultadop";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_INNERJOIN";
			$proto22=array();
$proto22["m_strName"] = "equipos";
$proto22["m_srcTableName"] = "resultadop";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "equipo";
$proto22["m_columns"][] = "reto";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "INNER JOIN equipos ON resultado.idequipo = equipos.id";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "resultadop";
$proto23=array();
$proto23["m_sql"] = "equipos.id = resultado.idequipo";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultadop"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= resultado.idequipo";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "idequipo",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultadop"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto27=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "reto"
));

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 1;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto0["m_orderby"][]=$obj;					
												$proto29=array();
						$proto30=array();
$proto30["m_functiontype"] = "SQLF_AVG";
$proto30["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "puntaje",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultadop"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto30);

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="resultadop";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_resultadop = createSqlQuery_resultadop();


	
		;

					

$tdataresultadop[".sqlquery"] = $queryData_resultadop;



$tdataresultadop[".hasEvents"] = false;

?>