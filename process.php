<?php
// define variables and set to empty values
$customer_id = $PIN = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = test_input($_POST["customer_id"]);
    $PIN = test_input($_POST["PIN"]);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["customer_id"])) {
        $customerIdErr = "Contact Number is required";
    } else if (strlen($_POST["customer_id"]) > 10 || strlen($_POST["customer_id"]) < 10) {
        $customerIdErr = "Contact Number is 10 digits required";
    } else {
        $customer_id = test_input($_POST["customer_id"]);
    }

    if (empty($_POST["PIN"])) {
        $PINErr = "PIN is required";
    } else if (strlen($_POST["PIN"]) > 4 || strlen($_POST["PIN"]) < 4) {
        $PINErr = "PIN Number is 4 digits required";
    } else {
        $PIN = test_input($_POST["PIN"]);
    }

    if ($customer_id = "" || $PIN = "") {
        $err = "Login was unsuccessful";
    }else{
        $err = "Login was successful";
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>