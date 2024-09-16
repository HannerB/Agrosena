<?php
$tdataregistros_asistente = array();
$tdataregistros_asistente[".searchableFields"] = array();
$tdataregistros_asistente[".ShortName"] = "registros_asistente";
$tdataregistros_asistente[".OwnerID"] = "id_registro";
$tdataregistros_asistente[".OriginalTable"] = "registros";


$tdataregistros_asistente[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\",\"list1\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataregistros_asistente[".originalPagesByType"] = $tdataregistros_asistente[".pagesByType"];
$tdataregistros_asistente[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\",\"list1\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataregistros_asistente[".originalPages"] = $tdataregistros_asistente[".pages"];
$tdataregistros_asistente[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataregistros_asistente[".originalDefaultPages"] = $tdataregistros_asistente[".defaultPages"];

//	field labels
$fieldLabelsregistros_asistente = array();
$fieldToolTipsregistros_asistente = array();
$pageTitlesregistros_asistente = array();
$placeHoldersregistros_asistente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsregistros_asistente["Spanish"] = array();
	$fieldToolTipsregistros_asistente["Spanish"] = array();
	$placeHoldersregistros_asistente["Spanish"] = array();
	$pageTitlesregistros_asistente["Spanish"] = array();
	$fieldLabelsregistros_asistente["Spanish"]["id_registro"] = "No.";
	$fieldToolTipsregistros_asistente["Spanish"]["id_registro"] = "";
	$placeHoldersregistros_asistente["Spanish"]["id_registro"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipsregistros_asistente["Spanish"]["nombre_completo"] = "";
	$placeHoldersregistros_asistente["Spanish"]["nombre_completo"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["edad"] = "Edad";
	$fieldToolTipsregistros_asistente["Spanish"]["edad"] = "";
	$placeHoldersregistros_asistente["Spanish"]["edad"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["tipo_doc"] = "Identificado con";
	$fieldToolTipsregistros_asistente["Spanish"]["tipo_doc"] = "";
	$placeHoldersregistros_asistente["Spanish"]["tipo_doc"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["num_doc"] = "Telefono";
	$fieldToolTipsregistros_asistente["Spanish"]["num_doc"] = "";
	$placeHoldersregistros_asistente["Spanish"]["num_doc"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["correo"] = "Correo";
	$fieldToolTipsregistros_asistente["Spanish"]["correo"] = "";
	$placeHoldersregistros_asistente["Spanish"]["correo"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["celular"] = "Celular";
	$fieldToolTipsregistros_asistente["Spanish"]["celular"] = "";
	$placeHoldersregistros_asistente["Spanish"]["celular"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["institucion"] = "Institución de Formacion a la que pertenece";
	$fieldToolTipsregistros_asistente["Spanish"]["institucion"] = "";
	$placeHoldersregistros_asistente["Spanish"]["institucion"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["centro"] = "Centro de Formación de la Regional Atlántico Sena al que pertenece";
	$fieldToolTipsregistros_asistente["Spanish"]["centro"] = "";
	$placeHoldersregistros_asistente["Spanish"]["centro"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["tipo"] = "Tipo de Registro";
	$fieldToolTipsregistros_asistente["Spanish"]["tipo"] = "";
	$placeHoldersregistros_asistente["Spanish"]["tipo"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["tipo_ponencia"] = "Tipo de Ponencia";
	$fieldToolTipsregistros_asistente["Spanish"]["tipo_ponencia"] = "";
	$placeHoldersregistros_asistente["Spanish"]["tipo_ponencia"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["eje_ponencia"] = "Eje Temático de la ponencia";
	$fieldToolTipsregistros_asistente["Spanish"]["eje_ponencia"] = "";
	$placeHoldersregistros_asistente["Spanish"]["eje_ponencia"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["desc_ponencia"] = "Breve descripción de la ponencia";
	$fieldToolTipsregistros_asistente["Spanish"]["desc_ponencia"] = "";
	$placeHoldersregistros_asistente["Spanish"]["desc_ponencia"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["autoriza"] = "Autorización para el uso de datos personales de acuerdo con la ley 1581 de 2012.";
	$fieldToolTipsregistros_asistente["Spanish"]["autoriza"] = "";
	$placeHoldersregistros_asistente["Spanish"]["autoriza"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["centros_b"] = "Centro al que pertenece";
	$fieldToolTipsregistros_asistente["Spanish"]["centros_b"] = "";
	$placeHoldersregistros_asistente["Spanish"]["centros_b"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["programa_b"] = "Programa de Formación al que pertenece";
	$fieldToolTipsregistros_asistente["Spanish"]["programa_b"] = "";
	$placeHoldersregistros_asistente["Spanish"]["programa_b"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["reto_b"] = "Reto al que se inscribe";
	$fieldToolTipsregistros_asistente["Spanish"]["reto_b"] = "";
	$placeHoldersregistros_asistente["Spanish"]["reto_b"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["conocimientos_b"] = "Breve descripción de conocimientos y habilidades técnicas relevantes (programación, diseño, lenguajes de programación, software, mercadeo, ventas etc)";
	$fieldToolTipsregistros_asistente["Spanish"]["conocimientos_b"] = "";
	$placeHoldersregistros_asistente["Spanish"]["conocimientos_b"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["disponibilidad_b"] = "¿Cuenta con la disponibilidad de participar en el bootcamp, hasta completar la fase final de evaluación y premiación?";
	$fieldToolTipsregistros_asistente["Spanish"]["disponibilidad_b"] = "";
	$placeHoldersregistros_asistente["Spanish"]["disponibilidad_b"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["lectura_b"] = "Confirmación de lectura y aceptación de los términos y condiciones del Bootcamp";
	$fieldToolTipsregistros_asistente["Spanish"]["lectura_b"] = "";
	$placeHoldersregistros_asistente["Spanish"]["lectura_b"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["modalidad_p"] = "Breve descripción del proyecto presentado en modalidad Poster";
	$fieldToolTipsregistros_asistente["Spanish"]["modalidad_p"] = "";
	$placeHoldersregistros_asistente["Spanish"]["modalidad_p"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["eje_poster"] = "Eje temático del Proyecto presentado en modalidad poster";
	$fieldToolTipsregistros_asistente["Spanish"]["eje_poster"] = "";
	$placeHoldersregistros_asistente["Spanish"]["eje_poster"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["otro_eje"] = "Otro";
	$fieldToolTipsregistros_asistente["Spanish"]["otro_eje"] = "";
	$placeHoldersregistros_asistente["Spanish"]["otro_eje"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["otro_doc"] = "Otro";
	$fieldToolTipsregistros_asistente["Spanish"]["otro_doc"] = "";
	$placeHoldersregistros_asistente["Spanish"]["otro_doc"] = "";
	$fieldLabelsregistros_asistente["Spanish"]["aprendiz"] = "¿Es Aprendiz Sena?";
	$fieldToolTipsregistros_asistente["Spanish"]["aprendiz"] = "";
	$placeHoldersregistros_asistente["Spanish"]["aprendiz"] = "";
	if (count($fieldToolTipsregistros_asistente["Spanish"]))
		$tdataregistros_asistente[".isUseToolTips"] = true;
}


	$tdataregistros_asistente[".NCSearch"] = true;



$tdataregistros_asistente[".shortTableName"] = "registros_asistente";
$tdataregistros_asistente[".nSecOptions"] = 0;

$tdataregistros_asistente[".mainTableOwnerID"] = "id_registro";
$tdataregistros_asistente[".entityType"] = 1;
$tdataregistros_asistente[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataregistros_asistente[".strOriginalTableName"] = "registros";

	



$tdataregistros_asistente[".showAddInPopup"] = false;

$tdataregistros_asistente[".showEditInPopup"] = false;

$tdataregistros_asistente[".showViewInPopup"] = false;

$tdataregistros_asistente[".listAjax"] = false;
//	temporary
//$tdataregistros_asistente[".listAjax"] = false;

	$tdataregistros_asistente[".audit"] = false;

	$tdataregistros_asistente[".locking"] = false;


$pages = $tdataregistros_asistente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataregistros_asistente[".edit"] = true;
	$tdataregistros_asistente[".afterEditAction"] = 0;
	$tdataregistros_asistente[".closePopupAfterEdit"] = 1;
	$tdataregistros_asistente[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataregistros_asistente[".add"] = true;
$tdataregistros_asistente[".afterAddAction"] = 1;
$tdataregistros_asistente[".closePopupAfterAdd"] = 1;
$tdataregistros_asistente[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataregistros_asistente[".list"] = true;
}



$tdataregistros_asistente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataregistros_asistente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataregistros_asistente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataregistros_asistente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataregistros_asistente[".printFriendly"] = true;
}



$tdataregistros_asistente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataregistros_asistente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataregistros_asistente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataregistros_asistente[".isUseAjaxSuggest"] = true;



			

$tdataregistros_asistente[".ajaxCodeSnippetAdded"] = false;

$tdataregistros_asistente[".buttonsAdded"] = false;

$tdataregistros_asistente[".addPageEvents"] = true;

// use timepicker for search panel
$tdataregistros_asistente[".isUseTimeForSearch"] = false;


$tdataregistros_asistente[".badgeColor"] = "DAA520";


$tdataregistros_asistente[".allSearchFields"] = array();
$tdataregistros_asistente[".filterFields"] = array();
$tdataregistros_asistente[".requiredSearchFields"] = array();

$tdataregistros_asistente[".googleLikeFields"] = array();
$tdataregistros_asistente[".googleLikeFields"][] = "id_registro";
$tdataregistros_asistente[".googleLikeFields"][] = "nombre_completo";
$tdataregistros_asistente[".googleLikeFields"][] = "edad";
$tdataregistros_asistente[".googleLikeFields"][] = "tipo_doc";
$tdataregistros_asistente[".googleLikeFields"][] = "num_doc";
$tdataregistros_asistente[".googleLikeFields"][] = "correo";
$tdataregistros_asistente[".googleLikeFields"][] = "celular";
$tdataregistros_asistente[".googleLikeFields"][] = "institucion";
$tdataregistros_asistente[".googleLikeFields"][] = "centro";
$tdataregistros_asistente[".googleLikeFields"][] = "tipo";
$tdataregistros_asistente[".googleLikeFields"][] = "tipo_ponencia";
$tdataregistros_asistente[".googleLikeFields"][] = "eje_ponencia";
$tdataregistros_asistente[".googleLikeFields"][] = "desc_ponencia";
$tdataregistros_asistente[".googleLikeFields"][] = "autoriza";
$tdataregistros_asistente[".googleLikeFields"][] = "centros_b";
$tdataregistros_asistente[".googleLikeFields"][] = "programa_b";
$tdataregistros_asistente[".googleLikeFields"][] = "reto_b";
$tdataregistros_asistente[".googleLikeFields"][] = "conocimientos_b";
$tdataregistros_asistente[".googleLikeFields"][] = "disponibilidad_b";
$tdataregistros_asistente[".googleLikeFields"][] = "lectura_b";
$tdataregistros_asistente[".googleLikeFields"][] = "modalidad_p";
$tdataregistros_asistente[".googleLikeFields"][] = "eje_poster";
$tdataregistros_asistente[".googleLikeFields"][] = "otro_eje";
$tdataregistros_asistente[".googleLikeFields"][] = "otro_doc";
$tdataregistros_asistente[".googleLikeFields"][] = "aprendiz";



$tdataregistros_asistente[".tableType"] = "list";

$tdataregistros_asistente[".printerPageOrientation"] = 0;
$tdataregistros_asistente[".nPrinterPageScale"] = 100;

$tdataregistros_asistente[".nPrinterSplitRecords"] = 40;

$tdataregistros_asistente[".geocodingEnabled"] = false;










$tdataregistros_asistente[".pageSize"] = 20;

$tdataregistros_asistente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataregistros_asistente[".strOrderBy"] = $tstrOrderBy;

$tdataregistros_asistente[".orderindexes"] = array();


$tdataregistros_asistente[".sqlHead"] = "SELECT id_registro,  nombre_completo,  edad,  tipo_doc,  num_doc,  correo,  celular,  institucion,  centro,  tipo,  tipo_ponencia,  eje_ponencia,  desc_ponencia,  autoriza,  centros_b,  programa_b,  reto_b,  conocimientos_b,  disponibilidad_b,  lectura_b,  modalidad_p,  eje_poster,  otro_eje,  otro_doc,  aprendiz";
$tdataregistros_asistente[".sqlFrom"] = "FROM registros";
$tdataregistros_asistente[".sqlWhereExpr"] = "(tipo = \"Asistente\")";
$tdataregistros_asistente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataregistros_asistente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataregistros_asistente[".arrGroupsPerPage"] = $arrGPP;

$tdataregistros_asistente[".highlightSearchResults"] = true;

$tableKeysregistros_asistente = array();
$tableKeysregistros_asistente[] = "id_registro";
$tdataregistros_asistente[".Keys"] = $tableKeysregistros_asistente;


$tdataregistros_asistente[".hideMobileList"] = array();




//	id_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_registro";
	$fdata["GoodName"] = "id_registro";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","id_registro");
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


	$tdataregistros_asistente["id_registro"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "id_registro";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","nombre_completo");
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


	$tdataregistros_asistente["nombre_completo"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "nombre_completo";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","edad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "edad";

		$fdata["sourceSingle"] = "edad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad";

	
	
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


	$tdataregistros_asistente["edad"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "edad";
//	tipo_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipo_doc";
	$fdata["GoodName"] = "tipo_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","tipo_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_doc";

		$fdata["sourceSingle"] = "tipo_doc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_doc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Cedula de Ciudadania";
	$edata["LookupValues"][] = "Tarjeta de Identidad";
	$edata["LookupValues"][] = "Cedula de Extranjeria";
	$edata["LookupValues"][] = "Pasaporte";
	$edata["LookupValues"][] = "Otro";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["tipo_doc"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "tipo_doc";
//	num_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "num_doc";
	$fdata["GoodName"] = "num_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","num_doc");
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


	$tdataregistros_asistente["num_doc"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "num_doc";
//	correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "correo";
	$fdata["GoodName"] = "correo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","correo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "correo";

		$fdata["sourceSingle"] = "correo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correo";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_asistente["correo"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "correo";
//	celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "celular";
	$fdata["GoodName"] = "celular";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","celular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "celular";

		$fdata["sourceSingle"] = "celular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "celular";

	
	
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


	$tdataregistros_asistente["celular"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "celular";
//	institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "institucion";
	$fdata["GoodName"] = "institucion";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","institucion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "institucion";

		$fdata["sourceSingle"] = "institucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "institucion";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_asistente["institucion"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "institucion";
//	centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "centro";
	$fdata["GoodName"] = "centro";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","centro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "centro";

		$fdata["sourceSingle"] = "centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "centro";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Centro para el desarrollo Agroecológico e Industrial ";
	$edata["LookupValues"][] = "Centro Nacional Colombo Alemán";
	$edata["LookupValues"][] = "Centro Industrial y de Aviación ";
	$edata["LookupValues"][] = "Centro de Comercio y Servicio";
	$edata["LookupValues"][] = "No aplica ";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["centro"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "centro";
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo";

		$fdata["sourceSingle"] = "tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Participante al Jam";
	$edata["LookupValues"][] = "Ponencia";
	$edata["LookupValues"][] = "Poster";
	$edata["LookupValues"][] = "Asistente";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["tipo"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "tipo";
//	tipo_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tipo_ponencia";
	$fdata["GoodName"] = "tipo_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","tipo_ponencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_ponencia";

		$fdata["sourceSingle"] = "tipo_ponencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_ponencia";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Artículos resultados de proyectos de Investigación científica y tecnológica";
	$edata["LookupValues"][] = "Artículo de revisión";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["tipo_ponencia"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "tipo_ponencia";
//	eje_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "eje_ponencia";
	$fdata["GoodName"] = "eje_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","eje_ponencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "eje_ponencia";

		$fdata["sourceSingle"] = "eje_ponencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eje_ponencia";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Agro y Medioambiente.";
	$edata["LookupValues"][] = " Tecnologías aplicadas al Sector Agro.";
	$edata["LookupValues"][] = "Energías Renovables.";
	$edata["LookupValues"][] = "Economía Popular";
	$edata["LookupValues"][] = "Innovación y Gestión Empresarial.";
	$edata["LookupValues"][] = "Competitividad, Innovación y Emprendimiento en el Sector Turismo Industria del movimiento";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["eje_ponencia"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "eje_ponencia";
//	desc_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "desc_ponencia";
	$fdata["GoodName"] = "desc_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","desc_ponencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "desc_ponencia";

		$fdata["sourceSingle"] = "desc_ponencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "desc_ponencia";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_asistente["desc_ponencia"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "desc_ponencia";
//	autoriza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "autoriza";
	$fdata["GoodName"] = "autoriza";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","autoriza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "autoriza";

		$fdata["sourceSingle"] = "autoriza";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "autoriza";

	
	
			
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["autoriza"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "autoriza";
//	centros_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "centros_b";
	$fdata["GoodName"] = "centros_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","centros_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "centros_b";

		$fdata["sourceSingle"] = "centros_b";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "centros_b";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Centro para el desarrollo Agroecológico e Industrial ";
	$edata["LookupValues"][] = "Centro Nacional Colombo Alemán";
	$edata["LookupValues"][] = "Centro Industrial y de Aviación ";
	$edata["LookupValues"][] = "Centro de Comercio y Servicio";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["centros_b"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "centros_b";
//	programa_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "programa_b";
	$fdata["GoodName"] = "programa_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","programa_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "programa_b";

		$fdata["sourceSingle"] = "programa_b";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "programa_b";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_asistente["programa_b"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "programa_b";
//	reto_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "reto_b";
	$fdata["GoodName"] = "reto_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","reto_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reto_b";

		$fdata["sourceSingle"] = "reto_b";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reto_b";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Reto 1 - Prototipado";
	$edata["LookupValues"][] = "Reto 2 - Comercio y Servicios";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["reto_b"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "reto_b";
//	conocimientos_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "conocimientos_b";
	$fdata["GoodName"] = "conocimientos_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","conocimientos_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "conocimientos_b";

		$fdata["sourceSingle"] = "conocimientos_b";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conocimientos_b";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_asistente["conocimientos_b"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "conocimientos_b";
//	disponibilidad_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "disponibilidad_b";
	$fdata["GoodName"] = "disponibilidad_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","disponibilidad_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "disponibilidad_b";

		$fdata["sourceSingle"] = "disponibilidad_b";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disponibilidad_b";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["disponibilidad_b"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "disponibilidad_b";
//	lectura_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "lectura_b";
	$fdata["GoodName"] = "lectura_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","lectura_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lectura_b";

		$fdata["sourceSingle"] = "lectura_b";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lectura_b";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["lectura_b"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "lectura_b";
//	modalidad_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "modalidad_p";
	$fdata["GoodName"] = "modalidad_p";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","modalidad_p");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "modalidad_p";

		$fdata["sourceSingle"] = "modalidad_p";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modalidad_p";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_asistente["modalidad_p"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "modalidad_p";
//	eje_poster
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "eje_poster";
	$fdata["GoodName"] = "eje_poster";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","eje_poster");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "eje_poster";

		$fdata["sourceSingle"] = "eje_poster";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eje_poster";

	
	
			
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Agro y Medio ambiente ";
	$edata["LookupValues"][] = "Tecnologías aplicadas al Sector Agro";
	$edata["LookupValues"][] = "Energías Renovables";
	$edata["LookupValues"][] = "Economía Popular ";
	$edata["LookupValues"][] = "Innovación y gestión empresarial";
	$edata["LookupValues"][] = "Otro";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["eje_poster"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "eje_poster";
//	otro_eje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "otro_eje";
	$fdata["GoodName"] = "otro_eje";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","otro_eje");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "otro_eje";

		$fdata["sourceSingle"] = "otro_eje";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "otro_eje";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_asistente["otro_eje"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "otro_eje";
//	otro_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "otro_doc";
	$fdata["GoodName"] = "otro_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","otro_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "otro_doc";

		$fdata["sourceSingle"] = "otro_doc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "otro_doc";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_asistente["otro_doc"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "otro_doc";
//	aprendiz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "aprendiz";
	$fdata["GoodName"] = "aprendiz";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_asistente","aprendiz");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "aprendiz";

		$fdata["sourceSingle"] = "aprendiz";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aprendiz";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

	
		$edata["SelectSize"] = 1;

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


	$tdataregistros_asistente["aprendiz"] = $fdata;
		$tdataregistros_asistente[".searchableFields"][] = "aprendiz";


$tables_data["registros_asistente"]=&$tdataregistros_asistente;
$field_labels["registros_asistente"] = &$fieldLabelsregistros_asistente;
$fieldToolTips["registros_asistente"] = &$fieldToolTipsregistros_asistente;
$placeHolders["registros_asistente"] = &$placeHoldersregistros_asistente;
$page_titles["registros_asistente"] = &$pageTitlesregistros_asistente;


changeTextControlsToDate( "registros_asistente" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["registros_asistente"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["registros_asistente"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_registros_asistente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_registro,  nombre_completo,  edad,  tipo_doc,  num_doc,  correo,  celular,  institucion,  centro,  tipo,  tipo_ponencia,  eje_ponencia,  desc_ponencia,  autoriza,  centros_b,  programa_b,  reto_b,  conocimientos_b,  disponibilidad_b,  lectura_b,  modalidad_p,  eje_poster,  otro_eje,  otro_doc,  aprendiz";
$proto0["m_strFrom"] = "FROM registros";
$proto0["m_strWhere"] = "(tipo = \"Asistente\")";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "tipo = \"Asistente\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= \"Asistente\"";
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
	"m_srcTableName" => "registros_asistente"
));

$proto6["m_sql"] = "id_registro";
$proto6["m_srcTableName"] = "registros_asistente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto8["m_sql"] = "nombre_completo";
$proto8["m_srcTableName"] = "registros_asistente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto10["m_sql"] = "edad";
$proto10["m_srcTableName"] = "registros_asistente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto12["m_sql"] = "tipo_doc";
$proto12["m_srcTableName"] = "registros_asistente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "num_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto14["m_sql"] = "num_doc";
$proto14["m_srcTableName"] = "registros_asistente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "correo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto16["m_sql"] = "correo";
$proto16["m_srcTableName"] = "registros_asistente";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "celular",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto18["m_sql"] = "celular";
$proto18["m_srcTableName"] = "registros_asistente";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "institucion",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto20["m_sql"] = "institucion";
$proto20["m_srcTableName"] = "registros_asistente";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "centro",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto22["m_sql"] = "centro";
$proto22["m_srcTableName"] = "registros_asistente";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto24["m_sql"] = "tipo";
$proto24["m_srcTableName"] = "registros_asistente";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto26["m_sql"] = "tipo_ponencia";
$proto26["m_srcTableName"] = "registros_asistente";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "eje_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto28["m_sql"] = "eje_ponencia";
$proto28["m_srcTableName"] = "registros_asistente";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "desc_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto30["m_sql"] = "desc_ponencia";
$proto30["m_srcTableName"] = "registros_asistente";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "autoriza",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto32["m_sql"] = "autoriza";
$proto32["m_srcTableName"] = "registros_asistente";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "centros_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto34["m_sql"] = "centros_b";
$proto34["m_srcTableName"] = "registros_asistente";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "programa_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto36["m_sql"] = "programa_b";
$proto36["m_srcTableName"] = "registros_asistente";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "reto_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto38["m_sql"] = "reto_b";
$proto38["m_srcTableName"] = "registros_asistente";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "conocimientos_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto40["m_sql"] = "conocimientos_b";
$proto40["m_srcTableName"] = "registros_asistente";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "disponibilidad_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto42["m_sql"] = "disponibilidad_b";
$proto42["m_srcTableName"] = "registros_asistente";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "lectura_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto44["m_sql"] = "lectura_b";
$proto44["m_srcTableName"] = "registros_asistente";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad_p",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto46["m_sql"] = "modalidad_p";
$proto46["m_srcTableName"] = "registros_asistente";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "eje_poster",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto48["m_sql"] = "eje_poster";
$proto48["m_srcTableName"] = "registros_asistente";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "otro_eje",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto50["m_sql"] = "otro_eje";
$proto50["m_srcTableName"] = "registros_asistente";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "otro_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto52["m_sql"] = "otro_doc";
$proto52["m_srcTableName"] = "registros_asistente";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "aprendiz",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_asistente"
));

$proto54["m_sql"] = "aprendiz";
$proto54["m_srcTableName"] = "registros_asistente";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "registros";
$proto57["m_srcTableName"] = "registros_asistente";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id_registro";
$proto57["m_columns"][] = "nombre_completo";
$proto57["m_columns"][] = "edad";
$proto57["m_columns"][] = "tipo_doc";
$proto57["m_columns"][] = "num_doc";
$proto57["m_columns"][] = "correo";
$proto57["m_columns"][] = "celular";
$proto57["m_columns"][] = "institucion";
$proto57["m_columns"][] = "centro";
$proto57["m_columns"][] = "tipo";
$proto57["m_columns"][] = "tipo_ponencia";
$proto57["m_columns"][] = "eje_ponencia";
$proto57["m_columns"][] = "desc_ponencia";
$proto57["m_columns"][] = "autoriza";
$proto57["m_columns"][] = "centros_b";
$proto57["m_columns"][] = "programa_b";
$proto57["m_columns"][] = "reto_b";
$proto57["m_columns"][] = "conocimientos_b";
$proto57["m_columns"][] = "disponibilidad_b";
$proto57["m_columns"][] = "lectura_b";
$proto57["m_columns"][] = "modalidad_p";
$proto57["m_columns"][] = "eje_poster";
$proto57["m_columns"][] = "otro_eje";
$proto57["m_columns"][] = "otro_doc";
$proto57["m_columns"][] = "aprendiz";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "registros";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "registros_asistente";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="registros_asistente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_registros_asistente = createSqlQuery_registros_asistente();


	
		;

																									

$tdataregistros_asistente[".sqlquery"] = $queryData_registros_asistente;



include_once(getabspath("include/registros_asistente_events.php"));
$tdataregistros_asistente[".hasEvents"] = true;

?>