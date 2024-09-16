<?php
$tdataadd_asistentes = array();
$tdataadd_asistentes[".searchableFields"] = array();
$tdataadd_asistentes[".ShortName"] = "add_asistentes";
$tdataadd_asistentes[".OwnerID"] = "id_registro";
$tdataadd_asistentes[".OriginalTable"] = "registros";


$tdataadd_asistentes[".pagesByType"] = my_json_decode( "{\"add\":[\"add3\"],\"search\":[\"search\"]}" );
$tdataadd_asistentes[".originalPagesByType"] = $tdataadd_asistentes[".pagesByType"];
$tdataadd_asistentes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add3\"],\"search\":[\"search\"]}" ) );
$tdataadd_asistentes[".originalPages"] = $tdataadd_asistentes[".pages"];
$tdataadd_asistentes[".defaultPages"] = my_json_decode( "{\"add\":\"add3\",\"search\":\"search\"}" );
$tdataadd_asistentes[".originalDefaultPages"] = $tdataadd_asistentes[".defaultPages"];

//	field labels
$fieldLabelsadd_asistentes = array();
$fieldToolTipsadd_asistentes = array();
$pageTitlesadd_asistentes = array();
$placeHoldersadd_asistentes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadd_asistentes["Spanish"] = array();
	$fieldToolTipsadd_asistentes["Spanish"] = array();
	$placeHoldersadd_asistentes["Spanish"] = array();
	$pageTitlesadd_asistentes["Spanish"] = array();
	$fieldLabelsadd_asistentes["Spanish"]["id_registro"] = "No.";
	$fieldToolTipsadd_asistentes["Spanish"]["id_registro"] = "";
	$placeHoldersadd_asistentes["Spanish"]["id_registro"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipsadd_asistentes["Spanish"]["nombre_completo"] = "";
	$placeHoldersadd_asistentes["Spanish"]["nombre_completo"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["edad"] = "Edad";
	$fieldToolTipsadd_asistentes["Spanish"]["edad"] = "";
	$placeHoldersadd_asistentes["Spanish"]["edad"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["tipo_doc"] = "Identificado con";
	$fieldToolTipsadd_asistentes["Spanish"]["tipo_doc"] = "";
	$placeHoldersadd_asistentes["Spanish"]["tipo_doc"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["num_doc"] = "No. Documento";
	$fieldToolTipsadd_asistentes["Spanish"]["num_doc"] = "";
	$placeHoldersadd_asistentes["Spanish"]["num_doc"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["correo"] = "Correo";
	$fieldToolTipsadd_asistentes["Spanish"]["correo"] = "";
	$placeHoldersadd_asistentes["Spanish"]["correo"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["celular"] = "Celular";
	$fieldToolTipsadd_asistentes["Spanish"]["celular"] = "";
	$placeHoldersadd_asistentes["Spanish"]["celular"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["institucion"] = "Institución de Formacion a la que pertenece";
	$fieldToolTipsadd_asistentes["Spanish"]["institucion"] = "";
	$placeHoldersadd_asistentes["Spanish"]["institucion"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["centro"] = "Centro de Formación de la Regional Atlántico Sena al que pertenece";
	$fieldToolTipsadd_asistentes["Spanish"]["centro"] = "";
	$placeHoldersadd_asistentes["Spanish"]["centro"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["tipo"] = "Tipo de Registro";
	$fieldToolTipsadd_asistentes["Spanish"]["tipo"] = "";
	$placeHoldersadd_asistentes["Spanish"]["tipo"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["tipo_ponencia"] = "Tipo de Ponencia";
	$fieldToolTipsadd_asistentes["Spanish"]["tipo_ponencia"] = "";
	$placeHoldersadd_asistentes["Spanish"]["tipo_ponencia"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["eje_ponencia"] = "Eje Temático de la ponencia";
	$fieldToolTipsadd_asistentes["Spanish"]["eje_ponencia"] = "";
	$placeHoldersadd_asistentes["Spanish"]["eje_ponencia"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["desc_ponencia"] = "Breve descripción de la ponencia";
	$fieldToolTipsadd_asistentes["Spanish"]["desc_ponencia"] = "";
	$placeHoldersadd_asistentes["Spanish"]["desc_ponencia"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["autoriza"] = "Autorización para el uso de datos personales de acuerdo con la ley 1581 de 2012.";
	$fieldToolTipsadd_asistentes["Spanish"]["autoriza"] = "";
	$placeHoldersadd_asistentes["Spanish"]["autoriza"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["centros_b"] = "Centro al que pertenece";
	$fieldToolTipsadd_asistentes["Spanish"]["centros_b"] = "";
	$placeHoldersadd_asistentes["Spanish"]["centros_b"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["programa_b"] = "Programa de Formación al que pertenece";
	$fieldToolTipsadd_asistentes["Spanish"]["programa_b"] = "";
	$placeHoldersadd_asistentes["Spanish"]["programa_b"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["reto_b"] = "Reto al que se inscribe";
	$fieldToolTipsadd_asistentes["Spanish"]["reto_b"] = "";
	$placeHoldersadd_asistentes["Spanish"]["reto_b"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["conocimientos_b"] = "Breve descripción de conocimientos y habilidades técnicas relevantes (programación, diseño, lenguajes de programación, software, mercadeo, ventas etc)";
	$fieldToolTipsadd_asistentes["Spanish"]["conocimientos_b"] = "";
	$placeHoldersadd_asistentes["Spanish"]["conocimientos_b"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["disponibilidad_b"] = "¿Cuenta con la disponibilidad de participar en el bootcamp, hasta completar la fase final de evaluación y premiación?";
	$fieldToolTipsadd_asistentes["Spanish"]["disponibilidad_b"] = "";
	$placeHoldersadd_asistentes["Spanish"]["disponibilidad_b"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["lectura_b"] = "Confirmación de lectura y aceptación de los términos y condiciones del Bootcamp";
	$fieldToolTipsadd_asistentes["Spanish"]["lectura_b"] = "";
	$placeHoldersadd_asistentes["Spanish"]["lectura_b"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["modalidad_p"] = "Breve descripción del proyecto presentado en modalidad Poster";
	$fieldToolTipsadd_asistentes["Spanish"]["modalidad_p"] = "";
	$placeHoldersadd_asistentes["Spanish"]["modalidad_p"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["eje_poster"] = "Eje temático del Proyecto presentado en modalidad poster";
	$fieldToolTipsadd_asistentes["Spanish"]["eje_poster"] = "";
	$placeHoldersadd_asistentes["Spanish"]["eje_poster"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["otro_eje"] = "Otro";
	$fieldToolTipsadd_asistentes["Spanish"]["otro_eje"] = "";
	$placeHoldersadd_asistentes["Spanish"]["otro_eje"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["otro_doc"] = "Otro";
	$fieldToolTipsadd_asistentes["Spanish"]["otro_doc"] = "";
	$placeHoldersadd_asistentes["Spanish"]["otro_doc"] = "";
	$fieldLabelsadd_asistentes["Spanish"]["aprendiz"] = "¿Es Aprendiz Sena?";
	$fieldToolTipsadd_asistentes["Spanish"]["aprendiz"] = "";
	$placeHoldersadd_asistentes["Spanish"]["aprendiz"] = "";
	$pageTitlesadd_asistentes["Spanish"]["add3"] = "Registro para Asistentes";
	if (count($fieldToolTipsadd_asistentes["Spanish"]))
		$tdataadd_asistentes[".isUseToolTips"] = true;
}


	$tdataadd_asistentes[".NCSearch"] = true;



$tdataadd_asistentes[".shortTableName"] = "add_asistentes";
$tdataadd_asistentes[".nSecOptions"] = 0;

$tdataadd_asistentes[".mainTableOwnerID"] = "id_registro";
$tdataadd_asistentes[".entityType"] = 1;
$tdataadd_asistentes[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataadd_asistentes[".strOriginalTableName"] = "registros";

	



$tdataadd_asistentes[".showAddInPopup"] = false;

$tdataadd_asistentes[".showEditInPopup"] = false;

$tdataadd_asistentes[".showViewInPopup"] = false;

$tdataadd_asistentes[".listAjax"] = false;
//	temporary
//$tdataadd_asistentes[".listAjax"] = false;

	$tdataadd_asistentes[".audit"] = false;

	$tdataadd_asistentes[".locking"] = false;


$pages = $tdataadd_asistentes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadd_asistentes[".edit"] = true;
	$tdataadd_asistentes[".afterEditAction"] = 0;
	$tdataadd_asistentes[".closePopupAfterEdit"] = 1;
	$tdataadd_asistentes[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataadd_asistentes[".add"] = true;
$tdataadd_asistentes[".afterAddAction"] = 1;
$tdataadd_asistentes[".closePopupAfterAdd"] = 1;
$tdataadd_asistentes[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataadd_asistentes[".list"] = true;
}



$tdataadd_asistentes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadd_asistentes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadd_asistentes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadd_asistentes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadd_asistentes[".printFriendly"] = true;
}



$tdataadd_asistentes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadd_asistentes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadd_asistentes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadd_asistentes[".isUseAjaxSuggest"] = true;



			

$tdataadd_asistentes[".ajaxCodeSnippetAdded"] = false;

$tdataadd_asistentes[".buttonsAdded"] = false;

$tdataadd_asistentes[".addPageEvents"] = true;

// use timepicker for search panel
$tdataadd_asistentes[".isUseTimeForSearch"] = false;


$tdataadd_asistentes[".badgeColor"] = "CD853F";


$tdataadd_asistentes[".allSearchFields"] = array();
$tdataadd_asistentes[".filterFields"] = array();
$tdataadd_asistentes[".requiredSearchFields"] = array();

$tdataadd_asistentes[".googleLikeFields"] = array();
$tdataadd_asistentes[".googleLikeFields"][] = "id_registro";
$tdataadd_asistentes[".googleLikeFields"][] = "nombre_completo";
$tdataadd_asistentes[".googleLikeFields"][] = "edad";
$tdataadd_asistentes[".googleLikeFields"][] = "tipo_doc";
$tdataadd_asistentes[".googleLikeFields"][] = "num_doc";
$tdataadd_asistentes[".googleLikeFields"][] = "correo";
$tdataadd_asistentes[".googleLikeFields"][] = "celular";
$tdataadd_asistentes[".googleLikeFields"][] = "institucion";
$tdataadd_asistentes[".googleLikeFields"][] = "centro";
$tdataadd_asistentes[".googleLikeFields"][] = "tipo";
$tdataadd_asistentes[".googleLikeFields"][] = "tipo_ponencia";
$tdataadd_asistentes[".googleLikeFields"][] = "eje_ponencia";
$tdataadd_asistentes[".googleLikeFields"][] = "desc_ponencia";
$tdataadd_asistentes[".googleLikeFields"][] = "autoriza";
$tdataadd_asistentes[".googleLikeFields"][] = "centros_b";
$tdataadd_asistentes[".googleLikeFields"][] = "programa_b";
$tdataadd_asistentes[".googleLikeFields"][] = "reto_b";
$tdataadd_asistentes[".googleLikeFields"][] = "conocimientos_b";
$tdataadd_asistentes[".googleLikeFields"][] = "disponibilidad_b";
$tdataadd_asistentes[".googleLikeFields"][] = "lectura_b";
$tdataadd_asistentes[".googleLikeFields"][] = "modalidad_p";
$tdataadd_asistentes[".googleLikeFields"][] = "eje_poster";
$tdataadd_asistentes[".googleLikeFields"][] = "otro_eje";
$tdataadd_asistentes[".googleLikeFields"][] = "otro_doc";
$tdataadd_asistentes[".googleLikeFields"][] = "aprendiz";



$tdataadd_asistentes[".tableType"] = "list";

$tdataadd_asistentes[".printerPageOrientation"] = 0;
$tdataadd_asistentes[".nPrinterPageScale"] = 100;

$tdataadd_asistentes[".nPrinterSplitRecords"] = 40;

$tdataadd_asistentes[".geocodingEnabled"] = false;










$tdataadd_asistentes[".pageSize"] = 20;

$tdataadd_asistentes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataadd_asistentes[".strOrderBy"] = $tstrOrderBy;

$tdataadd_asistentes[".orderindexes"] = array();


$tdataadd_asistentes[".sqlHead"] = "SELECT id_registro,  	nombre_completo,  	edad,  	tipo_doc,  	num_doc,  	correo,  	celular,  	institucion,  	centro,  	tipo,  	tipo_ponencia,  	eje_ponencia,  	desc_ponencia,  	autoriza,  	centros_b,  	programa_b,  	reto_b,  	conocimientos_b,  	disponibilidad_b,  	lectura_b,  	modalidad_p,  	eje_poster,  	otro_eje,  	otro_doc,  	aprendiz";
$tdataadd_asistentes[".sqlFrom"] = "FROM registros";
$tdataadd_asistentes[".sqlWhereExpr"] = "";
$tdataadd_asistentes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadd_asistentes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadd_asistentes[".arrGroupsPerPage"] = $arrGPP;

$tdataadd_asistentes[".highlightSearchResults"] = true;

$tableKeysadd_asistentes = array();
$tableKeysadd_asistentes[] = "id_registro";
$tdataadd_asistentes[".Keys"] = $tableKeysadd_asistentes;


$tdataadd_asistentes[".hideMobileList"] = array();




//	id_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_registro";
	$fdata["GoodName"] = "id_registro";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","id_registro");
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


	$tdataadd_asistentes["id_registro"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "id_registro";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","nombre_completo");
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


	$tdataadd_asistentes["nombre_completo"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "nombre_completo";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","edad");
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


	$tdataadd_asistentes["edad"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "edad";
//	tipo_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipo_doc";
	$fdata["GoodName"] = "tipo_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","tipo_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_doc";

		$fdata["sourceSingle"] = "tipo_doc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_doc";

	
	
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


	$tdataadd_asistentes["tipo_doc"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "tipo_doc";
//	num_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "num_doc";
	$fdata["GoodName"] = "num_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","num_doc");
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


	$tdataadd_asistentes["num_doc"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "num_doc";
//	correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "correo";
	$fdata["GoodName"] = "correo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","correo");
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


	$tdataadd_asistentes["correo"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "correo";
//	celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "celular";
	$fdata["GoodName"] = "celular";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","celular");
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


	$tdataadd_asistentes["celular"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "celular";
//	institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "institucion";
	$fdata["GoodName"] = "institucion";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","institucion");
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


	$tdataadd_asistentes["institucion"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "institucion";
//	centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "centro";
	$fdata["GoodName"] = "centro";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","centro");
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


	$tdataadd_asistentes["centro"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "centro";
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","tipo");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataadd_asistentes["tipo"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "tipo";
//	tipo_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tipo_ponencia";
	$fdata["GoodName"] = "tipo_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","tipo_ponencia");
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


	$tdataadd_asistentes["tipo_ponencia"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "tipo_ponencia";
//	eje_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "eje_ponencia";
	$fdata["GoodName"] = "eje_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","eje_ponencia");
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


	$tdataadd_asistentes["eje_ponencia"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "eje_ponencia";
//	desc_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "desc_ponencia";
	$fdata["GoodName"] = "desc_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","desc_ponencia");
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


	$tdataadd_asistentes["desc_ponencia"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "desc_ponencia";
//	autoriza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "autoriza";
	$fdata["GoodName"] = "autoriza";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","autoriza");
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


	$tdataadd_asistentes["autoriza"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "autoriza";
//	centros_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "centros_b";
	$fdata["GoodName"] = "centros_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","centros_b");
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


	$tdataadd_asistentes["centros_b"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "centros_b";
//	programa_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "programa_b";
	$fdata["GoodName"] = "programa_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","programa_b");
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


	$tdataadd_asistentes["programa_b"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "programa_b";
//	reto_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "reto_b";
	$fdata["GoodName"] = "reto_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","reto_b");
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


	$tdataadd_asistentes["reto_b"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "reto_b";
//	conocimientos_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "conocimientos_b";
	$fdata["GoodName"] = "conocimientos_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","conocimientos_b");
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


	$tdataadd_asistentes["conocimientos_b"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "conocimientos_b";
//	disponibilidad_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "disponibilidad_b";
	$fdata["GoodName"] = "disponibilidad_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","disponibilidad_b");
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


	$tdataadd_asistentes["disponibilidad_b"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "disponibilidad_b";
//	lectura_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "lectura_b";
	$fdata["GoodName"] = "lectura_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","lectura_b");
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


	$tdataadd_asistentes["lectura_b"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "lectura_b";
//	modalidad_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "modalidad_p";
	$fdata["GoodName"] = "modalidad_p";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","modalidad_p");
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


	$tdataadd_asistentes["modalidad_p"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "modalidad_p";
//	eje_poster
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "eje_poster";
	$fdata["GoodName"] = "eje_poster";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","eje_poster");
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


	$tdataadd_asistentes["eje_poster"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "eje_poster";
//	otro_eje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "otro_eje";
	$fdata["GoodName"] = "otro_eje";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","otro_eje");
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


	$tdataadd_asistentes["otro_eje"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "otro_eje";
//	otro_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "otro_doc";
	$fdata["GoodName"] = "otro_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","otro_doc");
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


	$tdataadd_asistentes["otro_doc"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "otro_doc";
//	aprendiz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "aprendiz";
	$fdata["GoodName"] = "aprendiz";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("add_asistentes","aprendiz");
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


	$tdataadd_asistentes["aprendiz"] = $fdata;
		$tdataadd_asistentes[".searchableFields"][] = "aprendiz";


$tables_data["add_asistentes"]=&$tdataadd_asistentes;
$field_labels["add_asistentes"] = &$fieldLabelsadd_asistentes;
$fieldToolTips["add_asistentes"] = &$fieldToolTipsadd_asistentes;
$placeHolders["add_asistentes"] = &$placeHoldersadd_asistentes;
$page_titles["add_asistentes"] = &$pageTitlesadd_asistentes;


changeTextControlsToDate( "add_asistentes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["add_asistentes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["add_asistentes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_add_asistentes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_registro,  	nombre_completo,  	edad,  	tipo_doc,  	num_doc,  	correo,  	celular,  	institucion,  	centro,  	tipo,  	tipo_ponencia,  	eje_ponencia,  	desc_ponencia,  	autoriza,  	centros_b,  	programa_b,  	reto_b,  	conocimientos_b,  	disponibilidad_b,  	lectura_b,  	modalidad_p,  	eje_poster,  	otro_eje,  	otro_doc,  	aprendiz";
$proto0["m_strFrom"] = "FROM registros";
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
	"m_strName" => "id_registro",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto6["m_sql"] = "id_registro";
$proto6["m_srcTableName"] = "add_asistentes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto8["m_sql"] = "nombre_completo";
$proto8["m_srcTableName"] = "add_asistentes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto10["m_sql"] = "edad";
$proto10["m_srcTableName"] = "add_asistentes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto12["m_sql"] = "tipo_doc";
$proto12["m_srcTableName"] = "add_asistentes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "num_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto14["m_sql"] = "num_doc";
$proto14["m_srcTableName"] = "add_asistentes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "correo",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto16["m_sql"] = "correo";
$proto16["m_srcTableName"] = "add_asistentes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "celular",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto18["m_sql"] = "celular";
$proto18["m_srcTableName"] = "add_asistentes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "institucion",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto20["m_sql"] = "institucion";
$proto20["m_srcTableName"] = "add_asistentes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "centro",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto22["m_sql"] = "centro";
$proto22["m_srcTableName"] = "add_asistentes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto24["m_sql"] = "tipo";
$proto24["m_srcTableName"] = "add_asistentes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto26["m_sql"] = "tipo_ponencia";
$proto26["m_srcTableName"] = "add_asistentes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "eje_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto28["m_sql"] = "eje_ponencia";
$proto28["m_srcTableName"] = "add_asistentes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "desc_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto30["m_sql"] = "desc_ponencia";
$proto30["m_srcTableName"] = "add_asistentes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "autoriza",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto32["m_sql"] = "autoriza";
$proto32["m_srcTableName"] = "add_asistentes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "centros_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto34["m_sql"] = "centros_b";
$proto34["m_srcTableName"] = "add_asistentes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "programa_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto36["m_sql"] = "programa_b";
$proto36["m_srcTableName"] = "add_asistentes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "reto_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto38["m_sql"] = "reto_b";
$proto38["m_srcTableName"] = "add_asistentes";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "conocimientos_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto40["m_sql"] = "conocimientos_b";
$proto40["m_srcTableName"] = "add_asistentes";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "disponibilidad_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto42["m_sql"] = "disponibilidad_b";
$proto42["m_srcTableName"] = "add_asistentes";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "lectura_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto44["m_sql"] = "lectura_b";
$proto44["m_srcTableName"] = "add_asistentes";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad_p",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto46["m_sql"] = "modalidad_p";
$proto46["m_srcTableName"] = "add_asistentes";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "eje_poster",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto48["m_sql"] = "eje_poster";
$proto48["m_srcTableName"] = "add_asistentes";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "otro_eje",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto50["m_sql"] = "otro_eje";
$proto50["m_srcTableName"] = "add_asistentes";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "otro_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto52["m_sql"] = "otro_doc";
$proto52["m_srcTableName"] = "add_asistentes";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "aprendiz",
	"m_strTable" => "registros",
	"m_srcTableName" => "add_asistentes"
));

$proto54["m_sql"] = "aprendiz";
$proto54["m_srcTableName"] = "add_asistentes";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "registros";
$proto57["m_srcTableName"] = "add_asistentes";
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
$proto56["m_srcTableName"] = "add_asistentes";
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
$proto0["m_srcTableName"]="add_asistentes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_add_asistentes = createSqlQuery_add_asistentes();


	
		;

																									

$tdataadd_asistentes[".sqlquery"] = $queryData_add_asistentes;



include_once(getabspath("include/add_asistentes_events.php"));
$tdataadd_asistentes[".hasEvents"] = true;

?>