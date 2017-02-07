<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zipcodeController extends Controller
{
    public function cargarCatastro(){

    	$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$msg = "";

		//===================File upload LOCAL=======================//
		if(isset($_POST["submit"])) {
			$_FILES["fileToUpload"]["tmp_name"];
		}

		if (file_exists($target_file)) {
		    $msg = "ERROR: el archivo ya existe.";
		    $uploadOk = 0;
		}
		
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    $msg = "ERROR: el archivo es demasiado grande.";
		    $uploadOk = 0;
		}
		
		if($FileType != "csv") {
		    $msg = "ERROR, solo se permiten archivos de tipo CSV.";
		    $uploadOk = 0;
		}
		
		if ($uploadOk == 0) {
		    $msg = "ERROR: el archivo no fue subido.";
		
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        $msg = "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " ha sido subido.";
		        rename("uploads/".$_FILES["fileToUpload"]["name"], "uploads/data.csv");
		    } else {
		        $msg = "ERROR: ha habido un error subiendo el archivo.";
		    }
		}
		//$this->leerCatastro();
		return $msg;
    }
}
