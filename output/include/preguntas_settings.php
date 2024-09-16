<?php
$tdatapreguntas = array();
$tdatapreguntas[".searchableFields"] = array();
$tdatapreguntas[".ShortName"] = "preguntas";
$tdatapreguntas[".OwnerID"] = "";
$tdatapreguntas[".OriginalTable"] = "preguntas";


$tdatapreguntas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapreguntas[".originalPagesByType"] = $tdatapreguntas[".pagesByType"];
$tdatapreguntas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapreguntas[".originalPages"] = $tdatapreguntas[".pages"];
$tdatapreguntas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapreguntas[".originalDefaultPages"] = $tdatapreguntas[".defaultPages"];

//	field labels
$fieldLabelspreguntas = array();
$fieldToolTipspreguntas = array();
$pageTitlespreguntas = array();
$placeHolderspreguntas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspreguntas["Spanish"] = array();
	$fieldToolTipspreguntas["Spanish"] = array();
	$placeHolderspreguntas["Spanish"] = array();
	$pageTitlespreguntas["Spanish"] = array();
	$fieldLabelspreguntas["Spanish"]["id"] = "Id";
	$fieldToolTipspreguntas["Spanish"]["id"] = "";
	$placeHolderspreguntas["Spanish"]["id"] = "";
	$fieldLabelspreguntas["Spanish"]["pregunta1"] = "Pregunta1";
	$fieldToolTipspreguntas["Spanish"]["pregunta1"] = "";
	$placeHolderspreguntas["Spanish"]["pregunta1"] = "";
	$fieldLabelspreguntas["Spanish"]["pregunta2"] = "Pregunta2";
	$fieldToolTipspreguntas["Spanish"]["pregunta2"] = "";
	$placeHolderspreguntas["Spanish"]["pregunta2"] = "";
	$fieldLabelspreguntas["Spanish"]["pregunta3"] = "Pregunta3";
	$fieldToolTipspreguntas["Spanish"]["pregunta3"] = "";
	$placeHolderspreguntas["Spanish"]["pregunta3"] = "";
	$fieldLabelspreguntas["Spanish"]["pregunta4"] = "Pregunta4";
	$fieldToolTipspreguntas["Spanish"]["pregunta4"] = "";
	$placeHolderspreguntas["Spanish"]["pregunta4"] = "";
	$fieldLabelspreguntas["Spanish"]["pregunta5"] = "Pregunta5";
	$fieldToolTipspreguntas["Spanish"]["pregunta5"] = "";
	$placeHolderspreguntas["Spanish"]["pregunta5"] = "";
	$fieldLabelspreguntas["Spanish"]["pregunta6"] = "Pregunta6";
	$fieldToolTipspreguntas["Spanish"]["pregunta6"] = "";
	$placeHolderspreguntas["Spanish"]["pregunta6"] = "";
	$fieldLabelspreguntas["Spanish"]["pregunta7"] = "Pregunta7";
	$fieldToolTipspreguntas["Spanish"]["pregunta7"] = "";
	$placeHolderspreguntas["Spanish"]["pregunta7"] = "";
	$fieldLabelspreguntas["Spanish"]["pregunta8"] = "Pregunta8";
	$fieldToolTipspreguntas["Spanish"]["pregunta8"] = "";
	$placeHolderspreguntas["Spanish"]["pregunta8"] = "";
	$fieldLabelspreguntas["Spanish"]["Pregunta9"] = "Pregunta9";
	$fieldToolTipspreguntas["Spanish"]["Pregunta9"] = "";
	$placeHolderspreguntas["Spanish"]["Pregunta9"] = "";
	$fieldLabelspreguntas["Spanish"]["Pregunta10"] = "Pregunta10";
	$fieldToolTipspreguntas["Spanish"]["Pregunta10"] = "";
	$placeHolderspreguntas["Spanish"]["Pregunta10"] = "";
	if (count($fieldToolTipspreguntas["Spanish"]))
		$tdatapreguntas[".isUseToolTips"] = true;
}


	$tdatapreguntas[".NCSearch"] = true;



$tdatapreguntas[".shortTableName"] = "preguntas";
$tdatapreguntas[".nSecOptions"] = 0;

