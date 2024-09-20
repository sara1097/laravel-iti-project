


@extends('../Layout.app')


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

              <h3>
                {{$course->id}}
              </h3>
              <p>
                {{$course['description']}}
              </p>

            </div>
          </div>
  </div><!-- End Top Selling -->
</div>


</section>




@endsection    

