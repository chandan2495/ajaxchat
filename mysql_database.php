<?php

// MySQL Class v0.8.1
class MySQL {

var $hostname;	// MySQL Hostname
var $username;	// MySQL Username
var $password;	// MySQL Password
var $database;	// MySQL Database

var $databaseLink;	// Database Connection Link



/* *******************
* Class Constructor *
* *******************/

function __construct($database, $username, $password, $hostname='localhost', $port=3306){
$this->database = $database;
$this->username = $username;
$this->password = $password;
$this->hostname = $hostname.':'.$port;

$this->Connect();
}



/* *******************
* Private Functions *
* *******************/

// Connects class to database
// $persistant (boolean) - Use persistant connection?
private function Connect($persistant = false){
$this->CloseConnection();

if($persistant){
$this->databaseLink = mysql_pconnect($this->hostname, $this->username, $this->password);
}else{
$this->databaseLink = mysql_connect($this->hostname, $this->username, $this->password);
}

if(!$this->databaseLink){
    $this->lastError = 'Could not connect to server: ' . mysql_error($this->databaseLink);
return false;
}

if(!$this->UseDB()){
$this->lastError = 'Could not connect to database: ' . mysql_error($this->databaseLink);
return false;
}
return $this->databaseLink;
}


// Select database to use
private function UseDB(){
if(!mysql_select_db($this->database, $this->databaseLink)){
$this->lastError = 'Cannot select database: ' . mysql_error($this->databaseLink);
return false;
}else{
return true;
}
}

}

?>