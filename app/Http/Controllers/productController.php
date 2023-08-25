<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
}

class productController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function show($productAppointment)
    {
        return view('product.show', ['productAppointment' => $productAppointment]);
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
    $product = new ClassProductAppointment();
    $product->idProductAppointment = 1; //Este número debe venir de un dato de base de datos (autonumerico o identidad)
    $product->name = $request->get('name');
    $product->phone = $request->get('phone');
    $product->email = $request->get('email');
    $product->idProduct = $request->get('idProduct');
    $product->date = $request->get('date');
    $product->hour = $request->get('hour');
    $product->message = $request->get('message');
    // salvamos información en base de datos o repositorio
    return view('product.show', ['product' => $product]);
    //return view('agenda.index',compact('agenda'));
    }
}
