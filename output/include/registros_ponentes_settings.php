<?php
$tdataregistros_ponentes = array();
$tdataregistros_ponentes[".searchableFields"] = array();
$tdataregistros_ponentes[".ShortName"] = "registros_ponentes";
$tdataregistros_ponentes[".OwnerID"] = "";
$tdataregistros_ponentes[".OriginalTable"] = "registros";


$tdataregistros_ponentes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataregistros_ponentes[".originalPagesByType"] = $tdataregistros_ponentes[".pagesByType"];
$tdataregistros_ponentes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataregistros_ponentes[".originalPages"] = $tdataregistros_ponentes[".pages"];
$tdataregistros_ponentes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataregistros_ponentes[".originalDefaultPages"] = $tdataregistros_ponentes[".defaultPages"];

//	field labels
$fieldLabelsregistros_ponentes = array();
$fieldToolTipsregistros_ponentes = array();
$pageTitlesregistros_ponentes = array();
$placeHoldersregistros_ponentes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsregistros_ponentes["Spanish"] = array();
	$fieldToolTipsregistros_ponentes["Spanish"] = array();
	$placeHoldersregistros_ponentes["Spanish"] = array();
	$pageTitlesregistros_ponentes["Spanish"] = array();
	$fieldLabelsregistros_ponentes["Spanish"]["id_registro"] = "No.";
	$fieldToolTipsregistros_ponentes["Spanish"]["id_registro"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["id_registro"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipsregistros_ponentes["Spanish"]["nombre_completo"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["nombre_completo"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["edad"] = "Edad";
	$fieldToolTipsregistros_ponentes["Spanish"]["edad"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["edad"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["tipo_doc"] = "Identificado";
	$fieldToolTipsregistros_ponentes["Spanish"]["tipo_doc"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["tipo_doc"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["num_doc"] = "Numero de Documento";
	$fieldToolTipsregistros_ponentes["Spanish"]["num_doc"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["num_doc"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["correo"] = "Correo";
	$fieldToolTipsregistros_ponentes["Spanish"]["correo"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["correo"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["celular"] = "Celular";
	$fieldToolTipsregistros_ponentes["Spanish"]["celular"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["celular"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["institucion"] = "Institución de Formacion a la que pertenece";
	$fieldToolTipsregistros_ponentes["Spanish"]["institucion"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["institucion"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["centro"] = "Centro de Formación de la Regional Atlántico Sena al que pertenece";
	$fieldToolTipsregistros_ponentes["Spanish"]["centro"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["centro"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["tipo"] = "Tipo de Registro";
	$fieldToolTipsregistros_ponentes["Spanish"]["tipo"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["tipo"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["tipo_ponencia"] = "Tipo de Ponencia";
	$fieldToolTipsregistros_ponentes["Spanish"]["tipo_ponencia"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["tipo_ponencia"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["eje_ponencia"] = "Eje Temático de la ponencia";
	$fieldToolTipsregistros_ponentes["Spanish"]["eje_ponencia"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["eje_ponencia"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["desc_ponencia"] = "Breve descripción de la ponencia";
	$fieldToolTipsregistros_ponentes["Spanish"]["desc_ponencia"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["desc_ponencia"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["autoriza"] = "Autorización para el uso de datos personales de acuerdo con la ley 1581 de 2012.";
	$fieldToolTipsregistros_ponentes["Spanish"]["autoriza"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["autoriza"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["centros_b"] = "Centro al que pertenece";
	$fieldToolTipsregistros_ponentes["Spanish"]["centros_b"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["centros_b"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["programa_b"] = "Programa de Formación al que pertenece";
	$fieldToolTipsregistros_ponentes["Spanish"]["programa_b"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["programa_b"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["reto_b"] = "Reto al que se inscribe";
	$fieldToolTipsregistros_ponentes["Spanish"]["reto_b"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["reto_b"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["conocimientos_b"] = "Breve descripción de conocimientos y habilidades técnicas relevantes (programación, diseño, lenguajes de programación, software, mercadeo, ventas etc)";
	$fieldToolTipsregistros_ponentes["Spanish"]["conocimientos_b"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["conocimientos_b"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["disponibilidad_b"] = "¿Cuenta con la disponibilidad de participar en el bootcamp, hasta completar la fase final de evaluación y premiación?";
	$fieldToolTipsregistros_ponentes["Spanish"]["disponibilidad_b"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["disponibilidad_b"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["lectura_b"] = "Confirmación de lectura y aceptación de los términos y condiciones del Bootcamp";
	$fieldToolTipsregistros_ponentes["Spanish"]["lectura_b"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["lectura_b"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["modalidad_p"] = "Breve descripción del proyecto presentado en modalidad Poster";
	$fieldToolTipsregistros_ponentes["Spanish"]["modalidad_p"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["modalidad_p"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["eje_poster"] = "Eje temático del Proyecto presentado en modalidad poster";
	$fieldToolTipsregistros_ponentes["Spanish"]["eje_poster"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["eje_poster"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["otro_eje"] = "Otro";
	$fieldToolTipsregistros_ponentes["Spanish"]["otro_eje"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["otro_eje"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["otro_doc"] = "Otro";
	$fieldToolTipsregistros_ponentes["Spanish"]["otro_doc"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["otro_doc"] = "";
	$fieldLabelsregistros_ponentes["Spanish"]["aprendiz"] = "¿Es Aprendiz Sena?";
	$fieldToolTipsregistros_ponentes["Spanish"]["aprendiz"] = "";
	$placeHoldersregistros_ponentes["Spanish"]["aprendiz"] = "";
	if (count($fieldToolTipsregistros_ponentes["Spanish"]))
		$tdataregistros_ponentes[".isUseToolTips"] = true;
}


	$tdataregistros_ponentes[".NCSearch"] = true;



$tdataregistros_ponentes[".shortTableName"] = "registros_ponentes";
$tdataregistros_ponentes[".nSecOptions"] = 0;

$tdataregistros_ponentes[".mainTableOwnerID"] = "";
$tdataregistros_ponentes[".entityType"] = 1;
$tdataregistros_ponentes[".connId"] = "jovenes_gober_at_107_180_57_13";


$tdataregistros_ponentes[".strOriginalTableName"] = "registros";

	



$tdataregistros_ponentes[".showAddInPopup"] = false;

$tdataregistros_ponentes[".showEditInPopup"] = false;

$tdataregistros_ponentes[".showViewInPopup"] = false;

$tdataregistros_ponentes[".listAjax"] = false;
//	temporary
//$tdataregistros_ponentes[".listAjax"] = false;

	$tdataregistros_ponentes[".audit"] = false;

	$tdataregistros_ponentes[".locking"] = false;


$pages = $tdataregistros_ponentes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataregistros_ponentes[".edit"] = true;
	$tdataregistros_ponentes[".afterEditAction"] = 0;
	$tdataregistros_ponentes[".closePopupAfterEdit"] = 1;
	$tdataregistros_ponentes[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataregistros_ponentes[".add"] = true;
$tdataregistros_ponentes[".afterAddAction"] = 1;
$tdataregistros_ponentes[".closePopupAfterAdd"] = 1;
$tdataregistros_ponentes[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataregistros_ponentes[".list"] = true;
}



$tdataregistros_ponentes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataregistros_ponentes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataregistros_ponentes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataregistros_ponentes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataregistros_ponentes[".printFriendly"] = true;
}



$tdataregistros_ponentes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataregistros_ponentes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataregistros_ponentes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataregistros_ponentes[".isUseAjaxSuggest"] = true;



			

$tdataregistros_ponentes[".ajaxCodeSnippetAdded"] = false;

$tdataregistros_ponentes[".buttonsAdded"] = false;

$tdataregistros_ponentes[".addPageEvents"] = true;

// use timepicker for search panel
$tdataregistros_ponentes[".isUseTimeForSearch"] = false;


$tdataregistros_ponentes[".badgeColor"] = "DC143C";


$tdataregistros_ponentes[".allSearchFields"] = array();
$tdataregistros_ponentes[".filterFields"] = array();
$tdataregistros_ponentes[".requiredSearchFields"] = array();

$tdataregistros_ponentes[".googleLikeFields"] = array();
$tdataregistros_ponentes[".googleLikeFields"][] = "id_registro";
$tdataregistros_ponentes[".googleLikeFields"][] = "nombre_completo";
$tdataregistros_ponentes[".googleLikeFields"][] = "edad";
$tdataregistros_ponentes[".googleLikeFields"][] = "tipo_doc";
$tdataregistros_ponentes[".googleLikeFields"][] = "num_doc";
$tdataregistros_ponentes[".googleLikeFields"][] = "correo";
$tdataregistros_ponentes[".googleLikeFields"][] = "celular";
$tdataregistros_ponentes[".googleLikeFields"][] = "institucion";
$tdataregistros_ponentes[".googleLikeFields"][] = "centro";
$tdataregistros_ponentes[".googleLikeFields"][] = "tipo";
$tdataregistros_ponentes[".googleLikeFields"][] = "tipo_ponencia";
$tdataregistros_ponentes[".googleLikeFields"][] = "eje_ponencia";
$tdataregistros_ponentes[".googleLikeFields"][] = "desc_ponencia";
$tdataregistros_ponentes[".googleLikeFields"][] = "autoriza";
$tdataregistros_ponentes[".googleLikeFields"][] = "centros_b";
$tdataregistros_ponentes[".googleLikeFields"][] = "programa_b";
$tdataregistros_ponentes[".googleLikeFields"][] = "reto_b";
$tdataregistros_ponentes[".googleLikeFields"][] = "conocimientos_b";
$tdataregistros_ponentes[".googleLikeFields"][] = "disponibilidad_b";
$tdataregistros_ponentes[".googleLikeFields"][] = "lectura_b";
$tdataregistros_ponentes[".googleLikeFields"][] = "modalidad_p";
$tdataregistros_ponentes[".googleLikeFields"][] = "eje_poster";
$tdataregistros_ponentes[".googleLikeFields"][] = "otro_eje";
$tdataregistros_ponentes[".googleLikeFields"][] = "otro_doc";
$tdataregistros_ponentes[".googleLikeFields"][] = "aprendiz";



$tdataregistros_ponentes[".tableType"] = "list";

$tdataregistros_ponentes[".printerPageOrientation"] = 0;
$tdataregistros_ponentes[".nPrinterPageScale"] = 100;

$tdataregistros_ponentes[".nPrinterSplitRecords"] = 40;

$tdataregistros_ponentes[".geocodingEnabled"] = false;










$tdataregistros_ponentes[".pageSize"] = 20;

$tdataregistros_ponentes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataregistros_ponentes[".strOrderBy"] = $tstrOrderBy;

$tdataregistros_ponentes[".orderindexes"] = array();


$tdataregistros_ponentes[".sqlHead"] = "SELECT id_registro,  	nombre_completo,  	edad,  	tipo_doc,  	num_doc,  	correo,  	celular,  	institucion,  	centro,  	tipo,  	tipo_ponencia,  	eje_ponencia,  	desc_ponencia,  	autoriza,  	centros_b,  	programa_b,  	reto_b,  	conocimientos_b,  	disponibilidad_b,  	lectura_b,  	modalidad_p,  	eje_poster,  	otro_eje,  	otro_doc,  	aprendiz";
$tdataregistros_ponentes[".sqlFrom"] = "FROM registros";
$tdataregistros_ponentes[".sqlWhereExpr"] = "(registros.tipo = \"Ponencia\")";
$tdataregistros_ponentes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataregistros_ponentes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataregistros_ponentes[".arrGroupsPerPage"] = $arrGPP;

$tdataregistros_ponentes[".highlightSearchResults"] = true;

$tableKeysregistros_ponentes = array();
$tableKeysregistros_ponentes[] = "id_registro";
$tdataregistros_ponentes[".Keys"] = $tableKeysregistros_ponentes;


$tdataregistros_ponentes[".hideMobileList"] = array();




//	id_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_registro";
	$fdata["GoodName"] = "id_registro";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","id_registro");
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


	$tdataregistros_ponentes["id_registro"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "id_registro";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","nombre_completo");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistros_ponentes["nombre_completo"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "nombre_completo";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","edad");
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


	$tdataregistros_ponentes["edad"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "edad";
//	tipo_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipo_doc";
	$fdata["GoodName"] = "tipo_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","tipo_doc");
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


	$tdataregistros_ponentes["tipo_doc"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "tipo_doc";
//	num_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "num_doc";
	$fdata["GoodName"] = "num_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","num_doc");
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


	$tdataregistros_ponentes["num_doc"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "num_doc";
//	correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "correo";
	$fdata["GoodName"] = "correo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","correo");
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


	$tdataregistros_ponentes["correo"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "correo";
//	celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "celular";
	$fdata["GoodName"] = "celular";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","celular");
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


	$tdataregistros_ponentes["celular"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "celular";
//	institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "institucion";
	$fdata["GoodName"] = "institucion";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","institucion");
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


	$tdataregistros_ponentes["institucion"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "institucion";
//	centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "centro";
	$fdata["GoodName"] = "centro";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","centro");
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


	$tdataregistros_ponentes["centro"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "centro";
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","tipo");
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


	$tdataregistros_ponentes["tipo"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "tipo";
//	tipo_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tipo_ponencia";
	$fdata["GoodName"] = "tipo_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","tipo_ponencia");
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


	$tdataregistros_ponentes["tipo_ponencia"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "tipo_ponencia";
//	eje_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "eje_ponencia";
	$fdata["GoodName"] = "eje_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","eje_ponencia");
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


	$tdataregistros_ponentes["eje_ponencia"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "eje_ponencia";
//	desc_ponencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "desc_ponencia";
	$fdata["GoodName"] = "desc_ponencia";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","desc_ponencia");
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


	$tdataregistros_ponentes["desc_ponencia"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "desc_ponencia";
//	autoriza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "autoriza";
	$fdata["GoodName"] = "autoriza";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","autoriza");
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


	$tdataregistros_ponentes["autoriza"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "autoriza";
//	centros_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "centros_b";
	$fdata["GoodName"] = "centros_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","centros_b");
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


	$tdataregistros_ponentes["centros_b"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "centros_b";
//	programa_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "programa_b";
	$fdata["GoodName"] = "programa_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","programa_b");
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


	$tdataregistros_ponentes["programa_b"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "programa_b";
//	reto_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "reto_b";
	$fdata["GoodName"] = "reto_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","reto_b");
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


	$tdataregistros_ponentes["reto_b"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "reto_b";
//	conocimientos_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "conocimientos_b";
	$fdata["GoodName"] = "conocimientos_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","conocimientos_b");
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


	$tdataregistros_ponentes["conocimientos_b"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "conocimientos_b";
//	disponibilidad_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "disponibilidad_b";
	$fdata["GoodName"] = "disponibilidad_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","disponibilidad_b");
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


	$tdataregistros_ponentes["disponibilidad_b"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "disponibilidad_b";
//	lectura_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "lectura_b";
	$fdata["GoodName"] = "lectura_b";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","lectura_b");
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


	$tdataregistros_ponentes["lectura_b"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "lectura_b";
//	modalidad_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "modalidad_p";
	$fdata["GoodName"] = "modalidad_p";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","modalidad_p");
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


	$tdataregistros_ponentes["modalidad_p"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "modalidad_p";
//	eje_poster
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "eje_poster";
	$fdata["GoodName"] = "eje_poster";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","eje_poster");
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


	$tdataregistros_ponentes["eje_poster"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "eje_poster";
//	otro_eje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "otro_eje";
	$fdata["GoodName"] = "otro_eje";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","otro_eje");
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


	$tdataregistros_ponentes["otro_eje"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "otro_eje";
//	otro_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "otro_doc";
	$fdata["GoodName"] = "otro_doc";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","otro_doc");
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


	$tdataregistros_ponentes["otro_doc"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "otro_doc";
//	aprendiz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "aprendiz";
	$fdata["GoodName"] = "aprendiz";
	$fdata["ownerTable"] = "registros";
	$fdata["Label"] = GetFieldLabel("registros_ponentes","aprendiz");
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


	$tdataregistros_ponentes["aprendiz"] = $fdata;
		$tdataregistros_ponentes[".searchableFields"][] = "aprendiz";


$tables_data["registros_ponentes"]=&$tdataregistros_ponentes;
$field_labels["registros_ponentes"] = &$fieldLabelsregistros_ponentes;
$fieldToolTips["registros_ponentes"] = &$fieldToolTipsregistros_ponentes;
$placeHolders["registros_ponentes"] = &$placeHoldersregistros_ponentes;
$page_titles["registros_ponentes"] = &$pageTitlesregistros_ponentes;


changeTextControlsToDate( "registros_ponentes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["registros_ponentes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["registros_ponentes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_registros_ponentes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_registro,  	nombre_completo,  	edad,  	tipo_doc,  	num_doc,  	correo,  	celular,  	institucion,  	centro,  	tipo,  	tipo_ponencia,  	eje_ponencia,  	desc_ponencia,  	autoriza,  	centros_b,  	programa_b,  	reto_b,  	conocimientos_b,  	disponibilidad_b,  	lectura_b,  	modalidad_p,  	eje_poster,  	otro_eje,  	otro_doc,  	aprendiz";
$proto0["m_strFrom"] = "FROM registros";
$proto0["m_strWhere"] = "(registros.tipo = \"Ponencia\")";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "registros.tipo = \"Ponencia\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= \"Ponencia\"";
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
	"m_srcTableName" => "registros_ponentes"
));

$proto6["m_sql"] = "id_registro";
$proto6["m_srcTableName"] = "registros_ponentes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto8["m_sql"] = "nombre_completo";
$proto8["m_srcTableName"] = "registros_ponentes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto10["m_sql"] = "edad";
$proto10["m_srcTableName"] = "registros_ponentes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto12["m_sql"] = "tipo_doc";
$proto12["m_srcTableName"] = "registros_ponentes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "num_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto14["m_sql"] = "num_doc";
$proto14["m_srcTableName"] = "registros_ponentes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "correo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto16["m_sql"] = "correo";
$proto16["m_srcTableName"] = "registros_ponentes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "celular",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto18["m_sql"] = "celular";
$proto18["m_srcTableName"] = "registros_ponentes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "institucion",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto20["m_sql"] = "institucion";
$proto20["m_srcTableName"] = "registros_ponentes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "centro",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto22["m_sql"] = "centro";
$proto22["m_srcTableName"] = "registros_ponentes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto24["m_sql"] = "tipo";
$proto24["m_srcTableName"] = "registros_ponentes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto26["m_sql"] = "tipo_ponencia";
$proto26["m_srcTableName"] = "registros_ponentes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "eje_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto28["m_sql"] = "eje_ponencia";
$proto28["m_srcTableName"] = "registros_ponentes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "desc_ponencia",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto30["m_sql"] = "desc_ponencia";
$proto30["m_srcTableName"] = "registros_ponentes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "autoriza",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto32["m_sql"] = "autoriza";
$proto32["m_srcTableName"] = "registros_ponentes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "centros_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto34["m_sql"] = "centros_b";
$proto34["m_srcTableName"] = "registros_ponentes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "programa_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto36["m_sql"] = "programa_b";
$proto36["m_srcTableName"] = "registros_ponentes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "reto_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto38["m_sql"] = "reto_b";
$proto38["m_srcTableName"] = "registros_ponentes";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "conocimientos_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto40["m_sql"] = "conocimientos_b";
$proto40["m_srcTableName"] = "registros_ponentes";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "disponibilidad_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto42["m_sql"] = "disponibilidad_b";
$proto42["m_srcTableName"] = "registros_ponentes";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "lectura_b",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto44["m_sql"] = "lectura_b";
$proto44["m_srcTableName"] = "registros_ponentes";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad_p",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto46["m_sql"] = "modalidad_p";
$proto46["m_srcTableName"] = "registros_ponentes";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "eje_poster",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto48["m_sql"] = "eje_poster";
$proto48["m_srcTableName"] = "registros_ponentes";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "otro_eje",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto50["m_sql"] = "otro_eje";
$proto50["m_srcTableName"] = "registros_ponentes";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "otro_doc",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto52["m_sql"] = "otro_doc";
$proto52["m_srcTableName"] = "registros_ponentes";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "aprendiz",
	"m_strTable" => "registros",
	"m_srcTableName" => "registros_ponentes"
));

$proto54["m_sql"] = "aprendiz";
$proto54["m_srcTableName"] = "registros_ponentes";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "registros";
$proto57["m_srcTableName"] = "registros_ponentes";
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
$proto56["m_srcTableName"] = "registros_ponentes";
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
$proto0["m_srcTableName"]="registros_ponentes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_registros_ponentes = createSqlQuery_registros_ponentes();


	
		;

																									

$tdataregistros_ponentes[".sqlquery"] = $queryData_registros_ponentes;



include_once(getabspath("include/registros_ponentes_events.php"));
$tdataregistros_ponentes[".hasEvents"] = true;

?>