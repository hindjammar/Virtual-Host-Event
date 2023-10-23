<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Agenda;

use App\Models\Event;

use Illuminate\Support\Facades\View;

  
class FullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
  
        if($request->ajax()) {
       
             $data = Agenda::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
  
             return response()->json($data);
        }
  
        return view('fullcalender');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = Agenda::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Agenda::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Agenda::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }

    public function display(){
        // $events = Event::pluck('idE'); // récupère tous les IDs de la table "evenementt" de la base de données
        // View::share('eventIds', $eventIds); // partage les IDs avec la 
        $events = Event::all();
       
        return view('addevent',['events' => $events]);
    }

    public function store(Request $request){

      $input=$request->all();

      $event = Event::findOrFail($input['idE']);

        $data=[];
        $idE=$request->idE;
        $title = $request->title;
        $start = $request->start;
        $end = $request->end;
       foreach($title as $key =>$name){
        $data[] =['title'=>$name,'start'=>$start[$key],'end'=>$end[$key],'idE'=>$idE];
       }
        // Event::find($idE);
        Agenda::insert($data);
        
        // $e=new Event;
        // $e->title=$title;
        // $e->start=$start;
        // $e->end=$end;

        // $e->save();
         return redirect('fullcalender')->with(' Success','Event added successfully');


    }

    public function show(){
        $events= Agenda::all();
        return view ('display')->with('events',$events);
    }
   
    public function edit($id){
        $events= Agenda::where('id','=', $id)->first();
        return view('editform',compact('events'));

    }
    public function update(Request $request)
{

    $request->validate([
        'title' =>'required',
        'start' =>'required',
        'end' => 'required',
    
    ]);
    
    $res =  Agenda::where('id','=', $request->id)->update([
        'id'=>$request->id,
        'title' => $request->title,
        'start' => $request->start,
        'end' => $request->end,
        
    ]);
    if($res)
        return redirect()->back()->with('success' , 'Event Update Successfully');
    else
        return redirect()->back()->with('error', 'Could not update event');

}

    
}