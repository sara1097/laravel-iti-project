<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        
        $coursesFromDB=Course::all();
        
        return view('Course.index',['courses'=>$coursesFromDB]);
    }

    public function create()
    {
        return view('Course.create');

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
       
       Course::create([
        'description'=>$data->description,
        'id'=>$data->id,
        'name'=>$data->name,
        'duration'=>$data->duration,
        'price'=>$data->price,
       ]);
        //dd($course);
        //$course->save();
       // dd($data);
      

        return to_route('courses.index');
    }

    public function show($id)
    { 
         //select * from courses where id= $id
         $singleCourseDB=Course::findOrFail($id);
         //$singleCourseDB=Course::where('id',$id)->first();
        //  if(is_null($singleCourseDB))
        //  {
        //     return to_route('courses.index');
        //  }

        //  dd(
        //     Course::where('price',600)->first()       
        // );
        //$course=['id'=>5,'name'=>'JavaScript','date'=>'2024-09-11','price'=>'$10'];
        return view('Course.show',['course'=>$singleCourseDB]);
       //return $id;
    }

   public function edit($id)
   {
        $singleCourseDB=Course::findOrFail($id);
        //$course= ['id'=>1,'name'=>'PHP','date'=>'2024-09-11','price'=>'$10','description'=>''];
        return view('Course.edit',['course'=>$singleCourseDB]);
   }

   public function update($id)
   {
    //find data of $id
    //map updated data
    //save changes
    $course=Course::find($id);
    $data=request();
        $course->name = $data->name;
        $course->duration = $data->duration;
        $course->price = $data->price;
    $course->save();
    return to_route('courses.show',$id);
   }

   public function destroy($id)
   {
    $course = Course::find($id);
 //dd($course);
    $course->delete();
    return to_route('courses.index');
   }


}
