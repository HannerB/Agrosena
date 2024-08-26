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


$tdatacriterio[".badgeColor"] = "D2AF80";


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


$tdatacriterio[".sqlHead"] = "SELECT id,  	idevaluador,  	idequipo,  	criterio1,  	criterio2,  	criterio3,  	criterio4,  	criterio5,  	criterio6,  	criterio7,  	criterio8,  	criterio9,  	criterio10";
$tdatacriterio[".sqlFrom"] = "FROM criterio";
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
	$fdata["FullName"] = "criterio1";

	
	
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
	$fdata["FullName"] = "criterio2";

	
	
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
	$fdata["FullName"] = "criterio3";

	
	
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
	$fdata["FullName"] = "criterio4";

	
	
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
	$fdata["FullName"] = "criterio5";

	
	
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
	$fdata["FullName"] = "criterio6";

	
	
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
	$fdata["FullName"] = "criterio7";

	
	
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
	$fdata["FullName"] = "criterio8";

	
	
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
	$fdata["FullName"] = "criterio9";

	
	
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
	$fdata["FullName"] = "criterio10";

	
	
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


	$tdatacriterio["criterio10"] = $fdata;
		$tdatacriterio[".searchableFields"][] = "criterio10";


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



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_criterio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	idevaluador,  	idequipo,  	criterio1,  	criterio2,  	criterio3,  	criterio4,  	criterio5,  	criterio6,  	criterio7,  	criterio8,  	criterio9,  	criterio10";
$proto0["m_strFrom"] = "FROM criterio";
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

$proto6["m_sql"] = "id";
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

$proto8["m_sql"] = "idevaluador";
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

$proto10["m_sql"] = "idequipo";
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

$proto12["m_sql"] = "criterio1";
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

$proto14["m_sql"] = "criterio2";
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

$proto16["m_sql"] = "criterio3";
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

$proto18["m_sql"] = "criterio4";
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

$proto20["m_sql"] = "criterio5";
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

$proto22["m_sql"] = "criterio6";
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

$proto24["m_sql"] = "criterio7";
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

$proto26["m_sql"] = "criterio8";
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

$proto28["m_sql"] = "criterio9";
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

$proto30["m_sql"] = "criterio10";
$proto30["m_srcTableName"] = "criterio";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "criterio";
$proto33["m_srcTableName"] = "criterio";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "idevaluador";
$proto33["m_columns"][] = "idequipo";
$proto33["m_columns"][] = "criterio1";
$proto33["m_columns"][] = "criterio2";
$proto33["m_columns"][] = "criterio3";
$proto33["m_columns"][] = "criterio4";
$proto33["m_columns"][] = "criterio5";
$proto33["m_columns"][] = "criterio6";
$proto33["m_columns"][] = "criterio7";
$proto33["m_columns"][] = "criterio8";
$proto33["m_columns"][] = "criterio9";
$proto33["m_columns"][] = "criterio10";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "criterio";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "criterio";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

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