<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MembersController extends BaseController
{
    public function show(int $id)
    {
        return "User's id is ".$id."<BR>";
    }
}
