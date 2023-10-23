<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;






class EventController extends Controller
{

    public function index()
    {
        $data = Event::get()
        ->where('name', '=', auth()->user()->name);
        return view('creator', compact('data'));
    }
    public function ajouter(Request $request)
    {
        $name = auth()->user()->name;
        return view('insertform', compact('name'));

    }


    ///insertion d'un evenet



    public function save(Request $request)
    {


        $Eventname = $request->Eventname;
        $name = $request->name;
        $details = $request->details;
        $src = $request->src;
        $dateDebut = $request->dateDebut;
        $dateFin = $request->dateFin;
        $heureD = $request->heureD;
        $heureF = $request->heureF;
        $type = $request->type;
        $payement = $request->payement;
        $linkEvent = $request->linkEvent;


        if ($request->hasFile('src')) {
            $image = $request->file('src');
            $src = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $src);
        } else {
            $src = null;
        }
        $c = new Event;
        $c->Eventname = $Eventname;
        $c->name = $name;
        $c->details = $details;
        $c->src = $src;
        $c->dateDebut = $dateDebut;
        $c->dateFin = $dateFin;
        $c->heureD = $heureD;
        $c->heureF = $heureF;
        $c->type = $type;
        $c->payement = $payement;
        $c->linkEvent = $linkEvent;

        $c->save();

        return redirect()->back()->with('success', 'Event Add Successfully');
    }


    public function edit($idE)
    {
        $data = Event::where('idE','=', $idE)->first();
        return view('editEvent', compact('data'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'Eventname' =>'required',
            'name' =>'required',
            'details' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'heureD' => 'required',
            'heureF' => 'required',
            'type' => 'required',
            'payement' => 'required',
            'linkEvent' => 'required',
        ]);
        
        $res = Event::where('idE','=', $request->idE)->update([
            'idE'=>$request->idE,
            'Eventname' => $request->Eventname,
            'name' => $request->name,
            'details' => $request->details,
            'dateDebut' => $request->dateDebut,
            'dateFin' => $request->dateFin,
            'heureD' => $request->heureD,
            'heureF' => $request->heureF,
            'type' => $request->type,
            'payement' => $request->payement,
            'linkEvent' => $request->linkEvent,
        ]);
        if($res)
            return redirect()->back()->with('success' , 'Event Update Successfully');
        else
            return redirect()->back()->with('error', 'Could not update event');
}
}