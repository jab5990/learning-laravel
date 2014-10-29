<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::get('angular', function()
{
    return View::make('angular');
});

/*Route::get('/', function()
{
    return Redirect::to('login');
});*/

/* Route::get('red', function()
{
    return Redirect::route('tea');
});

Route::get('this-is-tea', array('as' => 'tea', function()
{
    return 'This is a tea cup';
})); */

Route::get('services', function()
{
    $services = Service::all();
    return View::make('services', array('services' => $services));
});

Route::get('contact', function()
{
    return View::make('contact');
});

Route::post('contact', function()
{
    $input = Input::all();

    $rules = array(
        'subject' => 'required',
        'message' => 'required'
    );

    $validator = Validator::make($input, $rules);

    if($validator->fails())
    {
        return Redirect::to('contact')->withErrors($validator->messages())->withInput();
    }

    return 'Message Sent';
});

/*Route::get('coffee/{kind}/{size?}', array('before' => 'auth', function($kind, $size = null)
{
    return 'Requested kind of coffee drink ' . $kind . ' size ' . $size;
}))->where('size','[0-9]+');
*/

Route::get('coffee/{kind}/{size?}', array('before' => 'checksize|auth', function($kind, $size = null)
{
    return 'Requested kind of coffee drink ' . $kind . ' size ' . $size;
}));

Route::get('login', 'LoginController@showLogin');
Route::post('login', 'LoginController@processLogin');

/*Route::post('login', function()
{
    return 'Username:'.$_POST["username"].',Password: '.$_POST["password"];
});*/
