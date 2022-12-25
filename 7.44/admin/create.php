<?php

session_start();
require('../app/app.php');

$view_bag = [
  'title' => '',
  'heading' => ''
];



if (is_post()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);

    if (empty($term) || empty($definition)) {
      //TODO: Display message
    } else {
      Data::add_term($term, $definition);
      redirect('index.php');
    }
}
view('admin/create');