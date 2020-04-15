<?php
include_once 'class.DB.php'; 
if(isset($_POST['apipassword']) && $_POST['apipassword']=="123456")
{
    $obj= new DB();
    $result=$obj->create_user();
    echo json_encode($result);

}
else
{
    echo json_encode(["error"=>"Wrong Api Password"]);
}
?>