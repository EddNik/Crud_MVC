<?php
require_once '../model/model.php';
$del = new Article();
$result = $del->deleteData($_GET['id']);
require_once '../view/listForm.php';

header("Location: ../controller/index.php?");
