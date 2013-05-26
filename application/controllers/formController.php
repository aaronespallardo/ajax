<?php

class formController extends CI_Controller{



function index(){


	$this->load->view('form');


}


function getForm(){

	print_r($_POST);

	foreach ($_POST as $key => $value) {
		echo "insert ".$key;
		echo "\tvalue ".$value;
		echo "<br />";
	}

	echo "<br /><br />";

	$query = "INSERT INTO(";

	foreach($_POST as $key => $value){

		$query .= $key.",";


	}
	$query .= ") VALUES(";

	foreach ($_POST as $key => $value) {
		$query .=  $value.",";
	}

	$query .= ")";

echo $query;




}







}