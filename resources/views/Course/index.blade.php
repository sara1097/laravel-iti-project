

@extends('Layout.app')


@section('content')

<div class="pagetitle">
      <h1>Courses</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Index</li>
        </ol>
       </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
<div class="row">

 <!-- Top Selling -->
 <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Courses <span>| List</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Id</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Price</th>
                        <th>actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                     @foreach($courses as $item)
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td class="fw-bold">{{$item['id']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['created_at']}}</td>
                       <td>{{$item['duration']}}</td>
                        <td>{{$item['price']}}</td>
                        <td>
                          <a class="btn btn-primary" href="{{route('courses.show',$item['id'])}}">Details</a>
                          <a class="btn btn-success" href="{{route('courses.edit',$item['id'])}}">Edit</a>
                          <a class="btn btn-danger" href="{{route('courses.delete',$item['id'])}}">Delete</a>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
</div>


</section>




@endsection    