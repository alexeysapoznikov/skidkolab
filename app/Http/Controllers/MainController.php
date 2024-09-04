<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesModel;

class MainController extends Controller
{
    public function show() {
        ServicesModel::get();
    }
}
