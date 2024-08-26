<?php
require_once(getabspath("classes/cipherer.php"));



$tdatainicio = array();
$tdatainicio[".ShortName"] = "inicio";

$tdatainicio[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatainicio[".originalPagesByType"] = $tdatainicio[".pagesByType"];
$tdatainicio[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatainicio[".originalPages"] = $tdatainicio[".pages"];
$tdatainicio[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatainicio[".originalDefaultPages"] = $tdatainicio[".defaultPages"];


//	field labels
$fieldLabelsinicio = array();
$pageTitlesinicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinicio["Spanish"] = array();
	$fieldLabelsinicio["Spanish"]["criterio_id"] = "Id";
	$fieldLabelsinicio["Spanish"]["criterio_idequipo"] = "Idequipo";
	$fieldLabelsinicio["Spanish"]["criterio_criterio1"] = "Criterio1";
	$fieldLabelsinicio["Spanish"]["criterio_criterio2"] = "Criterio2";
	$fieldLabelsinicio["Spanish"]["criterio_criterio3"] = "Criterio3";
	$fieldLabelsinicio["Spanish"]["criterio_criterio4"] = "Criterio4";
	$fieldLabelsinicio["Spanish"]["criterio_criterio5"] = "Criterio5";
	$fieldLabelsinicio["Spanish"]["criterio_criterio6"] = "Criterio6";
	$fieldLabelsinicio["Spanish"]["criterio_criterio7"] = "Criterio7";
	$fieldLabelsinicio["Spanish"]["criterio_criterio8"] = "Criterio8";
	$fieldLabelsinicio["Spanish"]["criterio_criterio9"] = "Criterio9";
	$fieldLabelsinicio["Spanish"]["criterio_criterio10"] = "Criterio10";
	$fieldLabelsinicio["Spanish"]["retos_id"] = "Id";
	$fieldLabelsinicio["Spanish"]["retos_reto"] = "Reto";
	$fieldLabelsinicio["Spanish"]["equipos_id"] = "Id";
	$fieldLabelsinicio["Spanish"]["equipos_equipo"] = "Equipo";
	$fieldLabelsinicio["Spanish"]["equipos_reto"] = "Reto";
}

/*
//	search fields
$tdatainicio[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"id" );
$tdatainicio[".searchFields"]["criterio_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"idequipo" );
$tdatainicio[".searchFields"]["criterio_idequipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio1" );
$tdatainicio[".searchFields"]["criterio_criterio1"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio2" );
$tdatainicio[".searchFields"]["criterio_criterio2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio3" );
$tdatainicio[".searchFields"]["criterio_criterio3"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio4" );
$tdatainicio[".searchFields"]["criterio_criterio4"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio5" );
$tdatainicio[".searchFields"]["criterio_criterio5"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio6" );
$tdatainicio[".searchFields"]["criterio_criterio6"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio7" );
$tdatainicio[".searchFields"]["criterio_criterio7"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio8" );
$tdatainicio[".searchFields"]["criterio_criterio8"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio9" );
$tdatainicio[".searchFields"]["criterio_criterio9"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio10" );
$tdatainicio[".searchFields"]["criterio_criterio10"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"retos", "field"=>"id" );
$tdatainicio[".searchFields"]["retos_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"retos", "field"=>"reto" );
$tdatainicio[".searchFields"]["retos_reto"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"equipos", "field"=>"id" );
$tdatainicio[".searchFields"]["equipos_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"equipos", "field"=>"equipo" );
$tdatainicio[".searchFields"]["equipos_equipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"equipos", "field"=>"reto" );
$tdatainicio[".searchFields"]["equipos_reto"] = $dashField;

// all search fields
$tdatainicio[".allSearchFields"] = array();
$tdatainicio[".allSearchFields"][] = "criterio_id";
$tdatainicio[".allSearchFields"][] = "criterio_idequipo";
$tdatainicio[".allSearchFields"][] = "criterio_criterio1";
$tdatainicio[".allSearchFields"][] = "criterio_criterio2";
$tdatainicio[".allSearchFields"][] = "criterio_criterio3";
$tdatainicio[".allSearchFields"][] = "criterio_criterio4";
$tdatainicio[".allSearchFields"][] = "criterio_criterio5";
$tdatainicio[".allSearchFields"][] = "criterio_criterio6";
$tdatainicio[".allSearchFields"][] = "criterio_criterio7";
$tdatainicio[".allSearchFields"][] = "criterio_criterio8";
$tdatainicio[".allSearchFields"][] = "criterio_criterio9";
$tdatainicio[".allSearchFields"][] = "criterio_criterio10";
$tdatainicio[".allSearchFields"][] = "retos_id";
$tdatainicio[".allSearchFields"][] = "retos_reto";
$tdatainicio[".allSearchFields"][] = "equipos_id";
$tdatainicio[".allSearchFields"][] = "equipos_equipo";
$tdatainicio[".allSearchFields"][] = "equipos_reto";

// good like search fields
$tdatainicio[".googleLikeFields"] = array();
$tdatainicio[".googleLikeFields"][] = "criterio_id";
$tdatainicio[".googleLikeFields"][] = "criterio_idequipo";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio1";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio2";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio3";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio4";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio5";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio6";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio7";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio8";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio9";
$tdatainicio[".googleLikeFields"][] = "criterio_criterio10";
*/

/*
$tdatainicio[".dashElements"] = array();

	$dbelement = array( "elementName" => "criterio_grid", "table" => "criterio",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatainicio[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "retos_grid", "table" => "retos",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatainicio[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "equipos_grid", "table" => "equipos",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatainicio[".dashElements"][] = $dbelement;
*/
$tdatainicio[".shortTableName"] = "inicio";
$tdatainicio[".entityType"] = 4;




$tdatainicio[".hasEvents"] = false;


$tdatainicio[".tableType"] = "dashboard";



$tdatainicio[".addPageEvents"] = false;

$tdatainicio[".isUseAjaxSuggest"] = true;

$tables_data["Inicio"]=&$tdatainicio;
$field_labels["Inicio"] = &$fieldLabelsinicio;
$page_titles["Inicio"] = &$pageTitlesinicio;

?>