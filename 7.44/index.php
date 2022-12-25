<?php

require('app/app.php');

$view_bag = [
     'title' => 'Glossary List',
     'heading' => 'Glossary'
];

if (isset($_GET['search'])) {
     $items = Data::search_terms($_GET['search']);

     $view_bag['heading'] = 'Search result for ' . $_GET['search'];

} else {
     $items = Data::get_terms();
}

view(name:'index', 
     model:$items);