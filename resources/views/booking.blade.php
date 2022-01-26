@extends('layouts.navbar')

@section('content')
<body class = "antialiased">
    
    @foreach ($book as $booking)
    @if($booking->data()['status']==="pending")
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col" style="text-align:center;">
            <img src="{{ $image }}" width=50px height=50px >
        </div>
        <div class="col">
            <p>{{ $booking->data()['namauser'] }} </p>
        </div>
        <div class="col">
            <p> Wednesday, 12 August </p>
        </div>
        <div class="col">
            <p> 11.00 - 13:00 </p>
        </div>
        <div class="col">
            <a href="/accept/{{ $booking->id() }}"><img src="{{url('/images/accept.png')}}" width=30px height=30px ></a>
            <a href="/cancel/{{ $booking->id() }}"><img src="{{url('/images/decline.png')}}" width=30px height=30px ></a>
        </div>
    </div>
    <br>
    @endif
    @endforeach
</body>
</html>
@endsection