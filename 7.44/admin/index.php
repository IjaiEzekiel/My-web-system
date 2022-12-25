<?php

session_start();
require('../app/app.php');

$view_bag = [
 'title' => 'Glossary List',
 'heading' => 'Glossary'
];



view('admin/index', Data::get_terms());