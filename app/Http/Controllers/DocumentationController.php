<?php

namespace App\Http\Controllers;

use App\Documentation;
use Illuminate\Http\Request;
use App\Patient;

class DocumentationController extends Controller
{
    public function index()
    {
        $docs = auth()->user()->documentations()->orderBy('id', 'desc')->paginate(getenv('AIOT_PAGINATE_ROWS'));
        return view('documentations',compact('docs'));
    }

    public function show($id)
    {

        return view('documentation',compact('id'));
    }
    public function create(Request $request,$id)
    {

        /*dd($text);*/
        $patient = Patient::find($id);
        $documentation = new Documentation();
        $documentation->user()->associate(auth()->user());
        $documentation->patient()->associate($patient);
        $documentation->text = $request->text;
        $documentation->save();
        return redirect()->route('patientDoc', $id);
    }
}
