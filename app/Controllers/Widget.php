<?php

namespace App\Controllers;

class Widget extends BaseController
{
    public function index(): string
    {
        return view('widget/index');
    }
}
