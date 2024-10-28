<?php

namespace App\Http\Controllers;

use App\Http\Requests\StotmadminsReguest;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function Stormadmins(StotmadminsReguest $StotmadminsReguest)
    {
        dd($StotmadminsReguest->all());

   }
}
