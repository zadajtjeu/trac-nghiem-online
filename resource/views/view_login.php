<?php

/**
 * View Login
 * Author: Nong Van Du (Dzu)
 * Mail: dzu6996@gmail.com
 **/

class View_Login
{
    public function show_login()
    {
        require_once 'config/config.php';
        include 'res/templates/login.php';
    }
}
