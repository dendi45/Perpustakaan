<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
class PengembalianController extends Controller
{
    public function index(){
        $pengembalian = pengembalian::all();
        return view ('pengembalian.index', compact('pengembalian'));
        }
}
