<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;

class ApiSearchController extends Controller
{
    private $event;
    
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Método retornando view
        /*
            //  Recupera se foi enviado alguma busca por palavra chave.
            $search = request('search');

            //  Verifica se foi feita uma busca, caso não haja, retorna todos os eventos.
            if($search){
                $events = Event::where([
                    ['title', 'like', '%'.$search.'%']
                ])->get();
            } else {            
                $events = Event::all();
                // print($events);            
            }
            
            return view('eventos_api.eventos', ['events' => $events, 'search' => $search]);
        */
        
        $events = Event::all();                
        echo '<pre>';
        print_r(json_decode($events,true));         
        echo '<pre>';

        // retorno do json com todos os eventos
        // return response()->json($events);
        return response()->json($events);;
        
    }

    
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // retorno do evento específico com base no id
        return Event::findOrFail($id);

    }


    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
