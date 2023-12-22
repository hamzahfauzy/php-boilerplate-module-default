<?php
$auth = auth();
$authRoute = [
    'auth/login',
    'auth/logout',
];

if(!in_array($route, $authRoute) && $auth && !is_allowed($route, $auth->id))
{
    die('Error 403. Unauthorized');
}