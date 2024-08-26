<?php
$tdataresultado_2 = array();
$tdataresultado_2[".searchableFields"] = array();
$tdataresultado_2[".ShortName"] = "resultado_2";
$tdataresultado_2[".OwnerID"] = "";
$tdataresultado_2[".OriginalTable"] = "resultado";


$tdataresultado_2[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataresultado_2[".originalPagesByType"] = $tdataresultado_2[".pagesByType"];
$tdataresultado_2[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataresultado_2[".originalPages"] = $tdataresultado_2[".pages"];
$tdataresultado_2[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataresultado_2[".originalDefaultPages"] = $tdataresultado_2[".defaultPages"];

//	field labels
$fieldLabelsresultado_2 = array();
$fieldToolTipsresultado_2 = array();
$pageTitlesresultado_2 = array();
$placeHoldersresultado_2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresultado_2["Spanish"] = array();
	$fieldToolTipsresultado_2["Spanish"] = array();
	$placeHoldersresultado_2["Spanish"] = array();
	$pageTitlesresultado_2["Spanish"] = array();
	$fieldLabelsresultado_2["Spanish"]["idevaluador"] = "Idevaluador";
	$fieldToolTipsresultado_2["Spanish"]["idevaluador"] = "";
	$placeHoldersresultado_2["Spanish"]["idevaluador"] = "";
	$fieldLabelsresultado_2["Spanish"]["idequipo"] = "Idequipo";
	$fieldToolTipsresultado_2["Spanish"]["idequipo"] = "";
	$placeHoldersresultado_2["Spanish"]["idequipo"] = "";
	$fieldLabelsresultado_2["Spanish"]["Puntaje_final"] = "Puntaje Final";
	$fieldToolTipsresultado_2["Spanish"]["Puntaje_final"] = "";
	$placeHoldersresultado_2["Spanish"]["Puntaje_final"] = "";
	$fieldLabelsresultado_2["Spanish"]["reto"] = "Reto";
	$fieldToolTipsresultado_2["Spanish"]["reto"] = "";
	$placeHoldersresultado_2["Spanish"]["reto"] = "";
	$fieldLabelsresultado_2["Spanish"]["equipo"] = "Equipo";
	$fieldToolTipsresultado_2["Spanish"]["equipo"] = "";
	$placeHoldersresultado_2["Spanish"]["equipo"] = "";
	if (count($fieldToolTipsresultado_2["Spanish"]))
		$tdataresultado_2[".isUseToolTips"] = true;
}


	$tdataresultado_2[".NCSearch"] = true;

	$tdataresultado_2[".ChartRefreshTime"] = 0;


$tdataresultado_2[".shortTableName"] = "resultado_2";
$tdataresultado_2[".nSecOptions"] = 0;

$tdataresultado_2[".mainTableOwnerID"] = "";
$tdataresultado_2[".entityType"] = 3;
$tdataresultado_2[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataresultado_2[".strOriginalTableName"] = "resultado";

	



$tdataresultado_2[".showAddInPopup"] = false;

$tdataresultado_2[".showEditInPopup"] = false;

$tdataresultado_2[".showViewInPopup"] = false;

$tdataresultado_2[".listAjax"] = false;
//	temporary
//$tdataresultado_2[".listAjax"] = false;

	$tdataresultado_2[".audit"] = false;

	$tdataresultado_2[".locking"] = false;


$pages = $tdataresultado_2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresultado_2[".edit"] = true;
	$tdataresultado_2[".afterEditAction"] = 1;
	$tdataresultado_2[".closePopupAfterEdit"] = 1;
	$tdataresultado_2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresultado_2[".add"] = true;
$tdataresultado_2[".afterAddAction"] = 1;
$tdataresultado_2[".closePopupAfterAdd"] = 1;
$tdataresultado_2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresultado_2[".list"] = true;
}



$tdataresultado_2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresultado_2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresultado_2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresultado_2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresultado_2[".printFriendly"] = true;
}



$tdataresultado_2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresultado_2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresultado_2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresultado_2[".isUseAjaxSuggest"] = true;





$tdataresultado_2[".ajaxCodeSnippetAdded"] = false;

$tdataresultado_2[".buttonsAdded"] = false;

$tdataresultado_2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresultado_2[".isUseTimeForSearch"] = false;


$tdataresultado_2[".badgeColor"] = "7B68EE";


$tdataresultado_2[".allSearchFields"] = array();
$tdataresultado_2[".filterFields"] = array();
$tdataresultado_2[".requiredSearchFields"] = array();

$tdataresultado_2[".googleLikeFields"] = array();
$tdataresultado_2[".googleLikeFields"][] = "idevaluador";
$tdataresultado_2[".googleLikeFields"][] = "idequipo";
$tdataresultado_2[".googleLikeFields"][] = "Puntaje final";
$tdataresultado_2[".googleLikeFields"][] = "reto";
$tdataresultado_2[".googleLikeFields"][] = "equipo";



$tdataresultado_2[".tableType"] = "chart";

$tdataresultado_2[".printerPageOrientation"] = 0;
$tdataresultado_2[".nPrinterPageScale"] = 100;

$tdataresultado_2[".nPrinterSplitRecords"] = 40;

$tdataresultado_2[".geocodingEnabled"] = false;



// chart settings
$tdataresultado_2[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "ORDER BY reto, AVG(resultado.puntaje) DESC";
$tdataresultado_2[".strOrderBy"] = $tstrOrderBy;

$tdataresultado_2[".orderindexes"] = array();


$tdataresultado_2[".sqlHead"] = "SELECT resultado.idevaluador,  resultado.idequipo,  AVG(resultado.puntaje) AS `Puntaje final`,  equipos.reto,  equipos.equipo";
$tdataresultado_2[".sqlFrom"] = "FROM resultado  INNER JOIN equipos ON resultado.idequipo = equipos.id";
$tdataresultado_2[".sqlWhereExpr"] = "(equipos.reto =2)";
$tdataresultado_2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresultado_2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresultado_2[".arrGroupsPerPage"] = $arrGPP;

$tdataresultado_2[".highlightSearchResults"] = true;

$tableKeysresultado_2 = array();
$tdataresultado_2[".Keys"] = $tableKeysresultado_2;


$tdataresultado_2[".hideMobileList"] = array();




//	idevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idevaluador";
	$fdata["GoodName"] = "idevaluador";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado_2","idevaluador");
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


	$tdataresultado_2["idevaluador"] = $fdata;
		$tdataresultado_2[".searchableFields"][] = "idevaluador";
//	idequipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idequipo";
	$fdata["GoodName"] = "idequipo";
	$fdata["ownerTable"] = "resultado";
	$fdata["Label"] = GetFieldLabel("resultado_2","idequipo");
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


	$tdataresultado_2["idequipo"] = $fdata;
		$tdataresultado_2[".searchableFields"][] = "idequipo";
//	Puntaje final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Puntaje final";
	$fdata["GoodName"] = "Puntaje_final";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("resultado_2","Puntaje_final");
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


	$tdataresultado_2["Puntaje final"] = $fdata;
		$tdataresultado_2[".searchableFields"][] = "Puntaje final";
//	reto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reto";
	$fdata["GoodName"] = "reto";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultado_2","reto");
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


	$tdataresultado_2["reto"] = $fdata;
		$tdataresultado_2[".searchableFields"][] = "reto";
//	equipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "equipo";
	$fdata["GoodName"] = "equipo";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("resultado_2","equipo");
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


	$tdataresultado_2["equipo"] = $fdata;
		$tdataresultado_2[".searchableFields"][] = "equipo";

$tdataresultado_2[".chartLabelField"] = "equipo";
$tdataresultado_2[".chartSeries"] = array();
$tdataresultado_2[".chartSeries"][] = array(
	"field" => "Puntaje final",
	"total" => ""
);
	$tdataresultado_2[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">resultado 2</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataresultado_2[".chartXml"] .= '<attr value="0">
			<attr value="name">Puntaje final</attr>';
	$tdataresultado_2[".chartXml"] .= '</attr>';
	$tdataresultado_2[".chartXml"] .= '<attr value="1">
		<attr value="name">equipo</attr>
	</attr>';
	$tdataresultado_2[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataresultado_2[".chartXml"] .= '<attr value="head">'.xmlencode("Resultados").'</attr>
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
$tdataresultado_2[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataresultado_2[".chartXml"] .= '<attr value="0">
		<attr value="name">idevaluador</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_2","idevaluador")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_2[".chartXml"] .= '<attr value="1">
		<attr value="name">idequipo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_2","idequipo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_2[".chartXml"] .= '<attr value="2">
		<attr value="name">Puntaje final</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_2","Puntaje_final")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_2[".chartXml"] .= '<attr value="3">
		<attr value="name">reto</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_2","reto")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresultado_2[".chartXml"] .= '<attr value="4">
		<attr value="name">equipo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("resultado_2","equipo")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataresultado_2[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">resultado 2</attr>
<attr value="short_table_name">resultado_2</attr>
</attr>

</chart>';

$tables_data["resultado 2"]=&$tdataresultado_2;
$field_labels["resultado_2"] = &$fieldLabelsresultado_2;
$fieldToolTips["resultado_2"] = &$fieldToolTipsresultado_2;
$placeHolders["resultado_2"] = &$placeHoldersresultado_2;
$page_titles["resultado_2"] = &$pageTitlesresultado_2;


changeTextControlsToDate( "resultado 2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["resultado 2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["resultado 2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_resultado_2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "resultado.idevaluador,  resultado.idequipo,  AVG(resultado.puntaje) AS `Puntaje final`,  equipos.reto,  equipos.equipo";
$proto0["m_strFrom"] = "FROM resultado  INNER JOIN equipos ON resultado.idequipo = equipos.id";
$proto0["m_strWhere"] = "(equipos.reto =2)";
$proto0["m_strOrderBy"] = "ORDER BY reto, AVG(resultado.puntaje) DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "equipos.reto =2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado 2"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=2";
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
	"m_srcTableName" => "resultado 2"
));

$proto6["m_sql"] = "resultado.idevaluador";
$proto6["m_srcTableName"] = "resultado 2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idequipo",
	"m_strTable" => "resultado",
	"m_srcTableName" => "resultado 2"
));

$proto8["m_sql"] = "resultado.idequipo";
$proto8["m_srcTableName"] = "resultado 2";
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
	"m_srcTableName" => "resultado 2"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "AVG(resultado.puntaje)";
$proto10["m_srcTableName"] = "resultado 2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Puntaje final";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado 2"
));

$proto13["m_sql"] = "equipos.reto";
$proto13["m_srcTableName"] = "resultado 2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "equipo",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado 2"
));

$proto15["m_sql"] = "equipos.equipo";
$proto15["m_srcTableName"] = "resultado 2";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "resultado";
$proto18["m_srcTableName"] = "resultado 2";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "idevaluador";
$proto18["m_columns"][] = "idequipo";
$proto18["m_columns"][] = "puntaje";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "resultado";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "resultado 2";
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
$proto22["m_srcTableName"] = "resultado 2";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "equipo";
$proto22["m_columns"][] = "reto";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "INNER JOIN equipos ON resultado.idequipo = equipos.id";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "resultado 2";
$proto23=array();
$proto23["m_sql"] = "equipos.id = resultado.idequipo";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "equipos",
	"m_srcTableName" => "resultado 2"
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
	"m_srcTableName" => "resultado 2"
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
	"m_srcTableName" => "resultado 2"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto30);

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="resultado 2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_resultado_2 = createSqlQuery_resultado_2();


	
		;

					

$tdataresultado_2[".sqlquery"] = $queryData_resultado_2;



include_once(getabspath("include/resultado_2_events.php"));
$tdataresultado_2[".hasEvents"] = true;

?>