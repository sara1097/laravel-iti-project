@extends('Layout.app')


@section('content')

<!-- Appointment List Section -->
<section id="appointments" class="appointment section">

    <!-- Section Title -->
    <div class="container section-title">
      <h2>Appointments</h2>
      <p>List of all appointments</p>
    </div><!-- End Section Title -->

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Department</th>
                    <th>Doctor</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->department }}</td>
                        <td>{{ $appointment->doctor }}</td>
                        <td>{{ $appointment->message }}</td>
                        <td>
                            <a href="{{ route('Appointment.edit', $appointment->id) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('Appointment.destroy', $appointment->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>

@endsection   