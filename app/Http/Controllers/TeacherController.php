<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Division;
use App\Models\District;

class TeacherController extends Controller
{
    public function createTeacher(){
        $divisions = Division::all();
        return view('create_teacher', compact('divisions'));
    }
}