$tdatapreguntas[".mainTableOwnerID"] = "";
$tdatapreguntas[".entityType"] = 0;
$tdatapreguntas[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdatapreguntas[".strOriginalTableName"] = "preguntas";

	



$tdatapreguntas[".showAddInPopup"] = false;

$tdatapreguntas[".showEditInPopup"] = false;

$tdatapreguntas[".showViewInPopup"] = false;

$tdatapreguntas[".listAjax"] = false;
//	temporary
//$tdatapreguntas[".listAjax"] = false;

	$tdatapreguntas[".audit"] = false;

	$tdatapreguntas[".locking"] = false;


$pages = $tdatapreguntas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapreguntas[".edit"] = true;
	$tdatapreguntas[".afterEditAction"] = 1;
	$tdatapreguntas[".closePopupAfterEdit"] = 1;
	$tdatapreguntas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapreguntas[".add"] = true;
$tdatapreguntas[".afterAddAction"] = 1;
$tdatapreguntas[".closePopupAfterAdd"] = 1;
$tdatapreguntas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapreguntas[".list"] = true;
}



$tdatapreguntas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapreguntas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapreguntas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapreguntas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapreguntas[".printFriendly"] = true;
}



$tdatapreguntas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapreguntas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapreguntas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapreguntas[".isUseAjaxSuggest"] = true;



			

$tdatapreguntas[".ajaxCodeSnippetAdded"] = false;

$tdatapreguntas[".buttonsAdded"] = false;

$tdatapreguntas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapreguntas[".isUseTimeForSearch"] = false;


$tdatapreguntas[".badgeColor"] = "3CB371";


$tdatapreguntas[".allSearchFields"] = array();
$tdatapreguntas[".filterFields"] = array();
$tdatapreguntas[".requiredSearchFields"] = array();

$tdatapreguntas[".googleLikeFields"] = array();
$tdatapreguntas[".googleLikeFields"][] = "id";
$tdatapreguntas[".googleLikeFields"][] = "pregunta1";
$tdatapreguntas[".googleLikeFields"][] = "pregunta2";
$tdatapreguntas[".googleLikeFields"][] = "pregunta3";
$tdatapreguntas[".googleLikeFields"][] = "pregunta4";
$tdatapreguntas[".googleLikeFields"][] = "pregunta5";
$tdatapreguntas[".googleLikeFields"][] = "pregunta6";
$tdatapreguntas[".googleLikeFields"][] = "pregunta7";
$tdatapreguntas[".googleLikeFields"][] = "pregunta8";
$tdatapreguntas[".googleLikeFields"][] = "Pregunta9";
$tdatapreguntas[".googleLikeFields"][] = "Pregunta10";



$tdatapreguntas[".tableType"] = "list";

$tdatapreguntas[".printerPageOrientation"] = 0;
$tdatapreguntas[".nPrinterPageScale"] = 100;

$tdatapreguntas[".nPrinterSplitRecords"] = 40;

$tdatapreguntas[".geocodingEnabled"] = false;










$tdatapreguntas[".pageSize"] = 20;

$tdatapreguntas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapreguntas[".strOrderBy"] = $tstrOrderBy;

$tdatapreguntas[".orderindexes"] = array();


$tdatapreguntas[".sqlHead"] = "SELECT id,  	pregunta1,  	pregunta2,  	pregunta3,  	pregunta4,  	pregunta5,  	pregunta6,  	pregunta7,  	pregunta8,  	Pregunta9,  	Pregunta10";
$tdatapreguntas[".sqlFrom"] = "FROM preguntas";
$tdatapreguntas[".sqlWhereExpr"] = "";
$tdatapreguntas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapreguntas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapreguntas[".arrGroupsPerPage"] = $arrGPP;

$tdatapreguntas[".highlightSearchResults"] = true;

$tableKeyspreguntas = array();
$tableKeyspreguntas[] = "id";
$tdatapreguntas[".Keys"] = $tableKeyspreguntas;


