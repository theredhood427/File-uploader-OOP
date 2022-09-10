<?php

include "Filling.php";

$dsn = "mysql:host=localhost;dbname=pdc10_db";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
$result = Filling::handleUpload($_FILES['input_file']);
if ($result == "error"){
	header('Location: index.php?error=' . "error file type");
}
else{
	if ($result !== FALSE) {
		try {
			$register = new Filling($_POST['complete_name'], $_POST['email'], $password = $encrpyted_pass, $result['save_path']);
			$encrpyted_pass = md5($_POST['password']);
			$result = $register->save();
			header('Location: index.php?success=1');
		}
		catch (Exception $e) {
			error_log($e->getMessage());
		}
	} else {

		header('Location: index.php?error=' . $e->getMessage());
	}
}
?>