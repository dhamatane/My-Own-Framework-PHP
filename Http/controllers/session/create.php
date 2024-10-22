<?php

use Core\Session;

// view('session/create.view.php');

view('session/create.view.php', [
    'errors' => Session::get('errors'),
]);