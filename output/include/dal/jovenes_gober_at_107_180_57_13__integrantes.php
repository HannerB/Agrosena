<?php
$dalTableintegrantes = array();
$dalTableintegrantes["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableintegrantes["idequipo"] = array("type"=>3,"varname"=>"idequipo", "name" => "idequipo", "autoInc" => "0");
$dalTableintegrantes["cedula"] = array("type"=>20,"varname"=>"cedula", "name" => "cedula", "autoInc" => "0");
$dalTableintegrantes["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTableintegrantes["pertenece"] = array("type"=>200,"varname"=>"pertenece", "name" => "pertenece", "autoInc" => "0");
$dalTableintegrantes["id"]["key"]=true;

$dal_info["jovenes_gober_at_107_180_57_13__integrantes"] = &$dalTableintegrantes;
?>