<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentRequest;
use App\Models\appointment;
use App\Models\product_package;
use App\Models\business_hour;
use Illuminate\Http\Request;


class scheduleController extends Controller
{
    public function index()//pagina de agenda
    {
        $appointments = appointment::paginate();
        return view('schedule.index', compact('appointments'));
    }

    public function create()//pagina de crear cita
    {
        $products = product_package::paginate();
        $hours = business_hour::paginate();
        return view('schedule.create', compact('products', 'hours'));
    }

    public function show($id)
    {
        $appointment = appointment::find($id);
        $product = product_package::find($appointment->product_package_id);
        $hour = business_hour::find($appointment->business_hours_id);
        return view('schedule.show', ['appointment'=> $appointment, 'product'=> $product, 'hour'=>$hour ]);
    }

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = new appointment();
        $appointment->name = $request->get('name');
        $appointment->phone = $request->get('phone');
        $appointment->email = $request->get('email');
        $appointment->product_package_id = $request->get('idProduct');
        $appointment->date = $request->get('date');
        $appointment->business_hours_id = $request->get('hour');
        $appointment->message = $request->get('message');
        $appointment->status = 'A';

        $appointment->save();

        return redirect()->route('schedule.show', ['appointment' => $appointment->id]);
    }

    public function edit($id)
    {
        $appointment = appointment::find($id);
        $products = product_package::all();
        $hours = business_hour::all();
        return view('schedule.edit', ['appointment'=> $appointment, 'products'=> $products, 'hours'=>$hours ]);
    }


    public function update(Request $request, appointment $appointment)
    {
        $appointment->name = $request->name;
        $appointment->phone = $request->phone;
        $appointment->email = $request->email;
        $appointment->product_package_id = $request->idProduct ;
        $appointment->date = $request->date;
        $appointment->business_hours_id = $request->hour;
        $appointment->message = $request->message;
        $appointment->status = 'A';

        $appointment->save();

        return redirect()->route('schedule.show', ['appointment' => $appointment->id]);
    }


    public function destroy(appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('home.index');
    }

}
