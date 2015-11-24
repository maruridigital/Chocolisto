<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: text/html; charset=utf-8');

	$lista = array();
	array_push($lista,array("id"=>"1","nombre"=>"Calcio","color"=>"#8CB44B","font_color"=>"#ffffff","porcion"=>"800 mg","font_color_porcion"=>"#F8EC36"));
	array_push($lista,array("id"=>"2","nombre"=>"Hierro","color"=>"#00A6CD","font_color"=>"#ffffff","porcion"=>"14 mg","font_color_porcion"=>"#F8EC36"));
	array_push($lista,array("id"=>"3","nombre"=>"Vitamina A","color"=>"#DB8C2A","font_color"=>"#ffffff","porcion"=>"4000-5000 UI","font_color_porcion"=>"#F8EC36"));
	array_push($lista,array("id"=>"4","nombre"=>"Vitamina B1","color"=>"#BF2025","font_color"=>"#ffffff","porcion"=>"1,2 mg","font_color_porcion"=>"#F8EC36"));
	array_push($lista,array("id"=>"5","nombre"=>"Vitamina B2","color"=>"#D4C62E","font_color"=>"#EE4025","porcion"=>"1,6 mg","font_color_porcion"=>"#EE4025"));
	array_push($lista,array("id"=>"6","nombre"=>"Vitamina B3","color"=>"#A7CC5B","font_color"=>"#4B4B4B","porcion"=>"15 mg","font_color_porcion"=>"#5D5700"));
	array_push($lista,array("id"=>"7","nombre"=>"Vitamina D3","color"=>"#3F205E","font_color"=>"#ffffff","porcion"=>"200 UI","font_color_porcion"=>"#F8EC36"));
	array_push($lista,array("id"=>"8","nombre"=>"Valores diarios nutricionales","color"=>"#C43A24","font_color"=>"#ffffff","porcion"=>" mg","font_color_porcion"=>"#F8EC36"));
		
	header("Content-Type: application/json",true);
	echo json_encode($lista);
?>