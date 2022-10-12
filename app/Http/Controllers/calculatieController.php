<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatieController extends Controller
{
    public function index(Request $request) {
        $price = 0;
        $meterPrice = 1;
        $factorMaterial = 1;
        $factorSpoed = 1;
        $request = $request->request;
        $error = 0;


        //Vekrijg de detail
        if ($request->get('medium')) {
            $factorMaterial = 3;
        } else if ($request->get('fijn')) {
            $factorMaterial = 5;
        }

        //vekrijg de materiaal
        if ($request->get('pla')) {
            $meterPrice = 1.5;
        } else if($request->get('koper')) {
            $meterPrice = 3;
        } else if ($request->get('aluminium')) {
            $meterPrice = 5;
        }

        //Is er spoed of niet?
        if ($request->get('spoed')) $factorSpoed = 1.5;

        //Zijn de meegegeven meters wel nummers?
        if (is_numeric($request->get('meter'))){
            $meter = $request->get('meter');
            $price = $meterPrice * $meter * $factorMaterial * $factorSpoed;

            return view('welcome', ['result' => 'Prijs: €'.$price." | €".$meterPrice." p/meter X ".$meter." meter X ".$factorMaterial." X ".$factorSpoed]);
        } else {
            //Er zijn geen juiste meters aangegeven
            $error = "Geen juiste meters aangegeven";
            return view('welcome', ['result' => "FOUT: ".$error]);
        }
    }


    public function dashboard() {
        return view('welcome', ['result' => "Prijs: €". 0]);
    }

//Werkt GET/POST foutmeldingen weg.
    public function redirect() {
        return redirect('/');
    }
}
