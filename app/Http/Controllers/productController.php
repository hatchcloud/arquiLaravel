<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\product_package;
use App\Models\business_hour;
use Illuminate\Http\Request;

class ClassProductAppointment
{
 private $idProductAppointment;
 private $name;
 private $phone;
 private $email;
 private $date;
 private $hour;
 private $message;
    public function __construct()
    {
    $this->idProductAppointment = 0;
    $this->name    = "";
    $this->phone   = "";
    $this->email   = "";
    $this->date    = 0;
    $this->hour    = 0;
    $this->message = "";
    }

    public function __get($property){
        if(property_exists($this, $property)){
            return $this-> $property;
        }
        return $this;
    }

    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this-> $property = $value;
        }
        return $this;
    }

}

//Corregi este error 

class productController extends Controller
{
    public function create()
    {
        $products = product_package::paginate();
        $hours = business_hour::paginate();
        return view('product.create', compact('products', 'hours'));
    }

    public function show($appointment)
    {
        return view('product.show', compact('appointment'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'idProduct' => 'required|integer',
        'date' => 'required|integer',
        'hour' => 'required|integer',
        'message',
        ]);
        $appointment = new ClassProductAppointment();
        $appointment->idProductAppointment = 1;
        $appointment->name = $request->get('name');
        $appointment->phone = $request->get('phone');
        $appointment->email = $request->get('email');
        $appointment->idProduct = $request->get('idProduct');
        $appointment->date = $request->get('date');
        $appointment->hour = $request->get('hour');
        $appointment->message = $request->get('message');

        return redirect()->route('product.show', ['appointment' => $appointment]);
    }
}
