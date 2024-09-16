<?php
$tdataresultado_reto1 = array();
$tdataresultado_reto1[".searchableFields"] = array();
$tdataresultado_reto1[".ShortName"] = "resultado_reto1";
$tdataresultado_reto1[".OwnerID"] = "";
$tdataresultado_reto1[".OriginalTable"] = "resultado";


$tdataresultado_reto1[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataresultado_reto1[".originalPagesByType"] = $tdataresultado_reto1[".pagesByType"];
$tdataresultado_reto1[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataresultado_reto1[".originalPages"] = $tdataresultado_reto1[".pages"];
$tdataresultado_reto1[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataresultado_reto1[".originalDefaultPages"] = $tdataresultado_reto1[".defaultPages"];

//	field labels
$fieldLabelsresultado_reto1 = array();
$fieldToolTipsresultado_reto1 = array();
$pageTitlesresultado_reto1 = array();
$placeHoldersresultado_reto1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresultado_reto1["Spanish"] = array();
	$fieldToolTipsresultado_reto1["Spanish"] = array();
	$placeHoldersresultado_reto1["Spanish"] = array();
	$pageTitlesresultado_reto1["Spanish"] = array();
	$fieldLabelsresultado_reto1["Spanish"]["idevaluador"] = "Idevaluador";
	$fieldToolTipsresultado_reto1["Spanish"]["idevaluador"] = "";
	$placeHoldersresultado_reto1["Spanish"]["idevaluador"] = "";
	$fieldLabelsresultado_reto1["Spanish"]["idequipo"] = "Idequipo";
	$fieldToolTipsresultado_reto1["Spanish"]["idequipo"] = "";
	$placeHoldersresultado_reto1["Spanish"]["idequipo"] = "";
	$fieldLabelsresultado_reto1["Spanish"]["Puntaje_final"] = "Puntaje Final";
	$fieldToolTipsresultado_reto1["Spanish"]["Puntaje_final"] = "";
	$placeHoldersresultado_reto1["Spanish"]["Puntaje_final"] = "";
	$fieldLabelsresultado_reto1["Spanish"]["reto"] = "Reto";
	$fieldToolTipsresultado_reto1["Spanish"]["reto"] = "";
	$placeHoldersresultado_reto1["Spanish"]["reto"] = "";
	$fieldLabelsresultado_reto1["Spanish"]["equipo"] = "Equipo";
	$fieldToolTipsresultado_reto1["Spanish"]["equipo"] = "";
	$placeHoldersresultado_reto1["Spanish"]["equipo"] = "";
	if (count($fieldToolTipsresultado_reto1["Spanish"]))
		$tdataresultado_reto1[".isUseToolTips"] = true;
}


	$tdataresultado_reto1[".NCSearch"] = true;

	$tdataresultado_reto1[".ChartRefreshTime"] = 0;


$tdataresultado_reto1[".shortTableName"] = "resultado_reto1";
$tdataresultado_reto1[".nSecOptions"] = 0;

$tdataresultado_reto1[".mainTableOwnerID"] = "";
$tdataresultado_reto1[".entityType"] = 3;
$tdataresultado_reto1[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataresultado_reto1[".strOriginalTableName"] = "resultado";

	



$tdataresultado_reto1[".showAddInPopup"] = false;

$tdataresultado_reto1[".showEditInPopup"] = false;

$tdataresultado_reto1[".showViewInPopup"] = false;

$tdataresultado_reto1[".listAjax"] = false;
//	temporary
//$tdataresultado_reto1[".listAjax"] = false;

	$tdataresultado_reto1[".audit"] = false;

	$tdataresultado_reto1[".locking"] = false;


$pages = $tdataresultado_reto1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresultado_reto1[".edit"] = true;
	$tdataresultado_reto1[".afterEditAction"] = 1;
	$tdataresultado_reto1[".closePopupAfterEdit"] = 1;
	$tdataresultado_reto1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresultado_reto1[".add"] = true;
$tdataresultado_reto1[".afterAddAction"] = 1;
$tdataresultado_reto1[".closePopupAfterAdd"] = 1;
$tdataresultado_reto1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresultado_reto1[".list"] = true;
}



$tdataresultado_reto1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresultado_reto1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresultado_reto1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresultado_reto1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresultado_reto1[".printFriendly"] = true;
}



$tdataresultado_reto1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresultado_reto1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresultado_reto1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresultado_reto1[".isUseAjaxSuggest"] = true;



			

$tdataresultado_reto1[".ajaxCodeSnippetAdded"] = false;

$tdataresultado_reto1[".buttonsAdded"] = false;

$tdataresultado_reto1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresultado_reto1[".isUseTimeForSearch"] = false;


$tdataresultado_reto1[".badgeColor"] = "DC143C";


$tdataresultado_reto1[".allSearchFields"] = array();
$tdataresultado_reto1[".filterFields"] = array();
$tdataresultado_reto1[".requiredSearchFields"] = array();

$tdataresultado_reto1[".googleLikeFields"] = array();
$tdataresultado_reto1[".googleLikeFields"][] = "idevaluador";
$tdataresultado_reto1[".googleLikeFields"][] = "idequipo";
$tdataresultado_reto1[".googleLikeFields"][] = "Puntaje final";
$tdataresultado_reto1[".googleLikeFields"][] = "reto";
$tdataresultado_reto1[".googleLikeFields"][] = "equipo";



$tdataresultado_reto1[".tableType"] = "chart";

$tdataresultado_reto1[".printerPageOrientation"] = 0;
$tdataresultado_reto1[".nPrinterPageScale"] = 100;

$tdataresultado_reto1[".nPrinterSplitRecords"] = 40;

$tdataresultado_reto1[".geocodingEnabled"] = false;



// chart settings
$tdataresultado_reto1[".chartType"] = "2DBar";
// end of chart settings








$tstrOrderBy = "ORDER BY reto, AVG(resultado.puntaje) DESC";
$tdataresultado_reto1[".strOrderBy"] = $tstrOrderBy;

$tdataresultado_reto1[".orderindexes"] = array();


$tdataresultado_reto1[".sqlHead"] = "SELECT resultado.idevaluador,  resultado.idequipo,  AVG(resultado.puntaje) AS `Puntaje final`,  equipos.reto,  equipos.equipo";
$tdataresultado_reto1[".sqlFrom"] = "FROM resultado  INNER JOIN equipos ON resultado.idequipo = equipos.id";
$tdataresultado_reto1[".sqlWhereExpr"] = "(equipos.reto =1)";
$tdataresultado_reto1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresultado_reto1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresultado_reto1[".arrGroupsPerPage"] = $arrGPP;

$tdataresultado_reto1[".highlightSearchResults"] = true;

$tableKeysresultado_reto1 = array();
$tdataresultado_reto1[".Keys"] = $tableKeysresultado_reto1;


$tdataresultado_reto1[".hideMobileList"] = array();




//	idevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idevaluador";
	$fdata["GoodName"] = "idevaluador";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado_reto1","idevaluador");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataresultado_reto1["idevaluador"] = $fdata;
		$tdataresultado_reto1[".searchableFields"][] = "idevaluador";
//	idequipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idequipo";
	$fdata["GoodName"] = "idequipo";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado_reto1","idequipo");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataresultado_reto1["idequipo"] = $fdata;
		$tdataresultado_reto1[".searchableFields"][] = "idequipo";
//	Puntaje final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Puntaje final";
	$fdata["GoodName"] = "Puntaje_final";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("resultado_reto1","Puntaje_final");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Puntaje final";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AVG(resultado.puntaje)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataresultado_reto1["Puntaje final"] = $fdata;
		$tdataresultado_reto1[".searchableFields"][] = "Puntaje final";
//	reto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reto";
	$fdata["GoodName"] = "reto";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultado_reto1","reto");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataresultado_reto1["reto"] = $fdata;
		$tdataresultado_reto1[".searchableFields"][] = "reto";
//	equipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "equipo";
	$fdata["GoodName"] = "equipo";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultado_reto1","equipo");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataresultado_reto1["equipo"] = $fdata;
		$tdataresultado_reto1[".searchableFields"][] = "equipo";

$tdataresultado_reto1[".chartLabelField"] = "equipo";
$tdataresultado_reto1[".chartSeries"] = array();
$tdataresultado_reto1[".chartSeries"][] = array(
	"field" => "Puntaje final",
	"total" => ""
);
	$tdataresultado_reto1[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">resultado reto1</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_bar</attr>
		</attr>

		<attr value="parameters">';
	$tdataresultado_reto1[".chartXml"] .= '<attr value="0">
			<attr value="name">Puntaje final</attr>';
	$tdataresultado_reto1[".chartXml"] .= '</attr>';
	$tdataresultado_reto1[".chartXml"] .= '<attr value="1">
		<attr value="name">equipo</attr>
	</attr>';
	$tdataresultado_reto1[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataresultado_reto1[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("idevaluador").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataresultado_reto1[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataresultado_reto1[".chartXml"] .= '<attr value="0">
		<attr value="name">idevaluador</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_reto1","idevaluador")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_reto1[".chartXml"] .= '<attr value="1">
		<attr value="name">idequipo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_reto1","idequipo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_reto1[".chartXml"] .= '<attr value="2">
		<attr value="name">Puntaje final</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_reto1","Puntaje_final")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_reto1[".chartXml"] .= '<attr value="3">
		<attr value="name">reto</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_reto1","reto")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_reto1[".chartXml"] .= '<attr value="4">
		<attr value="name">equipo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_reto1","equipo")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataresultado_reto1[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">resultado reto1</attr>
<attr value="short_table_name">resultado_reto1</attr>
</attr>

</chart>';

$tables_data["resultado reto1"]=&$tdataresultado_reto1;
$field_labels["resultado_reto1"] = &$fieldLabelsresultado_reto1;
$fieldToolTips["resultado_reto1"] = &$fieldToolTipsresultado_reto1;
$placeHolders["resultado_reto1"] = &$placeHoldersresultado_reto1;
$page_titles["resultado_reto1"] = &$pageTitlesresultado_reto1;


changeTextControlsToDate( "resultado reto1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["resultado reto1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["resultado reto1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_resultado_reto1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "resultado.idevaluador,  resultado.idequipo,  AVG(resultado.puntaje) AS `Puntaje final`,  equipos.reto,  equipos.equipo";
$proto0["m_strFrom"] = "FROM resultado  INNER JOIN equipos ON resultado.idequipo = equipos.id";
$proto0["m_strWhere"] = "(equipos.reto =1)";
$proto0["m_strOrderBy"] = "ORDER BY reto, AVG(resultado.puntaje) DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "equipos.reto =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado reto1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_srcTableName" => "resultado reto1"
));

$proto6["m_sql"] = "resultado.idevaluador";
$proto6["m_srcTableName"] = "resultado reto1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idequipo",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultado reto1"
));

$proto8["m_sql"] = "resultado.idequipo";
$proto8["m_srcTableName"] = "resultado reto1";
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
	"m_srcTableName" => "resultado reto1"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "AVG(resultado.puntaje)";
$proto10["m_srcTableName"] = "resultado reto1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Puntaje final";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado reto1"
));

$proto13["m_sql"] = "equipos.reto";
$proto13["m_srcTableName"] = "resultado reto1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "equipo",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado reto1"
));

$proto15["m_sql"] = "equipos.equipo";
$proto15["m_srcTableName"] = "resultado reto1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "resultado";
$proto18["m_srcTableName"] = "resultado reto1";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "idevaluador";
$proto18["m_columns"][] = "idequipo";
$proto18["m_columns"][] = "puntaje";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "resultado";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "resultado reto1";
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
$proto22["m_srcTableName"] = "resultado reto1";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "equipo";
$proto22["m_columns"][] = "reto";
$proto22["m_columns"][] = "id_registro";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "INNER JOIN equipos ON resultado.idequipo = equipos.id";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "resultado reto1";
$proto23=array();
$proto23["m_sql"] = "equipos.id = resultado.idequipo";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado reto1"
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
	"m_srcTableName" => "resultado reto1"
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
	"m_srcTableName" => "resultado reto1"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto30);

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="resultado reto1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_resultado_reto1 = createSqlQuery_resultado_reto1();


	
		;

					

$tdataresultado_reto1[".sqlquery"] = $queryData_resultado_reto1;



include_once(getabspath("include/resultado_reto1_events.php"));
$tdataresultado_reto1[".hasEvents"] = true;

?>