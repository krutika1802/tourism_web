<?php
    include('./config.php');
    if(!isset($_SESSION['user'])){
        echo "Session not started";
    }