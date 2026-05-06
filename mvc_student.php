<?php
require_once "config/connect.php";
require_once "controller/StudentController.php";

$controller = new StudentController($conn);

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store($_POST);
        }
        break;

    case 'delete':
        $controller->delete($_GET['id']);
        break;
    
    case 'update':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->update($_POST);
        }
        break;

    default:
        $controller->index();
}