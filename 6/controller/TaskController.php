<?php

if (isset($_GET['action'])) {

    if ($_GET['action'] === 'add' && isset($_POST['description']) && !empty($_POST['description'])) {
        TaskProvider::addTask(new Task($_POST['description']));
    }
    if ($_GET['action'] === 'setDone' && isset($_GET['id']) && !empty($_GET['id'])) {
        $_SESSION['tasks'][$_GET['id']]->setIsDone(true);
    }
}

$tasks = TaskProvider::getUndoneList();
require_once 'view/task.php';

