<?php

/*
    * Class: csci303fa21
    * User: chd
    * Date: 10/17/2021
    * Time: 9:17 AM

*/


//checking duplicates - function only
function checkdup($pdo, $sql, $field)
{
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $field);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

//This function checks to see if someone is logged in
function checkLogin()
{
    if (!isset($_SESSION['ID'])) {
        echo "<p class='error'>This page requires authentication.  Please log in to view details.</p>";
        require_once "footer.php";
        exit();
    }
}