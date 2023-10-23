<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class testController extends Controller
{
    ///return view details visiteur lors de click sur read 



    public function show($Eventname){
      
      $events=\Share::page(
         url('/post'),
         'here is the text',
     )
     ->facebook()
     ->telegram()
     ->linkedin()
     ->whatsapp()
     ->reddit()
     ->twitter()
     ->pinterest();

   //   return view ("details", compact("event","events"));
      
       $event = Event::where('Eventname', $Eventname)->first();
        return view('details', compact ("event","events"));
        
       }

      //  public function share(){
      //    return view('details',compact('shareButtons'));
      //   }
       

       public function detailsv($Eventname){
         $events=\Share::page(
            url('/post'),
            'here is the text',
        )
        ->facebook()
        ->telegram()
        ->linkedin()
        ->whatsapp()
        ->reddit()
        ->twitter()
        ->pinterest();
   

         $event = Event::where('Eventname', $Eventname)->first();
          return view('detailsV', ['event' => $event],compact ("event","events"));
          
         }
        
        public function index(){
        
        return view('cartcreator');
        
     }
    
     public function affiche($Eventname){

      $event = Event::where('Eventname', $Eventname)->first();
       return view('readData', ['event' => $event]);
      
      }
      
public function reg(){
   return view("addUser");
}


     
      
}