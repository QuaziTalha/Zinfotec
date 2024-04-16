<?php

/* @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', ["as"=>"Home", "uses"=>"AjaxController@INdex"]);
$router->get('/about', function () {return view('about');});
$router->get('/indoor-products', function () {return view('indoor-products');});
$router->get('/outdoor-products', function () {return view('outdoor-products');});
$router->get('/clients', function () {return view('clients');});
$router->get('/contact', function () {return view('contact');});

$router->get('/indoor_P2-5', function () {return view('products.Indoor.P2-5');});
$router->get('/indoor_P6', function () {return view('products.Indoor.P6');});

$router->get('/outdoor_LLRP10', function () {return view('products.outdoor_LLRP10');});

$router->get('/outdoor_meiyad', function () {return view('products.outdoor_meiyad');});
$router->get('/outdoor_P5', function () {return view('products.outdoor_P5');});
$router->get('/outdoor_R1011R', function () {return view('products.outdoor_R1011R');});


$router->get('Admin/Login',["as"=>"Login", "uses"=>"AjaxController@Login"]);
$router->post('Admin/LoginUser',["as"=>"LoginUser", "uses"=>"AjaxController@LoginUser"]);

$router->group(['prefix' => 'Admin', 'middleware'=> 'auth'], function () use ($router) {
    $router->get('/Dashboard',["as"=>"Dashboard", "uses"=>"AjaxController@Dashboard"]);

    $router->get('/Blog',["as"=>"Blog", "uses"=>"AjaxController@Blog"]);
    $router->post('/BlogInsert',["as"=>"BlogInsert", "uses"=>"AjaxController@BlogInsert"]);
    $router->get('/BlogFetch',["as"=>"BlogFetch", "uses"=>"AjaxController@BlogFetch"]);
    $router->get('/BlogDelete',["as"=>"BlogDelete", "uses"=>"AjaxController@BlogDelete"]);

    $router->get('/Gallery',["as"=>"Gallery", "uses"=>"AjaxController@Gallery"]);
    $router->post('/GalleryInsert',["as"=>"GalleryInsert", "uses"=>"AjaxController@GalleryInsert"]);
    $router->get('/GalleryFetch',["as"=>"GalleryFetch", "uses"=>"AjaxController@GalleryFetch"]);
    $router->get('/GalleryDelete',["as"=>"GalleryDelete", "uses"=>"AjaxController@GalleryDelete"]);

    $router->get('/Client',["as"=>"Client", "uses"=>"AjaxController@Client"]);
    $router->post('/ClientInsert',["as"=>"ClientInsert", "uses"=>"AjaxController@ClientInsert"]);
    $router->get('/ClientFetch',["as"=>"ClientFetch", "uses"=>"AjaxController@ClientFetch"]);
    $router->get('/ClientDelete',["as"=>"ClientDelete", "uses"=>"AjaxController@ClientDelete"]);

    $router->get('/Contacts',["as"=>"Contacts", "uses"=>"AjaxController@Contacts"]);
    $router->get('/ContactsFetch',["as"=>"ContactsFetch", "uses"=>"AjaxController@ContactsFetch"]);

});
