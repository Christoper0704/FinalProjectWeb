@extends('layouts.navbar')

@section('content')
<body class="antialiased">
        <main class="py-4">
            <div class="container">
                <form class="row align-items-start rounded-3 px-md-2">
                    <div class="col-md-4 imageupload">
                        <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <img src="{{url('/images/greyrectangle.png')}}" width="300px" height="200px">
                            <div class="file-upload centered">
                                <input type="file" name="file" />
                                <img src="{{url('/images/plus.png')}}" width="50px" height="50px">
                            </div>
                            <input type="submit" value="Add Restaurant Image" class="btn btn-primary textbottom">
                        </form> 
                    </div>
                    <div class="col-md-4">
                            @csrf

                            <div class="form-outline mb-2">

                                <input id="restaurant_name" type="text" placeholder="Enter Restaurant Name" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus>

                                @error('restaurant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <input id="operational_day" type="text" placeholder="Operational Day" class="form-control @error('operational_day') is-invalid @enderror" name="operational_day" value="{{ old('operational_day') }}" required autocomplete="operational_day">

                                @error('operational_day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <input id="operational_time" type="text" placeholder="Operational Time" class="form-control @error('operational_time') is-invalid @enderror" name="operational_time" value="{{ old('operational_time') }}" required autocomplete="operational_time">

                                @error('operational_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <input id="restaurant_type" type="text" placeholder="Type Restaurant" class="form-control @error('restaurant_type') is-invalid @enderror" name="type" value="{{ old('restaurant_type') }}" required autocomplete="restaurant_type">

                                @error('restaurant_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>   
                            
                            <div class="form-outline mb-2">

                                <input id="restaurant_location" type="text" placeholder="Location Restaurant" class="form-control @error('restaurant_location') is-invalid @enderror" name="type" value="{{ old('restaurant_location') }}" required autocomplete="restaurant_location">

                                @error('restaurant_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-m mb-1 d-grid gap-2 col-9 mx-auto" style="background-color:#EC7700; margin-top: 420px;">Save</button>
                    </div>
                </form>
            </div>
        </main>
</body>
</html>
@endsection
