<?php

header('location:' . routeTo(env('AUTH_AFTER_LOGIN_SUCCESS')));
die();

// use Core\Page;

// Page::set_title(__("crud.label.home"));
// Page::setActive("crud.label.home");

// return view('default/views/index');