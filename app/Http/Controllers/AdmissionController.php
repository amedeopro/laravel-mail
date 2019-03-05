<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class AdmissionController extends Controller
{
    public function index(){
      return view('admission.index');
    }

    public function save(Request $request){
      $data = $request->all();

      $newLead = new Lead();

      $newLead->name = $data['name'];
      $newLead->email = $data['email'];
      $newLead->message = $data['message'];

      $newLead->save();

      $message = 'Complimenti, inserito con successo';

      return view('admission.index', compact('message'));
    }
}
