<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Response;

class EventsController extends Controller
{
    public function index()
    {
        $allCategories = ['Category 1', 'Category 2'];
        $allEvents = Events::all();

        return Response::json(Events::all());
    }

    public function showEventById($id)
    {
        return Response::json(Events::find($id));
    }

    public function dellEventById($id)
    {
        $event = Events::find($id);
        $event->delete();

        return Response::json(Events::all());
    }

    public function create()
    {   
        $city = 'Holic';
        $city_postcode = 90901;
        $street = 'street';
        $house_number = intval(33);
        $status = intval(1);
        $delivery_text = 'delivery_text';
        $customer_id = intval(1);
        $order_id = intval(33);
        $created_at = '2022-05-01 13:45:55';
        $updated_at = '2022-05-01 13:45:55';  

        Events::create([
            
            'city' => $city,
            'city_postcode' => $city_postcode,
            'street' => $street,
            'house_number' => $house_number,
            'status' => $status,
            'delivery_text' => $delivery_text,
            'customer_id' => $customer_id,
            'order_id' => $order_id,
            'created_at' => $created_at,
            'updated_at' => $updated_at    
        ]);

        dd('created new event');
    }

    public function updateEventById($id)
    {
        $event = Events::find($id);
        $event->update(['city'=>'Skalica','status'=>'intval(2)']);

        return Response::json(Events::find($id));    
    }
       
}
