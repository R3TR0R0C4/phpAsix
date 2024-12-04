<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',
    '/books/view/{id}' => '../App/Controllers/BookController.php@view',

    '/leaks' => '../App/Controllers/LeaksController.php@index',
    '/leaks/create' => '../App/Controllers/LeaksController.php@create',
    '/leaks/store' => '../App/Controllers/LeaksController.php@store',
    '/leaks/edit/{id}' => '../App/Controllers/LeaksController.php@edit',
    '/leaks/update/{id}' => '../App/Controllers/LeaksController.php@update',
    '/leaks/delete/{id}' => '../App/Controllers/LeaksController.php@delete',
    '/leaks/destroy/{id}' => '../App/Controllers/LeaksController.php@destroy',
    '/leaks/confirm-delete/{id}' => '../App/Controllers/LeaksController.php@confirmDelete',
    '/leaks/view/{id}' => '../App/Controllers/LeaksController.php@view',
];