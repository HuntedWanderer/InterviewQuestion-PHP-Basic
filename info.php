<?php
if(isset($_POST['username'])){
    $username = $_POST['username'];
    if($username === "abc"){
        echo "Verified";
    }
    else{
        echo "Error";
    }
}
?>