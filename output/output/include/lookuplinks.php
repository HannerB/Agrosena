<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio1"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio1"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio1"]["edit"] = array("table" => "criterio", "field" => "criterio1", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio2"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio2"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio2"]["edit"] = array("table" => "criterio", "field" => "criterio2", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio3"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio3"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio3"]["edit"] = array("table" => "criterio", "field" => "criterio3", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio4"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio4"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio4"]["edit"] = array("table" => "criterio", "field" => "criterio4", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio5"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio5"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio5"]["edit"] = array("table" => "criterio", "field" => "criterio5", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio6"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio6"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio6"]["edit"] = array("table" => "criterio", "field" => "criterio6", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio7"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio7"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio7"]["edit"] = array("table" => "criterio", "field" => "criterio7", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio8"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio8"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio8"]["edit"] = array("table" => "criterio", "field" => "criterio8", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio9"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio9"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio9"]["edit"] = array("table" => "criterio", "field" => "criterio9", "page" => "edit");
		if( !isset( $lookupTableLinks["calificacion"] ) ) {
			$lookupTableLinks["calificacion"] = array();
		}
		if( !isset( $lookupTableLinks["calificacion"]["criterio.criterio10"] )) {
			$lookupTableLinks["calificacion"]["criterio.criterio10"] = array();
		}
		$lookupTableLinks["calificacion"]["criterio.criterio10"]["edit"] = array("table" => "criterio", "field" => "criterio10", "page" => "edit");
		if( !isset( $lookupTableLinks["retos"] ) ) {
			$lookupTableLinks["retos"] = array();
		}
		if( !isset( $lookupTableLinks["retos"]["equipos.reto"] )) {
			$lookupTableLinks["retos"]["equipos.reto"] = array();
		}
		$lookupTableLinks["retos"]["equipos.reto"]["edit"] = array("table" => "equipos", "field" => "reto", "page" => "edit");
		if( !isset( $lookupTableLinks["registros"] ) ) {
			$lookupTableLinks["registros"] = array();
		}
		if( !isset( $lookupTableLinks["registros"]["equipos.id_registro"] )) {
			$lookupTableLinks["registros"]["equipos.id_registro"] = array();
		}
		$lookupTableLinks["registros"]["equipos.id_registro"]["edit"] = array("table" => "equipos", "field" => "id_registro", "page" => "edit");
		if( !isset( $lookupTableLinks["registros_vista"] ) ) {
			$lookupTableLinks["registros_vista"] = array();
		}
		if( !isset( $lookupTableLinks["registros_vista"]["integrantes.nombre"] )) {
			$lookupTableLinks["registros_vista"]["integrantes.nombre"] = array();
		}
		$lookupTableLinks["registros_vista"]["integrantes.nombre"]["edit"] = array("table" => "integrantes", "field" => "nombre", "page" => "edit");
		if( !isset( $lookupTableLinks["evaluador"] ) ) {
			$lookupTableLinks["evaluador"] = array();
		}
		if( !isset( $lookupTableLinks["evaluador"]["resultado_grupos.idevaluador"] )) {
			$lookupTableLinks["evaluador"]["resultado_grupos.idevaluador"] = array();
		}
		$lookupTableLinks["evaluador"]["resultado_grupos.idevaluador"]["edit"] = array("table" => "resultado_grupos", "field" => "idevaluador", "page" => "edit");
}

?>