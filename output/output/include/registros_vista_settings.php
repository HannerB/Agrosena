<?php
$tdataregistros_vista = array();
$tdataregistros_vista[".searchableFields"] = array();
$tdataregistros_vista[".ShortName"] = "registros_vista";
$tdataregistros_vista[".OwnerID"] = "";
$tdataregistros_vista[".OriginalTable"] = "registros";


$tdataregistros_vista[".pagesByType"] = my_json_decode( "{\"list\":[\"list\",\"list1\"],\"search\":[\"search\"]}" );
$tdataregistros_vista[".originalPagesByType"] = $tdataregistros_vista[".pagesByType"];
$tdataregistros_vista[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\",\"list1\"],\"search\":[\"search\"]}" ) );
$tdataregistros_vista[".originalPages"] = $tdataregistros_vista[".pages"];
$tdataregistros_vista[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataregistros_vista[".originalDefaultPages"] = $tdataregistros_vista[".defaultPages"];

//	field labels
$fieldLabelsregistros_vista = array();
$fieldToolTipsregistros_vista = array();
$pageTitlesregistros_vista = array();
$placeHoldersregistros_vista = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsregistros_vista["Spanish"] = array();
	$fieldToolTipsregistros_vista["Spanish"] = array();
	$placeHoldersregistros_vista["Spanish"] = array();
	$pageTitlesregistros_vista["Spanish"] = array();
	$fieldLabelsregistros_vista["Spanish"]["id_registro"] = "No.";
	$fieldToolTipsregistros_vista["Spanish"]["id_registro"] = "";
	$placeHoldersregistros_vista["Spanish"]["id_registro"] = "";
	$fieldLabelsregistros_vista["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipsregistros_vista["Spanish"]["nombre_completo"] = "";
	$placeHoldersregistros_vista["Spanish"]["nombre_completo"] = "";
	$fieldLabelsregistros_vista["Spanish"]["num_doc"] = "Numero de Documento";
	$fieldToolTipsregistros_vista["Spanish"]["num_doc"] = "";
	$placeHoldersregistros_vista["Spanish"]["num_doc"] = "";
	if (count($fieldToolTipsregistros_vista["Spanish"]))
		$tdataregistros_vista[".isUseToolTips"] = true;
}


	$tdataregistros_vista[".NCSearch"] = true;



$tdataregistros_vista[".shortTableName"] = "registros_vista";
$tdataregistros_vista[".nSecOptions"] = 0;

$tdataregistros_vista[".mainTableOwnerID"] = "";
$tdataregistros_vista[".entityType"] = 1;
$tdataregistros_vista[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataregistros_vista[".strOriginalTableName"] = "registros";

	



$tdataregistros_vista[".showAddInPopup"] = false;

$tdataregistros_vista[".showEditInPopup"] = false;

$tdataregistros_vista[".showViewInPopup"] = false;

$tdataregistros_vista[".listAjax"] = false;
//	temporary
//$tdataregistros_vista[".listAjax"] = false;

	$tdataregistros_vista[".audit"] = false;

	$tdataregistros_vista[".locking"] = false;


$pages = $tdataregistros_vista[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataregistros_vista[".edit"] = true;
	$tdataregistros_vista[".afterEditAction"] = 0;
	$tdataregistros_vista[".closePopupAfterEdit"] = 1;
	$tdataregistros_vista[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataregistros_vista[".add"] = true;
$tdataregistros_vista[".afterAddAction"] = 1;
$tdataregistros_vista[".closePopupAfterAdd"] = 1;
$tdataregistros_vista[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataregistros_vista[".list"] = true;
}



$tdataregistros_vista[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataregistros_vista[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataregistros_vista[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataregistros_vista[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataregistros_vista[".printFriendly"] = true;
}



$tdataregistros_vista[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataregistros_vista[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataregistros_vista[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataregistros_vista[".isUseAjaxSuggest"] = true;



			

$tdataregistros_vista[".ajaxCodeSnippetAdded"] = false;

$tdataregistros_vista[".buttonsAdded"] = false;

$tdataregistros_vista[".addPageEvents"] = true;

// use timepicker for search panel
$tdataregistros_vista[".isUseTimeForSearch"] = false;


$tdataregistros_vista[".badgeColor"] = "9ACD32";


$tdataregistros_vista[".allSearchFields"] = array();
$tdataregistros_vista[".filterFields"] = array();
$tdataregistros_vista[".requiredSearchFields"] = array();

$tdataregistros_vista[".googleLikeFields"] = array();
$tdataregistros_vista[".googleLikeFields"][] = "id_registro";
$tdataregistros_vista[".googleLikeFields"][] = "nombre_completo";
$tdataregistros_vista[".googleLikeFields"][] = "num_doc";



$tdataregistros_vista[".tableType"] = "list";

$tdataregistros_vista[".printerPageOrientation"] = 0;
$tdataregistros_vista[".nPrinterPageScale"] = 100;

$tdataregistros_vista[".nPrinterSplitRecords"] = 40;

$tdataregistros_vista[".geocodingEnabled"] = false;










$tdataregistros_vista[".pageSize"] = 20;

$tdataregistros_vista[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataregistros_vista[".strOrderBy"] = $tstrOrderBy;

$tdataregistros_vista[".orderindexes"] = array();


$tdataregistros_vista[".sqlHead"] = "SELECT id_registro,  nombre_completo,  num_doc";
$tdataregistros_vista[".sqlFrom"] = "FROM registros";
$tdataregistros_vista[".sqlWhereExpr"] = "num_doc NOT IN (SELECT cedula FROM integrantes  WHERE cedula IS NOT NULL)";
$tdataregistros_vista[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataregistros_vista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataregistros_vista[".arrGroupsPerPage"] = $arrGPP;

$tdataregistros_vista[".highlightSearchResults"] = true;

$tableKeysregistros_vista = array();
$tableKeysregistros_vista[] = "id_registro";
$tdataregistros_vista[".Keys"] = $tableKeysregistros_vista;


$tdataregistros_vista[".hideMobileList"] = array();




//	id_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_registro";
	$fdata["GoodName"] = "id_registro";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_vista","id_registro");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataregistros_vista["id_registro"] = $fdata;
		$tdataregistros_vista[".searchableFields"][] = "id_registro";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_vista","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

		$fdata["sourceSingle"] = "nombre_completo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_completo";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id_registro";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_vista["nombre_completo"] = $fdata;
		$tdataregistros_vista[".searchableFields"][] = "nombre_completo";
//	num_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "num_doc";
	$fdata["GoodName"] = "num_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_vista","num_doc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "num_doc";

		$fdata["sourceSingle"] = "num_doc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_doc";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataregistros_vista["num_doc"] = $fdata;
		$tdataregistros_vista[".searchableFields"][] = "num_doc";


$tables_data["registros_vista"]=&$tdataregistros_vista;
$field_labels["registros_vista"] = &$fieldLabelsregistros_vista;
$fieldToolTips["registros_vista"] = &$fieldToolTipsregistros_vista;
$placeHolders["registros_vista"] = &$placeHoldersregistros_vista;
$page_titles["registros_vista"] = &$pageTitlesregistros_vista;


changeTextControlsToDate( "registros_vista" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["registros_vista"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["registros_vista"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_registros_vista()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_registro,  nombre_completo,  num_doc";
$proto0["m_strFrom"] = "FROM registros";
$proto0["m_strWhere"] = "num_doc NOT IN (SELECT cedula FROM integrantes  WHERE cedula IS NOT NULL)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "num_doc NOT IN (SELECT cedula FROM integrantes  WHERE cedula IS NOT NULL)";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "num_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_vista"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "NOT IN (SELECT cedula FROM integrantes  WHERE cedula IS NOT NULL)";
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
	"m_strName" => "id_registro",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_vista"
));

$proto6["m_sql"] = "id_registro";
$proto6["m_srcTableName"] = "registros_vista";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_vista"
));

$proto8["m_sql"] = "nombre_completo";
$proto8["m_srcTableName"] = "registros_vista";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "num_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_vista"
));

$proto10["m_sql"] = "num_doc";
$proto10["m_srcTableName"] = "registros_vista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "registros";
$proto13["m_srcTableName"] = "registros_vista";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_registro";
$proto13["m_columns"][] = "nombre_completo";
$proto13["m_columns"][] = "edad";
$proto13["m_columns"][] = "tipo_doc";
$proto13["m_columns"][] = "num_doc";
$proto13["m_columns"][] = "correo";
$proto13["m_columns"][] = "celular";
$proto13["m_columns"][] = "institucion";
$proto13["m_columns"][] = "centro";
$proto13["m_columns"][] = "tipo";
$proto13["m_columns"][] = "tipo_ponencia";
$proto13["m_columns"][] = "eje_ponencia";
$proto13["m_columns"][] = "desc_ponencia";
$proto13["m_columns"][] = "autoriza";
$proto13["m_columns"][] = "centros_b";
$proto13["m_columns"][] = "programa_b";
$proto13["m_columns"][] = "reto_b";
$proto13["m_columns"][] = "conocimientos_b";
$proto13["m_columns"][] = "disponibilidad_b";
$proto13["m_columns"][] = "lectura_b";
$proto13["m_columns"][] = "modalidad_p";
$proto13["m_columns"][] = "eje_poster";
$proto13["m_columns"][] = "otro_eje";
$proto13["m_columns"][] = "otro_doc";
$proto13["m_columns"][] = "aprendiz";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "registros";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "registros_vista";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="registros_vista";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_registros_vista = createSqlQuery_registros_vista();


	
		;

			

$tdataregistros_vista[".sqlquery"] = $queryData_registros_vista;



include_once(getabspath("include/registros_vista_events.php"));
$tdataregistros_vista[".hasEvents"] = true;

?>