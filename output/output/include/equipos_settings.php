<?php
$tdataequipos = array();
$tdataequipos[".searchableFields"] = array();
$tdataequipos[".ShortName"] = "equipos";
$tdataequipos[".OwnerID"] = "";
$tdataequipos[".OriginalTable"] = "equipos";


$tdataequipos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataequipos[".originalPagesByType"] = $tdataequipos[".pagesByType"];
$tdataequipos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataequipos[".originalPages"] = $tdataequipos[".pages"];
$tdataequipos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataequipos[".originalDefaultPages"] = $tdataequipos[".defaultPages"];

//	field labels
$fieldLabelsequipos = array();
$fieldToolTipsequipos = array();
$pageTitlesequipos = array();
$placeHoldersequipos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsequipos["Spanish"] = array();
	$fieldToolTipsequipos["Spanish"] = array();
	$placeHoldersequipos["Spanish"] = array();
	$pageTitlesequipos["Spanish"] = array();
	$fieldLabelsequipos["Spanish"]["id"] = "Id";
	$fieldToolTipsequipos["Spanish"]["id"] = "";
	$placeHoldersequipos["Spanish"]["id"] = "";
	$fieldLabelsequipos["Spanish"]["equipo"] = "Equipo";
	$fieldToolTipsequipos["Spanish"]["equipo"] = "";
	$placeHoldersequipos["Spanish"]["equipo"] = "";
	$fieldLabelsequipos["Spanish"]["reto"] = "Reto";
	$fieldToolTipsequipos["Spanish"]["reto"] = "";
	$placeHoldersequipos["Spanish"]["reto"] = "";
	$fieldLabelsequipos["Spanish"]["id_registro"] = "Id Registro";
	$fieldToolTipsequipos["Spanish"]["id_registro"] = "";
	$placeHoldersequipos["Spanish"]["id_registro"] = "";
	if (count($fieldToolTipsequipos["Spanish"]))
		$tdataequipos[".isUseToolTips"] = true;
}


	$tdataequipos[".NCSearch"] = true;



$tdataequipos[".shortTableName"] = "equipos";
$tdataequipos[".nSecOptions"] = 0;

$tdataequipos[".mainTableOwnerID"] = "";
$tdataequipos[".entityType"] = 0;
$tdataequipos[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataequipos[".strOriginalTableName"] = "equipos";

	



$tdataequipos[".showAddInPopup"] = false;

$tdataequipos[".showEditInPopup"] = false;

$tdataequipos[".showViewInPopup"] = false;

$tdataequipos[".listAjax"] = false;
//	temporary
//$tdataequipos[".listAjax"] = false;

	$tdataequipos[".audit"] = false;

	$tdataequipos[".locking"] = false;


$pages = $tdataequipos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataequipos[".edit"] = true;
	$tdataequipos[".afterEditAction"] = 0;
	$tdataequipos[".closePopupAfterEdit"] = 1;
	$tdataequipos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataequipos[".add"] = true;
$tdataequipos[".afterAddAction"] = 0;
$tdataequipos[".closePopupAfterAdd"] = 1;
$tdataequipos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataequipos[".list"] = true;
}



$tdataequipos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataequipos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataequipos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataequipos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataequipos[".printFriendly"] = true;
}



$tdataequipos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataequipos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataequipos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataequipos[".isUseAjaxSuggest"] = true;



			

$tdataequipos[".ajaxCodeSnippetAdded"] = false;

$tdataequipos[".buttonsAdded"] = false;

$tdataequipos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataequipos[".isUseTimeForSearch"] = false;


$tdataequipos[".badgeColor"] = "E07878";


$tdataequipos[".allSearchFields"] = array();
$tdataequipos[".filterFields"] = array();
$tdataequipos[".requiredSearchFields"] = array();

$tdataequipos[".googleLikeFields"] = array();
$tdataequipos[".googleLikeFields"][] = "id";
$tdataequipos[".googleLikeFields"][] = "equipo";
$tdataequipos[".googleLikeFields"][] = "reto";
$tdataequipos[".googleLikeFields"][] = "id_registro";



$tdataequipos[".tableType"] = "list";

