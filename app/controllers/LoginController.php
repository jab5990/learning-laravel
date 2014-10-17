<?php

class LoginController extends BaseController
{
    public function showLogin()
    {
        $data = array('currentDateTime' => date('Y-m-d H:i:s'), 'company' => 'MyCompany');
        return View::make('auth.login', $data);
    }
}