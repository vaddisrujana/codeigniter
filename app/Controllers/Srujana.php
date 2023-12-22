<?php

namespace App\Controllers;

class Srujana extends BaseController
{
  public function index(): string
  {
    return view('hello_world');
  }
}