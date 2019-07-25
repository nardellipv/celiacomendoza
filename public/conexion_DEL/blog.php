<?php 
Header('Access-Control-Allow-Origin: *');
include 'funciones.php';

$id = $_GET["id"];


if($id){

		$blog = "select *
			from blogs 
			where id=$id";
		
		echo getSQL(trim($blog));

}else{

		$blog = "select *
			from blogs 
			order by created_at DESC";
		
		echo getSQL($blog);

}

?>