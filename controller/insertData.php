<?php

require_once '../model/model.php';

if (!empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["hireDate"])) {
    $insert = new Article();
    $insert->insertData($_POST["firstName"],$_POST["lastName"],$_POST["hireDate"]);
    header("Location: ../controller/index.php?");
}
$hireDate = date("Y-m-d H:i:s", time());
require_once '../view/insertForm.php';

