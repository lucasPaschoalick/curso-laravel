<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        
        // chama todos os eventos do banco e envia para a view
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }
}
