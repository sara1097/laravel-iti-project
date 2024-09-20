@extends('Layout.app')

@section('content')

<!-- Edit Appointment Section -->
<section id="edit-appointment" class="edit-appointment section">

    <!-- Section Title -->
    <div class="container section-title">
      <h2>Edit Appointment</h2>
    </div><!-- End Section Title -->

    <div class="container">
      <form method="POST" action="{{ route('Appointment.update', $appointment->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" value="{{ $appointment->name }}" required="">
          </div>
          <div class="col-md-4 form-group">
            <input type="email" class="form-control" name="email" id="email" value="{{ $appointment->email }}" required="">
          </div>
          <div class="col-md-4 form-group">
            <input type="tel" class="form-control" name="phone" id="phone" value="{{ $appointment->phone }}" required="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="datetime-local" name="date" class="form-control" id="date" value="{{ $appointment->date }}" required="">
          </div>
          <div class="col-md-4 form-group">
            <select name="department" id="department" class="form-select" required="">
                @foreach ($departments as $department)
                <option value="{{ $department->id }}" {{ $appointment->department_id == $department->id ? 'selected' : '' }}>
                  {{ $department->name }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="col-md-4 form-group">
            <select name="doctor" id="doctor" class="form-select" required>
                <option value="">Select Doctor</option>
                <!-- This will be dynamically populated based on the department -->
            </select>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5">{{ $appointment->message }}</textarea>
        </div>
        <div class="text-center mt-3"><button type="submit" class="btn btn-primary">Update Appointment</button></div>
      </form>
    </div>

</section><!-- /Edit Appointment Section -->


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
