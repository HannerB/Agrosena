<?php
$dalTableusuario = array();
$dalTableusuario["id_usuario"] = array("type"=>3,"varname"=>"id_usuario", "name" => "id_usuario", "autoInc" => "1");
$dalTableusuario["id_rol"] = array("type"=>3,"varname"=>"id_rol", "name" => "id_rol", "autoInc" => "0");
$dalTableusuario["rol"] = array("type"=>129,"varname"=>"rol", "name" => "rol", "autoInc" => "0");
$dalTableusuario["contraseña"] = array("type"=>200,"varname"=>"contrase_a", "name" => "contraseña", "autoInc" => "0");
$dalTableusuario["idevaluador"] = array("type"=>3,"varname"=>"idevaluador", "name" => "idevaluador", "autoInc" => "0");
$dalTableusuario["nomusuario"] = array("type"=>200,"varname"=>"nomusuario", "name" => "nomusuario", "autoInc" => "0");
$dalTableusuario["id_usuario"]["key"]=true;

$dal_info["jovenes_gober_at_107_180_57_13__usuario"] = &$dalTableusuario;
?>