


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
 <div class="card">
            <div class="card-body">
              <h5 class="card-title">Horizontal Form</h5>

              <!-- Horizontal Form -->
              <form method="POST" action="{{route('courses.store')}}">
                @csrf
                <div class="row mb-3">
                  <label for="id" class="col-sm-2 col-form-label">Id</label>
                  <div class="col-sm-10">
                    <input type="number" name="id" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="price" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" name="price" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="description" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" id="inputPassword">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                  <div class="col-sm-10">
                    <input type="text" name="duration" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="created_at" class="col-sm-2 col-form-label">created_at</label>
                  <div class="col-sm-10">
                    <input type="date" name="created_at" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="updated_at" class="col-sm-2 col-form-label">update</label>
                  <div class="col-sm-10">
                    <input type="date" name="updated_at" class="form-control" id="inputText">
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
  </div><!-- End Top Selling -->
</div>


</section>




@endsection    

