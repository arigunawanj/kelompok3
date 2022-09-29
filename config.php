<?php
$db = mysqli_connect("localhost","root","","library");

function read($table)
{
    global $db;
    $query = "SELECT * FROM " . $table;
    $rows = mysqli_query($db, $query);
    return $rows;
}


?>