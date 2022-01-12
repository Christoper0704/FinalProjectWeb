@extends('layouts.navbar')

@section('content')
<body class = "antialiased">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col" style="text-align:center;">
            <h3><b>Profile Image</b></h3>
        </div>
        <div class="col">
            <h3><b>Start Booking</b></h3>
        </div>
        <div class="col">
            <h3><b>Booking Day</b></h3>
        </div>
        <div class="col">
            <h3><b>Booking Time</b></h3>
        </div>
        <div class="col">
            <h3><b>Status</b></h3>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col" style="text-align:center;">
            <img src="{{ $image }}" width=50px height=50px >
        </div>
        <div class="col">
            <p>{{ $waktubooking }} </p>
        </div>
        <div class="col">
            <p> Wednesday, 12 August </p>
        </div>
        <div class="col">
            <p> 11.00 - 13:00</p>
        </div>
        <div class="col">
            <img src="{{url('/images/accept.png')}}" width=30px height=30px >
            <img src="{{url('/images/decline.png')}}" width=30px height=30px >
        </div>
    </div>

</body>
</html>
@endsection