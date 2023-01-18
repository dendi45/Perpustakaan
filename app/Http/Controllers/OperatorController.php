<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
class OperatorController extends Controller
{
    public function index()
    {
        $operator = Operator::all();
        return view('operator.index', compact('operator'));
    }

    public function create()
    {
        return view('operator.create');
    }
}
