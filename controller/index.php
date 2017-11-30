<?php

require_once '../model/model.php';
$selected = new Article();
$selected->createDB();
$selected->createTable();
$result = $selected->selectData();
require_once '../view/listForm.php';