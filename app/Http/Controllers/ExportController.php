<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class ExportController extends Controller
{
   public function export(){
     $inscriptions = Registration::all();
     $csvExporter = new \Laracsv\Export();
     $csvExporter->build( $inscriptions ,
        [
        'hour_passage' => 'Heure de passage', 
        'team_name' => "Nom de l equipe", 
        'team_leader' => 'Nom du chef d equipe',
        'nbr_participant' => 'Nombre de participants',
        'email',
        'phone',
        'created_at' => "Inscrit le ",
        ]
     )->download();
   }
}
