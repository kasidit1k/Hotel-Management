<?php
$hname = 'localhost';
$uname = 'root';
$pass = '0630281356oni';  // Replace with your password if necessary
$db = 'hbwebsite';

$con = mysqli_connect($hname, $uname, $pass, $db);
if (!$con) {
    die("Cannot connect to database: " .mysqli_connect_error());
}





function filteration($data){
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        if (!mysqli_stmt_bind_param($stmt, $datatypes, ...$values)) {
            die("Bind failed: " . mysqli_error($con));
        }
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            die("Execution failed: " . mysqli_error($con));
        }
    } else {
        die("Preparation failed: " . mysqli_error($con));
    }
}
