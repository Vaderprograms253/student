<?php
init_set('display_errors', 1);
error_reporting(E_ALL);
echo "<h3>Hello</h3>";
require_once $_SERVER['DOCUMENT_ROOT'] . '/../config.php';

$sid = $_POST['sid'];
echo $sid;

if (!empty($sid)) {

    //define query
    $sql = "SELECT * FROM student WHERE sid = :sid";

    //prepare
    $statement = $dbh->prepare($sql);

    //bind
    $statement->bindParam(':sid',$sid, PDO::PARAM_INT);

    //execute
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo "SID: $sid";
}

echo "SID: $sid";


