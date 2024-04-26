<?php

use Core\Page;

Page::set_title(__("default.label.profile"));
Page::setActive("default.label.profile");

return view('default/views/profile');