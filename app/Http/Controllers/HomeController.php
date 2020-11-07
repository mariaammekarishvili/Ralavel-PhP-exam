<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        if (isset($_GET['id']) && isset($_GET['action'])) {
            Applicant::where('id', (int)$_GET['id'])->update([
                'is_hired' => (boolean)$_GET['action'],
            ]);
        }

        return view('applicant_list', [
            'title' => 'applicants',
            'applicants' => Applicant::all(),
        ]);
    }

    public function edit($id, Request $req) {
        if ($req->isMethod('post')) {
            $req->validate([
                'name' => 'required|string',
                'surname' => 'required|string',
                'position' => 'required|string',
                'phone' => 'required|numeric',
            ]);

            Applicant::where('id', $id)->update([
                'name' => $req->name,
                'surname' => $req->surname,
                'position' => $req->position,
                'phone' => $req->phone,
            ]);
        }

        return view('edit', [
            'title' => 'edit',
            'applicant' => Applicant::find($id),
        ]);
    }
}
