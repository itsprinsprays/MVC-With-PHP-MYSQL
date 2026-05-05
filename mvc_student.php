<?php
require_once "config/connect.php";
require_once "controller/StudentController.php";

$controller = new StudentController($conn); // use $conn directly

$action = $_GET['action'] ?? 'index';

if ($action == 'store' && $_POST) {
    $controller->store($_POST);
} elseif ($action == 'delete') {
    $controller->delete($_GET['id']);
} else {
    $controller->index();
}