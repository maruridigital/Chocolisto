<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: text/html; charset=utf-8');

	$tipo = $_REQUEST['tipo'];
	$id_req = $_REQUEST['id'];
	
	$lista = array();
	//Calcio
	array_push($lista,array("id"=>"1","id_catalogo"=>"1","nombre"=>"Leche","porcion"=>"1 taza","gramos"=>"276 mg","color"=>"#8CB44B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Leche.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"2","id_catalogo"=>"1","nombre"=>"Yogurt","porcion"=>"1 taza","gramos"=>"415 mg","color"=>"#8CB44B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Yogurt.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"3","id_catalogo"=>"1","nombre"=>"Queso","porcion"=>"100 gramos","gramos"=>"730 mg","color"=>"#8CB44B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Queso.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"4","id_catalogo"=>"1","nombre"=>"Nueces","porcion"=>"100 gramos","gramos"=>"90 mg","color"=>"#8CB44B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Nueces.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"5","id_catalogo"=>"1","nombre"=>"Sardinas","porcion"=>"100 gramos","gramos"=>"382 mg","color"=>"#8CB44B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Sardinas.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	//Hierro
	array_push($lista,array("id"=>"6","id_catalogo"=>"2","nombre"=>"Cereales","porcion"=>"1 taza","gramos"=>"24 mg","color"=>"#00A6CD","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Cereales.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"7","id_catalogo"=>"2","nombre"=>"Avena","porcion"=>"1 taza","gramos"=>"10 mg","color"=>"#00A6CD","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Avena.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"8","id_catalogo"=>"2","nombre"=>"Lentejas","porcion"=>"1 taza","gramos"=>"6,6 mg","color"=>"#00A6CD","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Lentejas.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"9","id_catalogo"=>"2","nombre"=>"Almendras","porcion"=>"30 gramos","gramos"=>"1,2 mg","color"=>"#00A6CD","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Almendras.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"10","id_catalogo"=>"2","nombre"=>"Pan","porcion"=>"1 rodaja","gramos"=>"0,9 mg","color"=>"#00A6CD","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Pan.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	//Vitamina A
	array_push($lista,array("id"=>"11","id_catalogo"=>"3","nombre"=>"Leche","porcion"=>"1 taza","gramos"=>"276 mg","color"=>"#DB8C2A","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Leche.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"12","id_catalogo"=>"3","nombre"=>"Queso","porcion"=>"100 gramos","gramos"=>"730 mg","color"=>"#DB8C2A","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Queso.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"13","id_catalogo"=>"3","nombre"=>"Huevo","porcion"=>"1 taza","gramos"=>"415 mg","color"=>"#DB8C2A","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Huevos.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"14","id_catalogo"=>"3","nombre"=>"Zanahorias","porcion"=>"100 gramos","gramos"=>"90 mg","color"=>"#DB8C2A","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Zanahoria.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"15","id_catalogo"=>"3","nombre"=>"Durazno","porcion"=>"100 gramos","gramos"=>"382 mg","color"=>"#DB8C2A","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Duraznos.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	//Vitamina B1
	array_push($lista,array("id"=>"16","id_catalogo"=>"4","nombre"=>"Avena","porcion"=>"1 taza","gramos"=>"1,71 mg","color"=>"#BF2025","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Avena.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"17","id_catalogo"=>"4","nombre"=>"Cereales","porcion"=>"1 taza","gramos"=>"1,27 mg","color"=>"#BF2025","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Cereales.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"19","id_catalogo"=>"4","nombre"=>"Leche","porcion"=>"1 taza","gramos"=>"0,41 mg","color"=>"#BF2025","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Leche.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"20","id_catalogo"=>"4","nombre"=>"Nueces","porcion"=>"1 unidad","gramos"=>"100 mg","color"=>"#BF2025","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Queso.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"18","id_catalogo"=>"4","nombre"=>"Naranja","porcion"=>"1 taza","gramos"=>"0,53 mg","color"=>"#BF2025","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Naranjas.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	//Vitamina B2
	array_push($lista,array("id"=>"21","id_catalogo"=>"5","nombre"=>"Cereales","porcion"=>"1 taza","gramos"=>"1,71 mg","color"=>"#D4C62E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Cereales.jpg","color_label"=>"#A11D23","color_value"=>"#ED2429"));
	array_push($lista,array("id"=>"22","id_catalogo"=>"5","nombre"=>"Leche Condensada","porcion"=>"1 taza","gramos"=>"1,27 mg","color"=>"#D4C62E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Leche_condensada.png","color_label"=>"#A11D23","color_value"=>"#ED2429"));
	array_push($lista,array("id"=>"23","id_catalogo"=>"5","nombre"=>"Yogurt","porcion"=>"1 taza","gramos"=>"0,53 mg","color"=>"#D4C62E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Yogurt.png","color_label"=>"#A11D23","color_value"=>"#ED2429"));
	array_push($lista,array("id"=>"24","id_catalogo"=>"5","nombre"=>"Leche","porcion"=>"1 taza","gramos"=>"0,41 mg","color"=>"#D4C62E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Leche.png","color_label"=>"#A11D23","color_value"=>"#ED2429"));
	array_push($lista,array("id"=>"25","id_catalogo"=>"5","nombre"=>"Queso","porcion"=>"1 unidad","gramos"=>"100 mg","color"=>"#D4C62E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Queso.png","color_label"=>"#A11D23","color_value"=>"#ED2429"));
	//Vitamina B3
	array_push($lista,array("id"=>"26","id_catalogo"=>"6","nombre"=>"Cereales","porcion"=>"1 taza","gramos"=>"20,2 mg","color"=>"#A7CC5B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Cereales.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"27","id_catalogo"=>"6","nombre"=>"Avena","porcion"=>"1 taza","gramos"=>"1,87 mg","color"=>"#A7CC5B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Avena.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"28","id_catalogo"=>"6","nombre"=>"Arroz","porcion"=>"1 taza","gramos"=>"2,32 mg","color"=>"#A7CC5B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Arroz.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"29","id_catalogo"=>"6","nombre"=>"Leche Descremada","porcion"=>"1 taza","gramos"=>"0,22 mg","color"=>"#A7CC5B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Leche_descremada.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"30","id_catalogo"=>"6","nombre"=>"Papa al Horno","porcion"=>"1 unidad","gramos"=>"2,17 mg","color"=>"#A7CC5B","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Papa_horno.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	//Vitamina D3
	array_push($lista,array("id"=>"31","id_catalogo"=>"7","nombre"=>"Leche","porcion"=>"1 taza","gramos"=>"0,41 mg","color"=>"#3F205E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Leche.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"32","id_catalogo"=>"7","nombre"=>"Queso","porcion"=>"1 unidad","gramos"=>"100 mg","color"=>"#3F205E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Queso.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"33","id_catalogo"=>"7","nombre"=>"Mantequilla","porcion"=>"1 taza","gramos"=>"1,27 mg","color"=>"#3F205E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Mantequilla.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"34","id_catalogo"=>"7","nombre"=>"Huevo","porcion"=>"1 taza","gramos"=>"415 mg","color"=>"#3F205E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Huevos.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	array_push($lista,array("id"=>"35","id_catalogo"=>"7","nombre"=>"Salmón","porcion"=>"1 taza","gramos"=>"0,53 mg","color"=>"#3F205E","image"=>"http://maruridigitaldev.com/chocolisto/services/media/Salmon.jpg","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	
	array_push($lista,array("id"=>"999","id_catalogo"=>"999","nombre"=>"","porcion"=>"25% del valor diario recomendado","gramos"=>"","color"=>"#00A6CD","image"=>"http://maruridigitaldev.com/chocolisto/services/media/vaso_leche.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
	$result = array();

	function busquedaMultiple($id, $array) {
		$list_new = array();
		foreach ($array as $key => $val) {
			if ($val['id_catalogo'] === $id) {
				array_push($list_new, $array[$key]);
			}
		}
		//Chocolisto
		array_push($list_new,array("id"=>"999","id_catalogo"=>"999","nombre"=>"","porcion"=>"25% del valor diario recomendado","gramos"=>"","color"=>"#00A6CD","image"=>"http://maruridigitaldev.com/chocolisto/services/media/vaso_leche.png","color_label"=>"#ffffff","color_value"=>"#F8EC36"));
		return $list_new;
	}

	function busquedaUnica($id, $array) {
		$list_new = array();
		foreach ($array as $key => $val) {
			if ($val['id'] === $id) {
				array_push($list_new, $array[$key]);
				return $list_new;
			}
		}
	}

	if($tipo==1){
		$result = busquedaMultiple($id_req, $lista);
	}else{
		$result = busquedaUnica($id_req, $lista);
	}

		
	header("Content-Type: application/json",true);
	echo json_encode($result);
?>