<?php
session_start();
include_once 'db.inc.php';
class DB {
protected $user;
protected $pass;
protected $dbhost;
protected $dbname;
protected $dbh;

// Database connection handle
public function __construct() {
$this->user = MYSQL_USER;
$this->pass = MYSQL_PASSWORD;
$this->dbhost = MYSQL_HOST;
$this->dbname = MYSQL_DB;
}
public function __destruct() {
if($this->dbh){
$this->dbh->close();
}
}
protected function connect() {
$this->dbh = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB) OR DIE('Unable to connect. Check your connection Parameters.');
$this->dbh->set_charset('utf8');
}

//function to create user
public function create_user() {
if(!$this->dbh){
$this->connect();
}
$username=mt_rand();
$password=mt_rand(10000,99999);
$sql = "INSERT INTO users (user_name,user_password) VALUES ($username,$password)";
if ($this->dbh->query($sql)) {
    $last_id = $this->dbh->insert_id;
    $values=["user_id"=>$last_id,"user_name"=>$username,"user_password"=>$password];
} 
else {
    $values=["error"=>"Could Not Create User. "];
}
return $values;
}// end create_user

//function to get user

public function get_user($id) {
    if(!$this->dbh){
    $this->connect();
    }
    $sql = "SELECT * FROM users WHERE user_id='$id'";
    $result = $this->dbh->query($sql);
    if ($result->num_rows > 0) {
        $values = $result->fetch_assoc();
        
    } 
    else {
        $values=["error"=>"No Such User Exist"];
    }
    return $values;
}// end get_user

}//end of class
?>
