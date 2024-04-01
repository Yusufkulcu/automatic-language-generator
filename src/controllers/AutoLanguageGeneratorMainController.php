<?php

namespace YusufKulcu\AutoLanguageGenerator\controllers;

use App\Http\Controllers\Controller;

class AutoLanguageGeneratorMainController extends Controller
{
    public function index()
    {
       return view("AutoLanguageGenerator::index");
    }
}
