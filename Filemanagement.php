<?php
// use a class to manage oop db connection
require_once ('MysqliDb.php');
require_once('FileManagement.class');
// to handle oop forms

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'upform') {
 
	$FileManagement = new FileManagement;
  	$FileManagement->getUpload();
  
}

if(isset($_POST['submit_download'])){
	if(!empty($_POST['checkbox'])){
// Loop to store and display values of individual checked checkbox.
	$filenames = array();
	foreach($_POST['checkbox'] as $selected){
		array_push($filenames, $selected);
	}

		$FileManagement = new FileManagement;
		$FileManagement->getZip($filenames);
	}
			echo'Checkbox not selected code';
}

echo '<!DOCTYPE html>'
	.'<html>'
	.'<head>'
	.'<title>File Management Upload And Downoad </title>'
  	.'<title>Creating an HTML Element</title>'
  	.'<link href="style.css" rel="stylesheet" type="text/css" /></style>';



$FileManagement = new FileManagement;
$FileManagement->getForms();

	
?>

</HTML>
