<?php 
include 'class.DB.php';
if(isset($_POST['apipassword']) && $_POST['apipassword']=="123456")
{
    $obj= new DB();
    if(!empty($_POST['user_id']))
    {
       $result=$obj->get_user($_POST['user_id']);
       echo json_encode($result);
    }
    else
    {
        echo json_encode(["error"=>"Please Provide An User Id"]);
    }
}
else
{
    echo json_encode(["error"=>"Wrong Api Password"]);
}
?>