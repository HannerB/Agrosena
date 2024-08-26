<?php
$tdataresultado_chart = array();
$tdataresultado_chart[".searchableFields"] = array();
$tdataresultado_chart[".ShortName"] = "resultado_chart";
$tdataresultado_chart[".OwnerID"] = "";
$tdataresultado_chart[".OriginalTable"] = "resultado";


$tdataresultado_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataresultado_chart[".originalPagesByType"] = $tdataresultado_chart[".pagesByType"];
$tdataresultado_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataresultado_chart[".originalPages"] = $tdataresultado_chart[".pages"];
$tdataresultado_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataresultado_chart[".originalDefaultPages"] = $tdataresultado_chart[".defaultPages"];

//	field labels
$fieldLabelsresultado_chart = array();
$fieldToolTipsresultado_chart = array();
$pageTitlesresultado_chart = array();
$placeHoldersresultado_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresultado_chart["Spanish"] = array();
	$fieldToolTipsresultado_chart["Spanish"] = array();
	$placeHoldersresultado_chart["Spanish"] = array();
	$pageTitlesresultado_chart["Spanish"] = array();
	$fieldLabelsresultado_chart["Spanish"]["idevaluador"] = "Idevaluador";
	$fieldToolTipsresultado_chart["Spanish"]["idevaluador"] = "";
	$placeHoldersresultado_chart["Spanish"]["idevaluador"] = "";
	$fieldLabelsresultado_chart["Spanish"]["idequipo"] = "Idequipo";
	$fieldToolTipsresultado_chart["Spanish"]["idequipo"] = "";
	$placeHoldersresultado_chart["Spanish"]["idequipo"] = "";
	$fieldLabelsresultado_chart["Spanish"]["Puntaje_final"] = "Puntaje Final";
	$fieldToolTipsresultado_chart["Spanish"]["Puntaje_final"] = "";
	$placeHoldersresultado_chart["Spanish"]["Puntaje_final"] = "";
	$fieldLabelsresultado_chart["Spanish"]["reto"] = "Reto";
	$fieldToolTipsresultado_chart["Spanish"]["reto"] = "";
	$placeHoldersresultado_chart["Spanish"]["reto"] = "";
	$fieldLabelsresultado_chart["Spanish"]["equipo"] = "Equipo";
	$fieldToolTipsresultado_chart["Spanish"]["equipo"] = "";
	$placeHoldersresultado_chart["Spanish"]["equipo"] = "";
	if (count($fieldToolTipsresultado_chart["Spanish"]))
		$tdataresultado_chart[".isUseToolTips"] = true;
}


	$tdataresultado_chart[".NCSearch"] = true;

	$tdataresultado_chart[".ChartRefreshTime"] = 0;


$tdataresultado_chart[".shortTableName"] = "resultado_chart";
$tdataresultado_chart[".nSecOptions"] = 0;

$tdataresultado_chart[".mainTableOwnerID"] = "";
$tdataresultado_chart[".entityType"] = 3;
$tdataresultado_chart[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataresultado_chart[".strOriginalTableName"] = "resultado";

	



$tdataresultado_chart[".showAddInPopup"] = false;

$tdataresultado_chart[".showEditInPopup"] = false;

$tdataresultado_chart[".showViewInPopup"] = false;

$tdataresultado_chart[".listAjax"] = false;
//	temporary
//$tdataresultado_chart[".listAjax"] = false;

	$tdataresultado_chart[".audit"] = false;

	$tdataresultado_chart[".locking"] = false;


$pages = $tdataresultado_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresultado_chart[".edit"] = true;
	$tdataresultado_chart[".afterEditAction"] = 1;
	$tdataresultado_chart[".closePopupAfterEdit"] = 1;
	$tdataresultado_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresultado_chart[".add"] = true;
$tdataresultado_chart[".afterAddAction"] = 1;
$tdataresultado_chart[".closePopupAfterAdd"] = 1;
$tdataresultado_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresultado_chart[".list"] = true;
}



$tdataresultado_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresultado_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresultado_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresultado_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresultado_chart[".printFriendly"] = true;
}



$tdataresultado_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresultado_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresultado_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresultado_chart[".isUseAjaxSuggest"] = true;





$tdataresultado_chart[".ajaxCodeSnippetAdded"] = false;

$tdataresultado_chart[".buttonsAdded"] = false;

$tdataresultado_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresultado_chart[".isUseTimeForSearch"] = false;


$tdataresultado_chart[".badgeColor"] = "BC8F8F";


$tdataresultado_chart[".allSearchFields"] = array();
$tdataresultado_chart[".filterFields"] = array();
$tdataresultado_chart[".requiredSearchFields"] = array();

$tdataresultado_chart[".googleLikeFields"] = array();
$tdataresultado_chart[".googleLikeFields"][] = "idevaluador";
$tdataresultado_chart[".googleLikeFields"][] = "idequipo";
$tdataresultado_chart[".googleLikeFields"][] = "Puntaje final";
$tdataresultado_chart[".googleLikeFields"][] = "reto";
$tdataresultado_chart[".googleLikeFields"][] = "equipo";



$tdataresultado_chart[".tableType"] = "chart";

$tdataresultado_chart[".printerPageOrientation"] = 0;
$tdataresultado_chart[".nPrinterPageScale"] = 100;

$tdataresultado_chart[".nPrinterSplitRecords"] = 40;

$tdataresultado_chart[".geocodingEnabled"] = false;



// chart settings
$tdataresultado_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "ORDER BY reto, AVG(resultado.puntaje) DESC";
$tdataresultado_chart[".strOrderBy"] = $tstrOrderBy;

