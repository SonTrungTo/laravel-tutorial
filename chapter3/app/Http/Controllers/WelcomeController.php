<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class WelcomeController extends BaseController
{
    public function index()
    {
        return 'Welcome Controller';
    }
}
