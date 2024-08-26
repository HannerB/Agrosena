<?php
require_once(getabspath("classes/cipherer.php"));



$tdataevaluaci_n = array();
$tdataevaluaci_n[".ShortName"] = "evaluaci_n";

$tdataevaluaci_n[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdataevaluaci_n[".originalPagesByType"] = $tdataevaluaci_n[".pagesByType"];
$tdataevaluaci_n[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdataevaluaci_n[".originalPages"] = $tdataevaluaci_n[".pages"];
$tdataevaluaci_n[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdataevaluaci_n[".originalDefaultPages"] = $tdataevaluaci_n[".defaultPages"];


//	field labels
$fieldLabelsevaluaci_n = array();
$pageTitlesevaluaci_n = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsevaluaci_n["Spanish"] = array();
	$fieldLabelsevaluaci_n["Spanish"]["equipos_equipo"] = "Equipo";
	$fieldLabelsevaluaci_n["Spanish"]["equipos_reto"] = "Detalle";
	$fieldLabelsevaluaci_n["Spanish"]["equipos_id"] = "Reto";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_id"] = "Id";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio1"] = "¿La solución aborda directamente los requisitos del reto planteado? ";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio2"] = "¿La solución propuesta es innovadora y creativa?";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio3"] = "¿Qué tan avanzado está el prototipo/solución en términos de desarrollo? ";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio4"] = "¿Se ha realizado un análisis detallado de la viabilidad técnica y económica de la solución?";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio5"] = "¿Se ha estimado correctamente el costo asociado con la implementación de la solución propuesta?";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio6"] = "¿El diseño de la solución es adecuado y está bien elaborado? ";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio7"] = "¿Cuál es el potencial impacto de esta solución en el reto planteado y en el contexto general? ";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio8"] = "Criterio8";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio9"] = "Criterio9";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_criterio10"] = "Criterio10";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_equipo"] = "Equipo";
	$fieldLabelsevaluaci_n["Spanish"]["criterio_nombreevaluador"] = "Nombreevaluador";
}

/*
//	search fields
$tdataevaluaci_n[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"equipos", "field"=>"equipo" );
$tdataevaluaci_n[".searchFields"]["equipos_equipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"equipos", "field"=>"reto" );
$tdataevaluaci_n[".searchFields"]["equipos_reto"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"equipos", "field"=>"id" );
$tdataevaluaci_n[".searchFields"]["equipos_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"id" );
$tdataevaluaci_n[".searchFields"]["criterio_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio1" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio1"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio2" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio3" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio3"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio4" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio4"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio5" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio5"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio6" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio6"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio7" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio7"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio8" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio8"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio9" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio9"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"criterio10" );
$tdataevaluaci_n[".searchFields"]["criterio_criterio10"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"equipo" );
$tdataevaluaci_n[".searchFields"]["criterio_equipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"criterio", "field"=>"nombreevaluador" );
$tdataevaluaci_n[".searchFields"]["criterio_nombreevaluador"] = $dashField;

// all search fields
$tdataevaluaci_n[".allSearchFields"] = array();
$tdataevaluaci_n[".allSearchFields"][] = "equipos_equipo";
$tdataevaluaci_n[".allSearchFields"][] = "equipos_reto";
$tdataevaluaci_n[".allSearchFields"][] = "equipos_id";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_id";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio1";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio2";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio3";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio4";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio5";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio6";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio7";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio8";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio9";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_criterio10";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_equipo";
$tdataevaluaci_n[".allSearchFields"][] = "criterio_nombreevaluador";

// good like search fields
$tdataevaluaci_n[".googleLikeFields"] = array();
$tdataevaluaci_n[".googleLikeFields"][] = "equipos_equipo";
$tdataevaluaci_n[".googleLikeFields"][] = "equipos_reto";
$tdataevaluaci_n[".googleLikeFields"][] = "equipos_id";
*/

/*
$tdataevaluaci_n[".dashElements"] = array();

	$dbelement = array( "elementName" => "equipos_grid", "table" => "equipos",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdataevaluaci_n[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "criterio_grid", "table" => "criterio",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdataevaluaci_n[".dashElements"][] = $dbelement;
*/
$tdataevaluaci_n[".shortTableName"] = "evaluaci_n";
$tdataevaluaci_n[".entityType"] = 4;




$tdataevaluaci_n[".hasEvents"] = false;


$tdataevaluaci_n[".tableType"] = "dashboard";



$tdataevaluaci_n[".addPageEvents"] = false;

$tdataevaluaci_n[".isUseAjaxSuggest"] = true;

$tables_data["evaluación"]=&$tdataevaluaci_n;
$field_labels["evaluaci_n"] = &$fieldLabelsevaluaci_n;
$page_titles["evaluaci_n"] = &$pageTitlesevaluaci_n;

?>