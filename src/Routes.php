<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

declare (strict_types=1);

return [
    ['GET', '/', 'PageController@index'],
    ['GET', '/{id:\d+}', 'PageController@index'],
    ['GET', '/test', 'PageController@testPage'],
    ['GET', '/about', 'PageController@aboutPage'],
    ['POST', '/order-form', 'FormController@index'],
    ['GET', '/logout', 'UserController@logout'],
    ['POST', '/add-book', 'BookController@addBook'],
    ['POST', '/del-book', 'BookController@removeBook'],
    ['POST', '/fav-book', 'BookController@toggleFavorite'],
    ['GET', '/library', 'PageController@library'],
    ['GET', '/favorites', 'PageController@favorites'],
    ['GET', '/book/{id:\d+}', 'PageController@book'],
];
