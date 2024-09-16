<?php
require_once(getabspath("classes/cipherer.php"));



$tdataresultados = array();
$tdataresultados[".ShortName"] = "resultados";

$tdataresultados[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdataresultados[".originalPagesByType"] = $tdataresultados[".pagesByType"];
$tdataresultados[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdataresultados[".originalPages"] = $tdataresultados[".pages"];
$tdataresultados[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdataresultados[".originalDefaultPages"] = $tdataresultados[".defaultPages"];


//	field labels
$fieldLabelsresultados = array();
$pageTitlesresultados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresultados["Spanish"] = array();
	$fieldLabelsresultados["Spanish"]["resultado_reto1_idevaluador"] = "Idevaluador";
	$fieldLabelsresultados["Spanish"]["resultado_reto1_idequipo"] = "Idequipo";
	$fieldLabelsresultados["Spanish"]["resultado_reto1_Puntaje_final"] = "Puntaje Final";
	$fieldLabelsresultados["Spanish"]["resultado_reto1_reto"] = "Reto";
	$fieldLabelsresultados["Spanish"]["resultado_reto1_equipo"] = "Equipo";
	$fieldLabelsresultados["Spanish"]["resultado_reto2_idevaluador"] = "Idevaluador";
	$fieldLabelsresultados["Spanish"]["resultado_reto2_idequipo"] = "Idequipo";
	$fieldLabelsresultados["Spanish"]["resultado_reto2_Puntaje_final"] = "Puntaje Final";
	$fieldLabelsresultados["Spanish"]["resultado_reto2_reto"] = "Reto";
	$fieldLabelsresultados["Spanish"]["resultado_reto2_equipo"] = "Equipo";
}

/*
//	search fields
$tdataresultados[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"resultado reto1", "field"=>"idevaluador" );
$tdataresultados[".searchFields"]["resultado_reto1_idevaluador"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto1", "field"=>"idequipo" );
$tdataresultados[".searchFields"]["resultado_reto1_idequipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto1", "field"=>"Puntaje final" );
$tdataresultados[".searchFields"]["resultado_reto1_Puntaje_final"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto1", "field"=>"reto" );
$tdataresultados[".searchFields"]["resultado_reto1_reto"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto1", "field"=>"equipo" );
$tdataresultados[".searchFields"]["resultado_reto1_equipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto2", "field"=>"idevaluador" );
$tdataresultados[".searchFields"]["resultado_reto2_idevaluador"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto2", "field"=>"idequipo" );
$tdataresultados[".searchFields"]["resultado_reto2_idequipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto2", "field"=>"Puntaje final" );
$tdataresultados[".searchFields"]["resultado_reto2_Puntaje_final"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto2", "field"=>"reto" );
$tdataresultados[".searchFields"]["resultado_reto2_reto"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"resultado reto2", "field"=>"equipo" );
$tdataresultados[".searchFields"]["resultado_reto2_equipo"] = $dashField;

// all search fields
$tdataresultados[".allSearchFields"] = array();
$tdataresultados[".allSearchFields"][] = "resultado_reto1_idevaluador";
$tdataresultados[".allSearchFields"][] = "resultado_reto1_idequipo";
$tdataresultados[".allSearchFields"][] = "resultado_reto1_Puntaje_final";
$tdataresultados[".allSearchFields"][] = "resultado_reto1_reto";
$tdataresultados[".allSearchFields"][] = "resultado_reto1_equipo";
$tdataresultados[".allSearchFields"][] = "resultado_reto2_idevaluador";
$tdataresultados[".allSearchFields"][] = "resultado_reto2_idequipo";
$tdataresultados[".allSearchFields"][] = "resultado_reto2_Puntaje_final";
$tdataresultados[".allSearchFields"][] = "resultado_reto2_reto";
$tdataresultados[".allSearchFields"][] = "resultado_reto2_equipo";

// good like search fields
$tdataresultados[".googleLikeFields"] = array();
$tdataresultados[".googleLikeFields"][] = "resultado_reto1_idevaluador";
$tdataresultados[".googleLikeFields"][] = "resultado_reto1_idequipo";
$tdataresultados[".googleLikeFields"][] = "resultado_reto1_Puntaje_final";
$tdataresultados[".googleLikeFields"][] = "resultado_reto1_reto";
$tdataresultados[".googleLikeFields"][] = "resultado_reto1_equipo";
*/

/*
$tdataresultados[".dashElements"] = array();

	$dbelement = array( "elementName" => "resultado_reto1_chart", "table" => "resultado reto1",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdataresultados[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "resultado_reto2_chart", "table" => "resultado reto2",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdataresultados[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "resultado_reto3_chart", "table" => "resultado reto3",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdataresultados[".dashElements"][] = $dbelement;
*/
$tdataresultados[".shortTableName"] = "resultados";
$tdataresultados[".entityType"] = 4;




$tdataresultados[".hasEvents"] = false;


$tdataresultados[".tableType"] = "dashboard";


	
$tdataresultados[".addPageEvents"] = false;

$tdataresultados[".isUseAjaxSuggest"] = true;

$tables_data["Resultados"]=&$tdataresultados;
$field_labels["Resultados"] = &$fieldLabelsresultados;
$page_titles["Resultados"] = &$pageTitlesresultados;

?>