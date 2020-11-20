<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified','is_admin']);
    }
}
