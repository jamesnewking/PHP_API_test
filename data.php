<?php
include_once "mysql_connect.php";
define('fromData',true);
//
if(empty($_GET['action']/* check if the get superglobal variable 'action' is empty*/)){
	exit('no action specified');
}
//require the mysql_connect.php file.  Make sure your properly configured it!


$output = [
	'success'=> false, //we assume we will fail
	'errors'=>[]
];

switch($_GET['action']/*do a comparison switch on the get superglobal action*/){
	case 'readAll':
		include_once "./dataApi/read.php";
	    //include the php file 'read.php'
		break;
	case 'insert':
		include_once "./dataApi/insert.php";
	    //include the php file insert.php
		break;
	case 'delete':
		include_once "./dataApi/delete.php";
	    //include the php file delete.php
		break;
	case 'update':
	    include_once "./dataApi/update.php";
		//include the update.php file
		break;
}

//convert the $output variable to json, store the result in $outputJSON
print json_encode($output);
//print $outputJSON

//end
mysqli_close($conn);
?>