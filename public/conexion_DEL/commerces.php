<?php 
Header('Access-Control-Allow-Origin: *');
include 'funciones.php';

$commerce = $_GET["commerce"];


if($commerce){

	$sql = "select *
				from commerces 
				where id = $commerce";
			
			echo getSQL($sql);

}else{

	$sql = "select *, c.name as name, r.name as region
			from commerces c
			join regions r
			on c.region_id = r.id
			order by votes_positive DESC";
		
		echo getSQL($sql);
}

?>