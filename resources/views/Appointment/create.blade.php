@extends('Layout.app')

@section('content')

<!-- Appointment Section -->
<section id="appointment" class="appointment section">

    <!-- Section Title -->
    <div class="container section-title" >
      <h2>Appointment</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container"  data-aos-delay="100">

      <form method="POST" action="{{route('Appointment.store')}}" role="form" class="php-email-form">
        @csrf
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="department" id="department" class="form-select" required="">
              @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-6 form-group">
            <select name="doctor" id="doctor" class="form-select" required>
                <option value="">Select Doctor</option>
                <!-- This will be dynamically populated based on the department -->
            </select>
        </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="mt-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </div>
      </form>

    </div>

</section><!-- /Appointment Section -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Listen for department change event
    $('#department').on('change', function () {
        var departmentId = $(this).val();

        // Clear previous doctor options
        $('#doctor').empty();
        $('#doctor').append('<option value="">Select Doctor</option>');

        if (departmentId) {
            $.ajax({
                url: '/get-doctors/' + departmentId,
                type: 'GET',
                success: function (data) {
                    // Populate doctor dropdown
                    $.each(data.doctors, function (key, doctor) {
                        $('#doctor').append('<option value="' + doctor.id + '">' + doctor.name + '</option>');
                    });
                }
            });
        }
    });
</script>


@endsection    