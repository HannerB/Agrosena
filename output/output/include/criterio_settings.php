<?php
$tdatacriterio = array();
$tdatacriterio[".searchableFields"] = array();
$tdatacriterio[".ShortName"] = "criterio";
$tdatacriterio[".OwnerID"] = "";
$tdatacriterio[".OriginalTable"] = "criterio";


$tdatacriterio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacriterio[".originalPagesByType"] = $tdatacriterio[".pagesByType"];
$tdatacriterio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacriterio[".originalPages"] = $tdatacriterio[".pages"];
$tdatacriterio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacriterio[".originalDefaultPages"] = $tdatacriterio[".defaultPages"];

//	field labels
$fieldLabelscriterio = array();
$fieldToolTipscriterio = array();
$pageTitlescriterio = array();
$placeHolderscriterio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscriterio["Spanish"] = array();
	$fieldToolTipscriterio["Spanish"] = array();
	$placeHolderscriterio["Spanish"] = array();
	$pageTitlescriterio["Spanish"] = array();
	$fieldLabelscriterio["Spanish"]["id"] = "Id";
	$fieldToolTipscriterio["Spanish"]["id"] = "";
	$placeHolderscriterio["Spanish"]["id"] = "";
	$fieldLabelscriterio["Spanish"]["idequipo"] = "Idequipo";
	$fieldToolTipscriterio["Spanish"]["idequipo"] = "";
	$placeHolderscriterio["Spanish"]["idequipo"] = "";
	$fieldLabelscriterio["Spanish"]["criterio1"] = "Criterio1";
	$fieldToolTipscriterio["Spanish"]["criterio1"] = "";
	$placeHolderscriterio["Spanish"]["criterio1"] = "";
	$fieldLabelscriterio["Spanish"]["criterio2"] = "Criterio2";
	$fieldToolTipscriterio["Spanish"]["criterio2"] = "";
	$placeHolderscriterio["Spanish"]["criterio2"] = "";
	$fieldLabelscriterio["Spanish"]["criterio3"] = "Criterio3";
	$fieldToolTipscriterio["Spanish"]["criterio3"] = "";
	$placeHolderscriterio["Spanish"]["criterio3"] = "";
	$fieldLabelscriterio["Spanish"]["criterio4"] = "Criterio4";
	$fieldToolTipscriterio["Spanish"]["criterio4"] = "";
	$placeHolderscriterio["Spanish"]["criterio4"] = "";
	$fieldLabelscriterio["Spanish"]["criterio5"] = "Criterio5";
	$fieldToolTipscriterio["Spanish"]["criterio5"] = "";
	$placeHolderscriterio["Spanish"]["criterio5"] = "";
	$fieldLabelscriterio["Spanish"]["criterio6"] = "Criterio6";
	$fieldToolTipscriterio["Spanish"]["criterio6"] = "";
	$placeHolderscriterio["Spanish"]["criterio6"] = "";
	$fieldLabelscriterio["Spanish"]["criterio7"] = "Criterio7";
	$fieldToolTipscriterio["Spanish"]["criterio7"] = "";
	$placeHolderscriterio["Spanish"]["criterio7"] = "";
	$fieldLabelscriterio["Spanish"]["criterio8"] = "Criterio8";
	$fieldToolTipscriterio["Spanish"]["criterio8"] = "";
	$placeHolderscriterio["Spanish"]["criterio8"] = "";
	$fieldLabelscriterio["Spanish"]["criterio9"] = "Criterio9";
	$fieldToolTipscriterio["Spanish"]["criterio9"] = "";
	$placeHolderscriterio["Spanish"]["criterio9"] = "";
	$fieldLabelscriterio["Spanish"]["criterio10"] = "Criterio10";
	$fieldToolTipscriterio["Spanish"]["criterio10"] = "";
	$placeHolderscriterio["Spanish"]["criterio10"] = "";
	$fieldLabelscriterio["Spanish"]["idevaluador"] = "Idevaluador";
	$fieldToolTipscriterio["Spanish"]["idevaluador"] = "";
	$placeHolderscriterio["Spanish"]["idevaluador"] = "";
	$fieldLabelscriterio["Spanish"]["id_preguntas"] = "Id Preguntas";
	$fieldToolTipscriterio["Spanish"]["id_preguntas"] = "";
	$placeHolderscriterio["Spanish"]["id_preguntas"] = "";
	$fieldLabelscriterio["Spanish"]["preguntas_id"] = "Preguntas Id";
	$fieldToolTipscriterio["Spanish"]["preguntas_id"] = "";
	$placeHolderscriterio["Spanish"]["preguntas_id"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta1"] = "Pregunta1";
	$fieldToolTipscriterio["Spanish"]["pregunta1"] = "";
	$placeHolderscriterio["Spanish"]["pregunta1"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta2"] = "Pregunta2";
	$fieldToolTipscriterio["Spanish"]["pregunta2"] = "";
	$placeHolderscriterio["Spanish"]["pregunta2"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta3"] = "Pregunta3";
	$fieldToolTipscriterio["Spanish"]["pregunta3"] = "";
	$placeHolderscriterio["Spanish"]["pregunta3"] = "";
	$fieldLabelscriterio["Spanish"]["equipo"] = "Equipo";
	$fieldToolTipscriterio["Spanish"]["equipo"] = "";
	$placeHolderscriterio["Spanish"]["equipo"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta4"] = "Pregunta4";
	$fieldToolTipscriterio["Spanish"]["pregunta4"] = "";
	$placeHolderscriterio["Spanish"]["pregunta4"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta5"] = "Pregunta5";
	$fieldToolTipscriterio["Spanish"]["pregunta5"] = "";
	$placeHolderscriterio["Spanish"]["pregunta5"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta6"] = "Pregunta6";
	$fieldToolTipscriterio["Spanish"]["pregunta6"] = "";
	$placeHolderscriterio["Spanish"]["pregunta6"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta7"] = "Pregunta7";
	$fieldToolTipscriterio["Spanish"]["pregunta7"] = "";
	$placeHolderscriterio["Spanish"]["pregunta7"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta8"] = "Pregunta8";
	$fieldToolTipscriterio["Spanish"]["pregunta8"] = "";
	$placeHolderscriterio["Spanish"]["pregunta8"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta9"] = "Pregunta9";
	$fieldToolTipscriterio["Spanish"]["pregunta9"] = "";
	$placeHolderscriterio["Spanish"]["pregunta9"] = "";
	$fieldLabelscriterio["Spanish"]["pregunta10"] = "Pregunta10";
	$fieldToolTipscriterio["Spanish"]["pregunta10"] = "";
	$placeHolderscriterio["Spanish"]["pregunta10"] = "";
	if (count($fieldToolTipscriterio["Spanish"]))
		$tdatacriterio[".isUseToolTips"] = true;
}


	$tdatacriterio[".NCSearch"] = true;



$tdatacriterio[".shortTableName"] = "criterio";
$tdatacriterio[".nSecOptions"] = 0;

$tdatacriterio[".mainTableOwnerID"] = "";
$tdatacriterio[".entityType"] = 0;
$tdatacriterio[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdatacriterio[".strOriginalTableName"] = "criterio";

	



$tdatacriterio[".showAddInPopup"] = false;

$tdatacriterio[".showEditInPopup"] = false;

$tdatacriterio[".showViewInPopup"] = false;

$tdatacriterio[".listAjax"] = false;
//	temporary
//$tdatacriterio[".listAjax"] = false;

	$tdatacriterio[".audit"] = false;

	$tdatacriterio[".locking"] = false;


$pages = $tdatacriterio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacriterio[".edit"] = true;
	$tdatacriterio[".afterEditAction"] = 0;
	$tdatacriterio[".closePopupAfterEdit"] = 1;
	$tdatacriterio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacriterio[".add"] = true;
$tdatacriterio[".afterAddAction"] = 0;
$tdatacriterio[".closePopupAfterAdd"] = 1;
$tdatacriterio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacriterio[".list"] = true;
}



$tdatacriterio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacriterio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacriterio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacriterio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacriterio[".printFriendly"] = true;
}



$tdatacriterio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacriterio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacriterio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacriterio[".isUseAjaxSuggest"] = true;



									

$tdatacriterio[".ajaxCodeSnippetAdded"] = false;

$tdatacriterio[".buttonsAdded"] = false;

$tdatacriterio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacriterio[".isUseTimeForSearch"] = false;


$tdatacriterio[".badgeColor"] = "d2af80";


$tdatacriterio[".allSearchFields"] = array();
$tdatacriterio[".filterFields"] = array();
$tdatacriterio[".requiredSearchFields"] = array();

$tdatacriterio[".googleLikeFields"] = array();
$tdatacriterio[".googleLikeFields"][] = "id";
$tdatacriterio[".googleLikeFields"][] = "idevaluador";
$tdatacriterio[".googleLikeFields"][] = "idequipo";
$tdatacriterio[".googleLikeFields"][] = "criterio1";
$tdatacriterio[".googleLikeFields"][] = "criterio2";
$tdatacriterio[".googleLikeFields"][] = "criterio3";
$tdatacriterio[".googleLikeFields"][] = "criterio4";
$tdatacriterio[".googleLikeFields"][] = "criterio5";
$tdatacriterio[".googleLikeFields"][] = "criterio6";
$tdatacriterio[".googleLikeFields"][] = "criterio7";
$tdatacriterio[".googleLikeFields"][] = "criterio8";
$tdatacriterio[".googleLikeFields"][] = "criterio9";
$tdatacriterio[".googleLikeFields"][] = "criterio10";
$tdatacriterio[".googleLikeFields"][] = "id_preguntas";
$tdatacriterio[".googleLikeFields"][] = "preguntas_id";
$tdatacriterio[".googleLikeFields"][] = "pregunta1";
$tdatacriterio[".googleLikeFields"][] = "pregunta2";
$tdatacriterio[".googleLikeFields"][] = "pregunta3";
$tdatacriterio[".googleLikeFields"][] = "pregunta4";
$tdatacriterio[".googleLikeFields"][] = "pregunta5";
$tdatacriterio[".googleLikeFields"][] = "pregunta6";
$tdatacriterio[".googleLikeFields"][] = "pregunta7";
$tdatacriterio[".googleLikeFields"][] = "pregunta8";
$tdatacriterio[".googleLikeFields"][] = "pregunta9";
$tdatacriterio[".googleLikeFields"][] = "pregunta10";
$tdatacriterio[".googleLikeFields"][] = "equipo";



$tdatacriterio[".tableType"] = "list";

$tdatacriterio[".printerPageOrientation"] = 0;
$tdatacriterio[".nPrinterPageScale"] = 100;

$tdatacriterio[".nPrinterSplitRecords"] = 40;

$tdatacriterio[".geocodingEnabled"] = false;










$tdatacriterio[".pageSize"] = 20;

$tdatacriterio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacriterio[".strOrderBy"] = $tstrOrderBy;

$tdatacriterio[".orderindexes"] = array();


$tdatacriterio[".sqlHead"] = "SELECT criterio.id,  criterio.idevaluador,  criterio.idequipo,  criterio.criterio1,  criterio.criterio2,  criterio.criterio3,  criterio.criterio4,  criterio.criterio5,  criterio.criterio6,  criterio.criterio7,  criterio.criterio8,  criterio.criterio9,  criterio.criterio10,  criterio.id_preguntas,  preguntas.id AS preguntas_id,  preguntas.pregunta1,  preguntas.pregunta2,  preguntas.pregunta3,  preguntas.pregunta4,  preguntas.pregunta5,  preguntas.pregunta6,  preguntas.pregunta7,  preguntas.pregunta8,  preguntas.pregunta9,  preguntas.pregunta10,  equipos.equipo";
$tdatacriterio[".sqlFrom"] = "FROM criterio  INNER JOIN preguntas ON criterio.id_preguntas = preguntas.id  LEFT OUTER JOIN equipos ON criterio.idequipo = equipos.id";
$tdatacriterio[".sqlWhereExpr"] = "";
$tdatacriterio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacriterio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacriterio[".arrGroupsPerPage"] = $arrGPP;

$tdatacriterio[".highlightSearchResults"] = true;

$tableKeyscriterio = array();
$tableKeyscriterio[] = "id";
$tdatacriterio[".Keys"] = $tableKeyscriterio;


$tdatacriterio[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.id";

	
	
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


	$tdatacriterio["id"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "id";
//	idevaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idevaluador";
	$fdata["GoodName"] = "idevaluador";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","idevaluador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idevaluador";

		$fdata["sourceSingle"] = "idevaluador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.idevaluador";

	
	
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


	$tdatacriterio["idevaluador"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "idevaluador";
//	idequipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idequipo";
	$fdata["GoodName"] = "idequipo";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","idequipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idequipo";

		$fdata["sourceSingle"] = "idequipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.idequipo";

	
	
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


	$tdatacriterio["idequipo"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "idequipo";
//	criterio1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "criterio1";
	$fdata["GoodName"] = "criterio1";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio1";

		$fdata["sourceSingle"] = "criterio1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio1";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio1"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio1";
//	criterio2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "criterio2";
	$fdata["GoodName"] = "criterio2";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio2");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio2";

		$fdata["sourceSingle"] = "criterio2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio2";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio2"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio2";
//	criterio3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "criterio3";
	$fdata["GoodName"] = "criterio3";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio3");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio3";

		$fdata["sourceSingle"] = "criterio3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio3";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio3"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio3";
//	criterio4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "criterio4";
	$fdata["GoodName"] = "criterio4";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio4");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio4";

		$fdata["sourceSingle"] = "criterio4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio4";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio4"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio4";
//	criterio5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "criterio5";
	$fdata["GoodName"] = "criterio5";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio5");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio5";

		$fdata["sourceSingle"] = "criterio5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio5";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio5"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio5";
//	criterio6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "criterio6";
	$fdata["GoodName"] = "criterio6";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio6");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio6";

		$fdata["sourceSingle"] = "criterio6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio6";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio6"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio6";
//	criterio7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "criterio7";
	$fdata["GoodName"] = "criterio7";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio7");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio7";

		$fdata["sourceSingle"] = "criterio7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio7";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio7"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio7";
//	criterio8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "criterio8";
	$fdata["GoodName"] = "criterio8";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio8");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio8";

		$fdata["sourceSingle"] = "criterio8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio8";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio8"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio8";
//	criterio9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "criterio9";
	$fdata["GoodName"] = "criterio9";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio9");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio9";

		$fdata["sourceSingle"] = "criterio9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio9";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio9"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio9";
//	criterio10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "criterio10";
	$fdata["GoodName"] = "criterio10";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","criterio10");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "criterio10";

		$fdata["sourceSingle"] = "criterio10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.criterio10";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calificacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nota";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nota";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacriterio["criterio10"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio10";
//	id_preguntas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "id_preguntas";
	$fdata["GoodName"] = "id_preguntas";
	$fdata["ownerTable"] = "criterio";
	$fdata["Label"] = GetFieldLabel("criterio","id_preguntas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_preguntas";

		$fdata["sourceSingle"] = "id_preguntas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criterio.id_preguntas";

	
	
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


	$tdatacriterio["id_preguntas"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "id_preguntas";
//	preguntas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "preguntas_id";
	$fdata["GoodName"] = "preguntas_id";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","preguntas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.id";

	
	
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


	$tdatacriterio["preguntas_id"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "preguntas_id";
//	pregunta1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "pregunta1";
	$fdata["GoodName"] = "pregunta1";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta1"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta1";
//	pregunta2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "pregunta2";
	$fdata["GoodName"] = "pregunta2";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta2";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta2"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta2";
//	pregunta3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pregunta3";
	$fdata["GoodName"] = "pregunta3";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta3"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta3";
//	pregunta4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "pregunta4";
	$fdata["GoodName"] = "pregunta4";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta4");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta4";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta4"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta4";
//	pregunta5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "pregunta5";
	$fdata["GoodName"] = "pregunta5";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta5");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta5";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta5"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta5";
//	pregunta6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "pregunta6";
	$fdata["GoodName"] = "pregunta6";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta6");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta6";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta6"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta6";
//	pregunta7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "pregunta7";
	$fdata["GoodName"] = "pregunta7";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta7");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta7";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta7";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta7"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta7";
//	pregunta8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "pregunta8";
	$fdata["GoodName"] = "pregunta8";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta8");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta8";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta8";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta8"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta8";
//	pregunta9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "pregunta9";
	$fdata["GoodName"] = "pregunta9";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta9");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pregunta9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta9";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta9"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta9";
//	pregunta10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "pregunta10";
	$fdata["GoodName"] = "pregunta10";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("criterio","pregunta10");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pregunta10";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.pregunta10";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 150;

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


	$tdatacriterio["pregunta10"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "pregunta10";
//	equipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "equipo";
	$fdata["GoodName"] = "equipo";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("criterio","equipo");
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


	$tdatacriterio["equipo"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "equipo";


$tables_data["criterio"]=&$tdatacriterio;
$field_labels["criterio"] = &$fieldLabelscriterio;
$fieldToolTips["criterio"] = &$fieldToolTipscriterio;
$placeHolders["criterio"] = &$placeHolderscriterio;
$page_titles["criterio"] = &$pageTitlescriterio;


changeTextControlsToDate( "criterio" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["criterio"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["criterio"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="evaluador";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="evaluador";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "evaluador";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["criterio"][0] = $masterParams;
				$masterTablesData["criterio"][0]["masterKeys"] = array();
	$masterTablesData["criterio"][0]["masterKeys"][]="idevaluador";
				$masterTablesData["criterio"][0]["detailKeys"] = array();
	$masterTablesData["criterio"][0]["detailKeys"][]="idevaluador";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="preguntas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="preguntas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "preguntas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["criterio"][1] = $masterParams;
				$masterTablesData["criterio"][1]["masterKeys"] = array();
	$masterTablesData["criterio"][1]["masterKeys"][]="id";
				$masterTablesData["criterio"][1]["detailKeys"] = array();
	$masterTablesData["criterio"][1]["detailKeys"][]="id_preguntas";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_criterio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "criterio.id,  criterio.idevaluador,  criterio.idequipo,  criterio.criterio1,  criterio.criterio2,  criterio.criterio3,  criterio.criterio4,  criterio.criterio5,  criterio.criterio6,  criterio.criterio7,  criterio.criterio8,  criterio.criterio9,  criterio.criterio10,  criterio.id_preguntas,  preguntas.id AS preguntas_id,  preguntas.pregunta1,  preguntas.pregunta2,  preguntas.pregunta3,  preguntas.pregunta4,  preguntas.pregunta5,  preguntas.pregunta6,  preguntas.pregunta7,  preguntas.pregunta8,  preguntas.pregunta9,  preguntas.pregunta10,  equipos.equipo";
$proto0["m_strFrom"] = "FROM criterio  INNER JOIN preguntas ON criterio.id_preguntas = preguntas.id  LEFT OUTER JOIN equipos ON criterio.idequipo = equipos.id";
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
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto6["m_sql"] = "criterio.id";
$proto6["m_srcTableName"] = "criterio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idevaluador",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto8["m_sql"] = "criterio.idevaluador";
$proto8["m_srcTableName"] = "criterio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idequipo",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto10["m_sql"] = "criterio.idequipo";
$proto10["m_srcTableName"] = "criterio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio1",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto12["m_sql"] = "criterio.criterio1";
$proto12["m_srcTableName"] = "criterio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio2",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto14["m_sql"] = "criterio.criterio2";
$proto14["m_srcTableName"] = "criterio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio3",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto16["m_sql"] = "criterio.criterio3";
$proto16["m_srcTableName"] = "criterio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio4",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto18["m_sql"] = "criterio.criterio4";
$proto18["m_srcTableName"] = "criterio";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio5",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto20["m_sql"] = "criterio.criterio5";
$proto20["m_srcTableName"] = "criterio";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio6",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto22["m_sql"] = "criterio.criterio6";
$proto22["m_srcTableName"] = "criterio";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio7",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto24["m_sql"] = "criterio.criterio7";
$proto24["m_srcTableName"] = "criterio";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio8",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto26["m_sql"] = "criterio.criterio8";
$proto26["m_srcTableName"] = "criterio";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio9",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto28["m_sql"] = "criterio.criterio9";
$proto28["m_srcTableName"] = "criterio";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "criterio10",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto30["m_sql"] = "criterio.criterio10";
$proto30["m_srcTableName"] = "criterio";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "id_preguntas",
	"m_strTable" => "criterio",
	"m_srcTableName" => "criterio"
));

$proto32["m_sql"] = "criterio.id_preguntas";
$proto32["m_srcTableName"] = "criterio";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto34["m_sql"] = "preguntas.id";
$proto34["m_srcTableName"] = "criterio";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "preguntas_id";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta1",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto36["m_sql"] = "preguntas.pregunta1";
$proto36["m_srcTableName"] = "criterio";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta2",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto38["m_sql"] = "preguntas.pregunta2";
$proto38["m_srcTableName"] = "criterio";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta3",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto40["m_sql"] = "preguntas.pregunta3";
$proto40["m_srcTableName"] = "criterio";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta4",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto42["m_sql"] = "preguntas.pregunta4";
$proto42["m_srcTableName"] = "criterio";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta5",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto44["m_sql"] = "preguntas.pregunta5";
$proto44["m_srcTableName"] = "criterio";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta6",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto46["m_sql"] = "preguntas.pregunta6";
$proto46["m_srcTableName"] = "criterio";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta7",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto48["m_sql"] = "preguntas.pregunta7";
$proto48["m_srcTableName"] = "criterio";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta8",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto50["m_sql"] = "preguntas.pregunta8";
$proto50["m_srcTableName"] = "criterio";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Pregunta9",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto52["m_sql"] = "preguntas.pregunta9";
$proto52["m_srcTableName"] = "criterio";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Pregunta10",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto54["m_sql"] = "preguntas.pregunta10";
$proto54["m_srcTableName"] = "criterio";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "equipo",
	"m_strTable" => "equipos",
	"m_srcTableName" => "criterio"
));

$proto56["m_sql"] = "equipos.equipo";
$proto56["m_srcTableName"] = "criterio";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "criterio";
$proto59["m_srcTableName"] = "criterio";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id";
$proto59["m_columns"][] = "idevaluador";
$proto59["m_columns"][] = "idequipo";
$proto59["m_columns"][] = "criterio1";
$proto59["m_columns"][] = "criterio2";
$proto59["m_columns"][] = "criterio3";
$proto59["m_columns"][] = "criterio4";
$proto59["m_columns"][] = "criterio5";
$proto59["m_columns"][] = "criterio6";
$proto59["m_columns"][] = "criterio7";
$proto59["m_columns"][] = "criterio8";
$proto59["m_columns"][] = "criterio9";
$proto59["m_columns"][] = "criterio10";
$proto59["m_columns"][] = "id_preguntas";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "criterio";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "criterio";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_INNERJOIN";
			$proto63=array();
$proto63["m_strName"] = "preguntas";
$proto63["m_srcTableName"] = "criterio";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "id";
$proto63["m_columns"][] = "pregunta1";
$proto63["m_columns"][] = "pregunta2";
$proto63["m_columns"][] = "pregunta3";
$proto63["m_columns"][] = "pregunta4";
$proto63["m_columns"][] = "pregunta5";
$proto63["m_columns"][] = "pregunta6";
$proto63["m_columns"][] = "pregunta7";
$proto63["m_columns"][] = "pregunta8";
$proto63["m_columns"][] = "Pregunta9";
$proto63["m_columns"][] = "Pregunta10";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "INNER JOIN preguntas ON criterio.id_preguntas = preguntas.id";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "criterio";
$proto64=array();
$proto64["m_sql"] = "preguntas.id = criterio.id_preguntas";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "criterio"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= criterio.id_preguntas";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_LEFTJOIN";
			$proto67=array();
$proto67["m_strName"] = "equipos";
$proto67["m_srcTableName"] = "criterio";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "id";
$proto67["m_columns"][] = "equipo";
$proto67["m_columns"][] = "reto";
$proto67["m_columns"][] = "id_registro";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "LEFT OUTER JOIN equipos ON criterio.idequipo = equipos.id";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "criterio";
$proto68=array();
$proto68["m_sql"] = "equipos.id = criterio.idequipo";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "equipos",
	"m_srcTableName" => "criterio"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= criterio.idequipo";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="criterio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_criterio = createSqlQuery_criterio();


	
		;

																										

$tdatacriterio[".sqlquery"] = $queryData_criterio;



$tdatacriterio[".hasEvents"] = false;

?>