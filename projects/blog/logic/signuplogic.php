<?php

    if(isset($_REQUEST['signup'])){
        insert_users($conn, $username, $email, $password);
    }
    

?>