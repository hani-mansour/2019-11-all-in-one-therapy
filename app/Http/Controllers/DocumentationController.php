<?php

namespace App\Http\Controllers;

use App\Documentation;
use App\Patient;
use App\User;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        User::requirePermission('admin-documentation');

        return view('backend.documentations', [
            'documentations' => auth()->user()->documentations()->orderBy('id', 'desc')->paginate(getenv('AIOT_PAGINATE_ROWS'))
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param int $patientId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(int $patientId)
    {
        User::requirePermission('admin-documentation');

        $patient = Patient::findOrFail($patientId);
        $user = auth()->user();

        return view('backend.documentation', [ 'patientId' => $patientId, 'patient' => $patient, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $patientId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, int $patientId)
    {
        User::requirePermission('admin-documentation');

        $patient = Patient::find($patientId);

        $documentation = new Documentation();
        $documentation->user()->associate(auth()->user());
        $documentation->patient()->associate($patient);
        $documentation->text = $request->text;
        $documentation->save();

        return redirect()->route('patient', $patientId);
    }

}
