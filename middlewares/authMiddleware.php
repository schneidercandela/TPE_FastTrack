<?php

function authMiddleware($req) {
    session_start();

    if (isset($_SESSION['IS_LOGGED']) && $_SESSION['IS_LOGGED'] === true) {
        $req->user = new stdClass();
        $req->user->usuario = $_SESSION['USER_NAME']; 
    } else {
        $req->user = null;
    }
}