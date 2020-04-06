<?php 
function getAllUser($filePath){
	return getData($filePath);
};

function store($data,$filePath){

	$dataArr = getData($filePath);


	array_push($dataArr,$data);
	// var_dump($dataArr);
	// die();
	$dataNewJson = json_encode($dataArr);
	file_put_contents($filePath,$dataNewJson);
};

function update($data,$filePath){
	$dataArr = getData($filePath);
	array_push($dataArr,$data);
	// var_dump($dataArr);
	// die();
	$dataNewJson = json_encode($dataArr);
	file_put_contents($filePath,$dataNewJson);
};

function getData($filePath){
	$dataJson = file_get_contents($filePath);
	return json_decode($dataJson);
};

function deleteStudent($index,$filePath){
	$dataArr = getData($filePath);
	unset($dataArr[$index]);
	// echo "<pre>";
	// print_r($dataArr);
	// echo "</pre>";
	
	$dataNewJson = json_encode($dataArr);
	// var_dump($dataNewJson);
	// die();
	file_put_contents($filePath,$dataNewJson);

};

function getStudentByIndex($index,$filePath){
	$dataArr = getData($filePath);
	// var_dump($dataArr);
	// die();
	return $dataArr[$index];
};


















 ?>