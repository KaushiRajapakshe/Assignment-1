<?php
// define variables and set to empty values
$customer_id = $PIN = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if ($customer_id = "" || $PIN = "") {
        $err = "Login was unsuccessful";
    }
}
?>