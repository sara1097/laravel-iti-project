


@extends('Layout.app')


@section('content')

<div class="pagetitle">
      <h1>Courses</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">edit</li>
        </ol>
       </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
<div class="row">

 <!-- Top Selling -->
 <div class="col-12">
 <div class="card">
            <div class="card-body">
              <h5 class="card-title">Horizontal Form</h5>

              <!-- Horizontal Form -->
              <form method="POST" action="{{route('courses.update',$course['id'])}}">
                @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputText" value="{{$course['name']}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                  <div class="col-sm-10">
                    <input type="text" name="duration" class="form-control" id="inputEmail" value="{{$course['duration']}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" name="price" class="form-control" id="inputPassword" value="{{$course['price']}}">
                  </div>
                </div>
               
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Uodate</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
  </div><!-- End Top Selling -->
</div>


</section>




@endsection    

