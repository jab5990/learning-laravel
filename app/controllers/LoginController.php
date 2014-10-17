<?php

class LoginController extends BaseController
{
    public function showLogin()
    {
        $data = array('currentDateTime' => date('Y-m-d H:i:s'), 'company' => 'MyCompany');
        return View::make('auth.login', $data);
    }

    public function processLogin()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        if ($username === 'joe' && $password === '1234')
        {
            return 'Access granted';
        }
        else
        {
            return 'Access denied';
        }

    }
}