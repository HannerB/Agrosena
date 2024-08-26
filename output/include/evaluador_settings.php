<?php
$tdataevaluador = array();
$tdataevaluador[".searchableFields"] = array();
$tdataevaluador[".ShortName"] = "evaluador";
$tdataevaluador[".OwnerID"] = "";
$tdataevaluador[".OriginalTable"] = "evaluador";


$tdataevaluador[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevaluador[".originalPagesByType"] = $tdataevaluador[".pagesByType"];
$tdataevaluador[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevaluador[".originalPages"] = $tdataevaluador[".pages"];
$tdataevaluador[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevaluador[".originalDefaultPages"] = $tdataevaluador[".defaultPages"];

//	field labels
$fieldLabelsevaluador = array();
$fieldToolTipsevaluador = array();
$pageTitlesevaluador = array();
$placeHoldersevaluador = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevaluador["Spanish"] = array();
	$fieldToolTipsevaluador["Spanish"] = array();
	$placeHoldersevaluador["Spanish"] = array();
	$pageTitlesevaluador["Spanish"] = array();
	$fieldLabelsevaluador["Spanish"]["idevaluador"] = "Idevaluador";
	$fieldToolTipsevaluador["Spanish"]["idevaluador"] = "";
	$placeHoldersevaluador["Spanish"]["idevaluador"] = "";
	$fieldLabelsevaluador["Spanish"]["nombreevaluador"] = "Nombre evaluador";
	$fieldToolTipsevaluador["Spanish"]["nombreevaluador"] = "";
	$placeHoldersevaluador["Spanish"]["nombreevaluador"] = "";
	$fieldLabelsevaluador["Spanish"]["idusuario"] = "Idusuario";
	$fieldToolTipsevaluador["Spanish"]["idusuario"] = "";
	$placeHoldersevaluador["Spanish"]["idusuario"] = "";
	$fieldLabelsevaluador["Spanish"]["idevaluador1"] = "Idevaluador1";
	$fieldToolTipsevaluador["Spanish"]["idevaluador1"] = "";
	$placeHoldersevaluador["Spanish"]["idevaluador1"] = "";
	$fieldLabelsevaluador["Spanish"]["nomusuario"] = "Nomusuario";
	$fieldToolTipsevaluador["Spanish"]["nomusuario"] = "";
	$placeHoldersevaluador["Spanish"]["nomusuario"] = "";
	if (count($fieldToolTipsevaluador["Spanish"]))
		$tdataevaluador[".isUseToolTips"] = true;
}


	$tdataevaluador[".NCSearch"] = true;



$tdataevaluador[".shortTableName"] = "evaluador";
$tdataevaluador[".nSecOptions"] = 0;

$tdataevaluador[".mainTableOwnerID"] = "";
$tdataevaluador[".entityType"] = 0;
$tdataevaluador[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataevaluador[".strOriginalTableName"] = "evaluador";

	



$tdataevaluador[".showAddInPopup"] = false;

$tdataevaluador[".showEditInPopup"] = false;

$tdataevaluador[".showViewInPopup"] = false;

$tdataevaluador[".listAjax"] = false;
//	temporary
//$tdataevaluador[".listAjax"] = false;

	$tdataevaluador[".audit"] = false;

	$tdataevaluador[".locking"] = false;


$pages = $tdataevaluador[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevaluador[".edit"] = true;
	$tdataevaluador[".afterEditAction"] = 1;
	$tdataevaluador[".closePopupAfterEdit"] = 1;
	$tdataevaluador[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevaluador[".add"] = true;
$tdataevaluador[".afterAddAction"] = 1;
$tdataevaluador[".closePopupAfterAdd"] = 1;
$tdataevaluador[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevaluador[".list"] = true;
}



$tdataevaluador[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevaluador[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevaluador[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevaluador[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevaluador[".printFriendly"] = true;
}



$tdataevaluador[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevaluador[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevaluador[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevaluador[".isUseAjaxSuggest"] = true;





$tdataevaluador[".ajaxCodeSnippetAdded"] = false;

$tdataevaluador[".buttonsAdded"] = false;

$tdataevaluador[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevaluador[".isUseTimeForSearch"] = false;


$tdataevaluador[".badgeColor"] = "4169E1";


$tdataevaluador[".allSearchFields"] = array();
$tdataevaluador[".filterFields"] = array();
$tdataevaluador[".requiredSearchFields"] = array();

$tdataevaluador[".googleLikeFields"] = array();
$tdataevaluador[".googleLikeFields"][] = "idevaluador";
$tdataevaluador[".googleLikeFields"][] = "nombreevaluador";
$tdataevaluador[".googleLikeFields"][] = "idusuario";
$tdataevaluador[".googleLikeFields"][] = "idevaluador1";
$tdataevaluador[".googleLikeFields"][] = "nomusuario";



$tdataevaluador[".tableType"] = "list";

$tdataevaluador[".printerPageOrientation"] = 0;
$tdataevaluador[".nPrinterPageScale"] = 100;

$tdataevaluador[".nPrinterSplitRecords"] = 40;

$tdataevaluador[".geocodingEnabled"] = false;










$tdataevaluador[".pageSize"] = 20;

$tdataevaluador[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevaluador[".strOrderBy"] = $tstrOrderBy;

$tdataevaluador[".orderindexes"] = array();


$tdataevaluador[".sqlHead"] = "SELECT evaluador.idevaluador,  evaluador.nombreevaluador,  evaluador.idusuario,  usuario.idevaluador AS idevaluador1,  usuario.nomusuario";
$tdataevaluador[".sqlFrom"] = "FROM evaluador  INNER JOIN usuario ON evaluador.idusuario = usuario.id_usuario";
$tdataevaluador[".sqlWhereExpr"] = "";
$tdataevaluador[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevaluador[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevaluador[".arrGroupsPerPage"] = $arrGPP;

$tdataevaluador[".highlightSearchResults"] = true;

$tableKeysevaluador = array();
$tableKeysevaluador[] = "idevaluador";
$tdataevaluador[".Keys"] = $tableKeysevaluador;


$tdataevaluador[".hideMobileList"] = array();




//	idevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idevaluador";
	$fdata["GoodName"] = "idevaluador";
	$fdata["ownerTable"] = "evaluador";
	$fdata["Label"] = GetFieldLabel("evaluador","idevaluador");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idevaluador";

		$fdata["sourceSingle"] = "idevaluador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador.idevaluador";

	
	
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


	$tdataevaluador["idevaluador"] = $fdata;
		$tdataevaluador[".searchableFields"][] = "idevaluador";
//	nombreevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombreevaluador";
	$fdata["GoodName"] = "nombreevaluador";
	$fdata["ownerTable"] = "evaluador";
	$fdata["Label"] = GetFieldLabel("evaluador","nombreevaluador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombreevaluador";

		$fdata["sourceSingle"] = "nombreevaluador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador.nombreevaluador";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataevaluador["nombreevaluador"] = $fdata;
		$tdataevaluador[".searchableFields"][] = "nombreevaluador";
//	idusuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idusuario";
	$fdata["GoodName"] = "idusuario";
	$fdata["ownerTable"] = "evaluador";
	$fdata["Label"] = GetFieldLabel("evaluador","idusuario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idusuario";

		$fdata["sourceSingle"] = "idusuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evaluador.idusuario";

	
	
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


	$tdataevaluador["idusuario"] = $fdata;
		$tdataevaluador[".searchableFields"][] = "idusuario";
//	idevaluador1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idevaluador1";
	$fdata["GoodName"] = "idevaluador1";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("evaluador","idevaluador1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idevaluador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario.idevaluador";

	
	
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


	$tdataevaluador["idevaluador1"] = $fdata;
		$tdataevaluador[".searchableFields"][] = "idevaluador1";
//	nomusuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nomusuario";
	$fdata["GoodName"] = "nomusuario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("evaluador","nomusuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomusuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario.nomusuario";

	
	
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


	$tdataevaluador["nomusuario"] = $fdata;
		$tdataevaluador[".searchableFields"][] = "nomusuario";


$tables_data["evaluador"]=&$tdataevaluador;
$field_labels["evaluador"] = &$fieldLabelsevaluador;
$fieldToolTips["evaluador"] = &$fieldToolTipsevaluador;
$placeHolders["evaluador"] = &$placeHoldersevaluador;
$page_titles["evaluador"] = &$pageTitlesevaluador;


changeTextControlsToDate( "evaluador" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["evaluador"] = array();
//	criterio
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="criterio";
		$detailsParam["dOriginalTable"] = "criterio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "criterio";
	$detailsParam["dCaptionTable"] = GetTableCaption("criterio");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["evaluador"][$dIndex] = $detailsParam;

	
		$detailsTablesData["evaluador"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["evaluador"][$dIndex]["masterKeys"][]="idevaluador";

				$detailsTablesData["evaluador"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["evaluador"][$dIndex]["detailKeys"][]="idevaluador";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["evaluador"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_evaluador()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "evaluador.idevaluador,  evaluador.nombreevaluador,  evaluador.idusuario,  usuario.idevaluador AS idevaluador1,  usuario.nomusuario";
$proto0["m_strFrom"] = "FROM evaluador  INNER JOIN usuario ON evaluador.idusuario = usuario.id_usuario";
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
	"m_strTable" => "evaluador",
	"m_srcTableName" => "evaluador"
));

$proto6["m_sql"] = "evaluador.idevaluador";
$proto6["m_srcTableName"] = "evaluador";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombreevaluador",
	"m_strTable" => "evaluador",
	"m_srcTableName" => "evaluador"
));

$proto8["m_sql"] = "evaluador.nombreevaluador";
$proto8["m_srcTableName"] = "evaluador";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idusuario",
	"m_strTable" => "evaluador",
	"m_srcTableName" => "evaluador"
));

$proto10["m_sql"] = "evaluador.idusuario";
$proto10["m_srcTableName"] = "evaluador";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idevaluador",
	"m_strTable" => "usuario",
	"m_srcTableName" => "evaluador"
));

$proto12["m_sql"] = "usuario.idevaluador";
$proto12["m_srcTableName"] = "evaluador";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "idevaluador1";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nomusuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "evaluador"
));

$proto14["m_sql"] = "usuario.nomusuario";
$proto14["m_srcTableName"] = "evaluador";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "evaluador";
$proto17["m_srcTableName"] = "evaluador";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idevaluador";
$proto17["m_columns"][] = "nombreevaluador";
$proto17["m_columns"][] = "idusuario";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "evaluador";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "evaluador";
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
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "usuario";
$proto21["m_srcTableName"] = "evaluador";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_usuario";
$proto21["m_columns"][] = "rol";
$proto21["m_columns"][] = "contraseña";
$proto21["m_columns"][] = "idevaluador";
$proto21["m_columns"][] = "nomusuario";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN usuario ON evaluador.idusuario = usuario.id_usuario";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "evaluador";
$proto22=array();
$proto22["m_sql"] = "usuario.id_usuario = evaluador.idusuario";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_usuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "evaluador"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= evaluador.idusuario";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evaluador";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evaluador = createSqlQuery_evaluador();


	
		;

					

$tdataevaluador[".sqlquery"] = $queryData_evaluador;



include_once(getabspath("include/evaluador_events.php"));
$tdataevaluador[".hasEvents"] = true;

$query = &$queryData_evaluador;
$table = "evaluador";
// here goes EVENT_INIT_TABLE event
$usuariox=$_SESSION["UserID"];
$permisox = Security::getUserGroup();

if($permisox == "evaluador" ){ //here you need an AND not OR	
$query->addWhere("usuario.nomusuario='".$_SESSION["UserID"]."'");

}

;
unset($query);
?>