$tdataresultado_chart[".orderindexes"] = array();


$tdataresultado_chart[".sqlHead"] = "SELECT resultado.idevaluador,  resultado.idequipo,  AVG(resultado.puntaje) AS `Puntaje final`,  equipos.reto,  equipos.equipo";
$tdataresultado_chart[".sqlFrom"] = "FROM resultado  INNER JOIN equipos ON resultado.idequipo = equipos.id";
$tdataresultado_chart[".sqlWhereExpr"] = "(equipos.reto =1)";
$tdataresultado_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresultado_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresultado_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataresultado_chart[".highlightSearchResults"] = true;

$tableKeysresultado_chart = array();
$tdataresultado_chart[".Keys"] = $tableKeysresultado_chart;


$tdataresultado_chart[".hideMobileList"] = array();




//	idevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idevaluador";
	$fdata["GoodName"] = "idevaluador";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado_Chart","idevaluador");
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


	$tdataresultado_chart["idevaluador"] = $fdata;
		$tdataresultado_chart[".searchableFields"][] = "idevaluador";
//	idequipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idequipo";
	$fdata["GoodName"] = "idequipo";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado_Chart","idequipo");
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


	$tdataresultado_chart["idequipo"] = $fdata;
		$tdataresultado_chart[".searchableFields"][] = "idequipo";
//	Puntaje final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Puntaje final";
	$fdata["GoodName"] = "Puntaje_final";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("resultado_Chart","Puntaje_final");
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


	$tdataresultado_chart["Puntaje final"] = $fdata;
		$tdataresultado_chart[".searchableFields"][] = "Puntaje final";
//	reto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reto";
	$fdata["GoodName"] = "reto";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultado_Chart","reto");
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


	$tdataresultado_chart["reto"] = $fdata;
		$tdataresultado_chart[".searchableFields"][] = "reto";
//	equipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "equipo";
	$fdata["GoodName"] = "equipo";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultado_Chart","equipo");
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


	$tdataresultado_chart["equipo"] = $fdata;
		$tdataresultado_chart[".searchableFields"][] = "equipo";

$tdataresultado_chart[".chartLabelField"] = "equipo";
$tdataresultado_chart[".chartSeries"] = array();
$tdataresultado_chart[".chartSeries"][] = array(
	"field" => "Puntaje final",
	"total" => ""
);
	$tdataresultado_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">resultado Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataresultado_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Puntaje final</attr>';
	$tdataresultado_chart[".chartXml"] .= '</attr>';
	$tdataresultado_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">equipo</attr>
	</attr>';
	$tdataresultado_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataresultado_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Resultados").'</attr>
<attr value="foot">'.xmlencode("Puntaje").'</attr>
<attr value="y_axis_label">'.xmlencode("idevaluador").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
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
$tdataresultado_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataresultado_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">idevaluador</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_Chart","idevaluador")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">idequipo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_Chart","idequipo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Puntaje final</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_Chart","Puntaje_final")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">reto</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_Chart","reto")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">equipo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_Chart","equipo")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataresultado_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">resultado Chart</attr>
<attr value="short_table_name">resultado_chart</attr>
</attr>

</chart>';

$tables_data["resultado Chart"]=&$tdataresultado_chart;
$field_labels["resultado_Chart"] = &$fieldLabelsresultado_chart;
$fieldToolTips["resultado_Chart"] = &$fieldToolTipsresultado_chart;
$placeHolders["resultado_Chart"] = &$placeHoldersresultado_chart;
$page_titles["resultado_Chart"] = &$pageTitlesresultado_chart;


changeTextControlsToDate( "resultado Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["resultado Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["resultado Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_resultado_chart()
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
	"m_srcTableName" => "resultado Chart"
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
	"m_srcTableName" => "resultado Chart"
));

$proto6["m_sql"] = "resultado.idevaluador";
$proto6["m_srcTableName"] = "resultado Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idequipo",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultado Chart"
));

$proto8["m_sql"] = "resultado.idequipo";
$proto8["m_srcTableName"] = "resultado Chart";
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
	"m_srcTableName" => "resultado Chart"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "AVG(resultado.puntaje)";
$proto10["m_srcTableName"] = "resultado Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Puntaje final";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado Chart"
));

$proto13["m_sql"] = "equipos.reto";
$proto13["m_srcTableName"] = "resultado Chart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "equipo",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado Chart"
));

$proto15["m_sql"] = "equipos.equipo";
$proto15["m_srcTableName"] = "resultado Chart";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "resultado";
$proto18["m_srcTableName"] = "resultado Chart";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "idevaluador";
$proto18["m_columns"][] = "idequipo";
$proto18["m_columns"][] = "puntaje";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "resultado";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "resultado Chart";
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
$proto22["m_srcTableName"] = "resultado Chart";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "equipo";
$proto22["m_columns"][] = "reto";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "INNER JOIN equipos ON resultado.idequipo = equipos.id";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "resultado Chart";
$proto23=array();
$proto23["m_sql"] = "equipos.id = resultado.idequipo";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado Chart"
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
	"m_srcTableName" => "resultado Chart"
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
	"m_srcTableName" => "resultado Chart"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto30);

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="resultado Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_resultado_chart = createSqlQuery_resultado_chart();


	
		;

					

$tdataresultado_chart[".sqlquery"] = $queryData_resultado_chart;



include_once(getabspath("include/resultado_chart_events.php"));
$tdataresultado_chart[".hasEvents"] = true;

?>