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
    ['GET', '/invates', 'PageController@invatesPage'],
    ['GET', '/marks', 'PageController@marksPage'],
    ['GET', '/dig', 'PageController@digPage'],
    ['POST', '/order-form', 'FormController@index'],
];
