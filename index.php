<?php
    // --------------------
    // (C) ManageMyServer
    // Website: Coming Soon
    // Docs: Coming Soon
    // --------------------
    $debug = false;
    if ($debug == true) {
        echo $_GET['page'];
    }
    if ($_GET['page'] == '')
        header('Location: ?page=login');
        exit();
    }
    if (file_exists('pages/' . $_GET['page'] . '.php') {
        if (!$has_permission_todo) { //make check to see if they have permission
            include 'pages/errors/nopermission.php');
        } else {
            include 'pages/' . $_GET['page'] . '.php';
        }
    } else {
        include 'pages/errors/404.php';
    }
?>
