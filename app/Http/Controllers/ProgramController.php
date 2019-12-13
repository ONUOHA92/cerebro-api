<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

     public function showAllProgram()
     {
        return response()->json(Program::all());
     }

     public function showOneProgram($id)
     {
         return response()->json(Program::find($id));
     }


    public function delete($id)
    {
        Program::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
