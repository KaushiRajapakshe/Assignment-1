<?php
// define variables and set to empty values
$customer_id = $PIN = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = test_input($_POST["customer_id"]);
    $PIN = test_input($_POST["PIN"]);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($customer_id != "" || $PIN != "") {
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