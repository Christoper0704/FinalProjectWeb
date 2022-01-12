@extends('layouts.navbar')

@section('content')
<body class = "antialiased">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <p> Ini Tombol </p>
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
            <p> Ini Tombol </p>
        </div>
    </div>

</body>
</html>
@endsection