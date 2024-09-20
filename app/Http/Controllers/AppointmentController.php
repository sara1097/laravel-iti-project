<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        $appointments=Appointment::all();
        $doctors = Doctor::all();
        $departments = Department::all();
        return view('Appointment.create',['appointments'=>$appointments, 'doctors'=>$doctors, 'departments'=>$departments]);

    }

    public function store()
    {
        //save data to db
        //after success
        $data=request();
       
        // $course = new Course; 
        // $course->name = $data->name;
        // $course->id = $data->id;
        // $course->description = $data->description;
        // $course->duration = $data->duration;
        // $course->price = $data->price;
       
    //    Appointment::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'phone' => $data['phone'],
    //         'date' => $data['date'],
    //         'department' => $data['department'],
    //         'doctor' => $data['doctor'],
    //         'message' => $data['message'],
    //    ]);
       $appointment=new Appointment();
       $appointment->name= $data['name'];
        $appointment->email = $data['email'];
        $appointment->phone = $data['phone'];
        $appointment->date = $data['date'];
        $appointment->department=  $data['department'];
        $appointment->doctor = $data['doctor'];
        $appointment->message = $data['message'];
        //dd($course);
        $appointment->save();
       // dd($data);
      

        return to_route('Appointment.index');
    }

    public function index()
    {
        
        $appointmentsFromDB=Appointment::all();
        $doctors = Doctor::all();
        $departments = Department::all();

        return view('Appointment.index',['appointments'=>$appointmentsFromDB, 'doctors'=>$doctors, 'departments'=>$departments]);
    }


    public function edit($id)
{
    $appointment = Appointment::findOrFail($id);
    $departments = Department::all();
    $doctors = Doctor::all();
    return view('appointment.edit', compact('appointment', 'departments', 'doctors'));
}

public function update(Request $request, $id)
{
    $appointment = Appointment::findOrFail($id);
    $appointment->update($request->all());

    return redirect()->route('Appointment.index')->with('success', 'Appointment updated successfully.');
}

public function destroy($id)
{
    $appointment = Appointment::findOrFail($id);
    $appointment->delete();

    return redirect()->route('Appointment.index')->with('success', 'Appointment deleted successfully.');
}

}