$tdatapreguntas[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","id");
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


	$tdatapreguntas["id"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "id";
//	pregunta1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pregunta1";
	$fdata["GoodName"] = "pregunta1";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","pregunta1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta1";

		$fdata["sourceSingle"] = "pregunta1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pregunta1";

	
	
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


	$tdatapreguntas["pregunta1"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "pregunta1";
//	pregunta2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pregunta2";
	$fdata["GoodName"] = "pregunta2";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","pregunta2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta2";

		$fdata["sourceSingle"] = "pregunta2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pregunta2";

	
	
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


	$tdatapreguntas["pregunta2"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "pregunta2";
//	pregunta3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pregunta3";
	$fdata["GoodName"] = "pregunta3";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","pregunta3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta3";

		$fdata["sourceSingle"] = "pregunta3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pregunta3";

	
	
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


	$tdatapreguntas["pregunta3"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "pregunta3";
//	pregunta4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pregunta4";
	$fdata["GoodName"] = "pregunta4";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","pregunta4");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta4";

		$fdata["sourceSingle"] = "pregunta4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pregunta4";

	
	
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


	$tdatapreguntas["pregunta4"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "pregunta4";
//	pregunta5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pregunta5";
	$fdata["GoodName"] = "pregunta5";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","pregunta5");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta5";

		$fdata["sourceSingle"] = "pregunta5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pregunta5";

	
	
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


	$tdatapreguntas["pregunta5"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "pregunta5";
//	pregunta6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pregunta6";
	$fdata["GoodName"] = "pregunta6";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","pregunta6");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta6";

		$fdata["sourceSingle"] = "pregunta6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pregunta6";

	
	
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


	$tdatapreguntas["pregunta6"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "pregunta6";
//	pregunta7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pregunta7";
	$fdata["GoodName"] = "pregunta7";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","pregunta7");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta7";

		$fdata["sourceSingle"] = "pregunta7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pregunta7";

	
	
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


	$tdatapreguntas["pregunta7"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "pregunta7";
//	pregunta8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pregunta8";
	$fdata["GoodName"] = "pregunta8";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","pregunta8");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pregunta8";

		$fdata["sourceSingle"] = "pregunta8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pregunta8";

	
	
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


	$tdatapreguntas["pregunta8"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "pregunta8";
//	Pregunta9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Pregunta9";
	$fdata["GoodName"] = "Pregunta9";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","Pregunta9");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pregunta9";

		$fdata["sourceSingle"] = "Pregunta9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pregunta9";

	
	
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


	$tdatapreguntas["Pregunta9"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "Pregunta9";
//	Pregunta10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Pregunta10";
	$fdata["GoodName"] = "Pregunta10";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","Pregunta10");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pregunta10";

		$fdata["sourceSingle"] = "Pregunta10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pregunta10";

	
	
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


	$tdatapreguntas["Pregunta10"] = $fdata;
		$tdatapreguntas[".searchableFields"][] = "Pregunta10";


$tables_data["preguntas"]=&$tdatapreguntas;
$field_labels["preguntas"] = &$fieldLabelspreguntas;
$fieldToolTips["preguntas"] = &$fieldToolTipspreguntas;
$placeHolders["preguntas"] = &$placeHolderspreguntas;
$page_titles["preguntas"] = &$pageTitlespreguntas;


changeTextControlsToDate( "preguntas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["preguntas"] = array();
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


		
	$detailsTablesData["preguntas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["preguntas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["preguntas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["preguntas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["preguntas"][$dIndex]["detailKeys"][]="id_preguntas";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["preguntas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_preguntas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	pregunta1,  	pregunta2,  	pregunta3,  	pregunta4,  	pregunta5,  	pregunta6,  	pregunta7,  	pregunta8,  	Pregunta9,  	Pregunta10";
$proto0["m_strFrom"] = "FROM preguntas";
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
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "preguntas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta1",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto8["m_sql"] = "pregunta1";
$proto8["m_srcTableName"] = "preguntas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta2",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto10["m_sql"] = "pregunta2";
$proto10["m_srcTableName"] = "preguntas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta3",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto12["m_sql"] = "pregunta3";
$proto12["m_srcTableName"] = "preguntas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta4",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto14["m_sql"] = "pregunta4";
$proto14["m_srcTableName"] = "preguntas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta5",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto16["m_sql"] = "pregunta5";
$proto16["m_srcTableName"] = "preguntas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta6",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto18["m_sql"] = "pregunta6";
$proto18["m_srcTableName"] = "preguntas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta7",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto20["m_sql"] = "pregunta7";
$proto20["m_srcTableName"] = "preguntas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "pregunta8",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto22["m_sql"] = "pregunta8";
$proto22["m_srcTableName"] = "preguntas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Pregunta9",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto24["m_sql"] = "Pregunta9";
$proto24["m_srcTableName"] = "preguntas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Pregunta10",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto26["m_sql"] = "Pregunta10";
$proto26["m_srcTableName"] = "preguntas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "preguntas";
$proto29["m_srcTableName"] = "preguntas";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "pregunta1";
$proto29["m_columns"][] = "pregunta2";
$proto29["m_columns"][] = "pregunta3";
$proto29["m_columns"][] = "pregunta4";
$proto29["m_columns"][] = "pregunta5";
$proto29["m_columns"][] = "pregunta6";
$proto29["m_columns"][] = "pregunta7";
$proto29["m_columns"][] = "pregunta8";
$proto29["m_columns"][] = "Pregunta9";
$proto29["m_columns"][] = "Pregunta10";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "preguntas";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "preguntas";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="preguntas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_preguntas = createSqlQuery_preguntas();


	
		;

											

$tdatapreguntas[".sqlquery"] = $queryData_preguntas;



$tdatapreguntas[".hasEvents"] = false;

?>