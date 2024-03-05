<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elev;

class ElevController extends Controller
{
    public function showStudents()
    {
        $elevi = Elev::all();
        $title = "Elevi";
        return view('pages.students', compact('elevi', 'title'));
    }
}