$tdataequipos[".printerPageOrientation"] = 0;
$tdataequipos[".nPrinterPageScale"] = 100;

$tdataequipos[".nPrinterSplitRecords"] = 40;

$tdataequipos[".geocodingEnabled"] = false;










$tdataequipos[".pageSize"] = 20;

$tdataequipos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataequipos[".strOrderBy"] = $tstrOrderBy;

$tdataequipos[".orderindexes"] = array();


$tdataequipos[".sqlHead"] = "SELECT id,  	equipo,  	reto,  	id_registro";
$tdataequipos[".sqlFrom"] = "FROM equipos";
$tdataequipos[".sqlWhereExpr"] = "";
$tdataequipos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataequipos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataequipos[".arrGroupsPerPage"] = $arrGPP;

$tdataequipos[".highlightSearchResults"] = true;

$tableKeysequipos = array();
$tableKeysequipos[] = "id";
$tdataequipos[".Keys"] = $tableKeysequipos;


$tdataequipos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("equipos","id");
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


	$tdataequipos["id"] = $fdata;
		$tdataequipos[".searchableFields"][] = "id";
//	equipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "equipo";
	$fdata["GoodName"] = "equipo";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("equipos","equipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "equipo";

		$fdata["sourceSingle"] = "equipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "equipo";

	
	
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


	$tdataequipos["equipo"] = $fdata;
		$tdataequipos[".searchableFields"][] = "equipo";
//	reto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "reto";
	$fdata["GoodName"] = "reto";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("equipos","reto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "reto";

		$fdata["sourceSingle"] = "reto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 1000;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "retos";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "reto";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataequipos["reto"] = $fdata;
		$tdataequipos[".searchableFields"][] = "reto";
//	id_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_registro";
	$fdata["GoodName"] = "id_registro";
	$fdata["ownerTable"] = "equipos";
	$fdata["Label"] = GetFieldLabel("equipos","id_registro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_registro";

		$fdata["sourceSingle"] = "id_registro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_registro";

	
	
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
	$edata["LookupTable"] = "registros";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
		
	$edata["LinkField"] = "id_registro";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_completo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataequipos["id_registro"] = $fdata;
		$tdataequipos[".searchableFields"][] = "id_registro";


$tables_data["equipos"]=&$tdataequipos;
$field_labels["equipos"] = &$fieldLabelsequipos;
$fieldToolTips["equipos"] = &$fieldToolTipsequipos;
$placeHolders["equipos"] = &$placeHoldersequipos;
$page_titles["equipos"] = &$pageTitlesequipos;


changeTextControlsToDate( "equipos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["equipos"] = array();
//	integrantes
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="integrantes";
		$detailsParam["dOriginalTable"] = "integrantes";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "integrantes";
	$detailsParam["dCaptionTable"] = GetTableCaption("integrantes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["equipos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["equipos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["equipos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["equipos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["equipos"][$dIndex]["detailKeys"][]="idequipo";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["equipos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_equipos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	equipo,  	reto,  	id_registro";
$proto0["m_strFrom"] = "FROM equipos";
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
	"m_strTable" => "equipos",
	"m_srcTableName" => "equipos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "equipos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "equipo",
	"m_strTable" => "equipos",
	"m_srcTableName" => "equipos"
));

$proto8["m_sql"] = "equipo";
$proto8["m_srcTableName"] = "equipos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "reto",
	"m_strTable" => "equipos",
	"m_srcTableName" => "equipos"
));

$proto10["m_sql"] = "reto";
$proto10["m_srcTableName"] = "equipos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_registro",
	"m_strTable" => "equipos",
	"m_srcTableName" => "equipos"
));

$proto12["m_sql"] = "id_registro";
$proto12["m_srcTableName"] = "equipos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "equipos";
$proto15["m_srcTableName"] = "equipos";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "equipo";
$proto15["m_columns"][] = "reto";
$proto15["m_columns"][] = "id_registro";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "equipos";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "equipos";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="equipos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_equipos = createSqlQuery_equipos();


	
		;

				

$tdataequipos[".sqlquery"] = $queryData_equipos;



include_once(getabspath("include/equipos_events.php"));
$tdataequipos[".hasEvents"] = true;

?>