@extends('layouts.navbar')

@section('content')
<body class = "antialiased">
<h3 style="text-align:center;">Customer Pending</h3>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col" style="text-align:center;">
            <h5>Customer Name</h5>
        </div>
        <div class="col">
            <h5>Booking Time</h5>
        </div>
        <div class="col">
            <h5>Person</h5>
        </div>
        <div class="col">
            <h5>Accept</h5>
        </div>
        <div class="col">
            <h5>Cancel</h5>
        </div>
    </div>
    @foreach ($book as $booking)
    @if($booking->data()['status']==="pending")
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col" style="text-align:center;">
            <p>{{ $booking->data()['namauser'] }} </p>
        </div>
        <div class="col">
            <p> {{ $booking->data()['waktubooking'] }} </p>
        </div>
        <div class="col">
            <p> {{ $booking->data()['jumlah'] }} </p>
        </div>
        <div class="col">
            <a href="/accept/{{ $booking->id() }}"><img src="{{url('/images/accept.png')}}" width=30px height=30px ></a>
        </div>
        <div class="col">
            <a href="/cancel/{{ $booking->id() }}"><img src="{{url('/images/decline.png')}}" width=30px height=30px ></a>
        </div>
    </div>
    <br>
    @endif
    @endforeach

    <br>
    <hr>
    <h3 style="text-align:center;">Customer History</h3>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col" style="text-align:center;">
            <h5>Customer Name</h5>
        </div>
        <div class="col">
            <h5>Booking Time</h5>
        </div>
        <div class="col">
            <h5>Person</h5>
        </div>
        <div class="col">
            <h5>Note</h5>
        </div>
    </div>

    @foreach ($book as $booking)
    @if($booking->data()['status']!="pending")
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col" style="text-align:center;">
            <p>{{ $booking->data()['namauser'] }} </p>
        </div>
        <div class="col">
            <p> {{ $booking->data()['waktubooking'] }} </p>
        </div>
        <div class="col">
            <p> {{ $booking->data()['jumlah'] }} </p>
        </div>
        @if($booking->data()['status']==="finished")
        <div class="col">
            <p>Booking Has Finished</p>
        </div>
        @elseif($booking->data()['status']==="accepted")
        <div class="col">
            <a href="/finish/{{ $booking->id() }}"><button class="btn btn-success">Finish</button></a>
        </div>
        @else
        <div class="col">
            <p>Booking Has Rejected/Cancelled</p>
        </div>
        @endif
    </div>
    @endif
    <br>
    @endforeach
</body>
</html>
@endsection