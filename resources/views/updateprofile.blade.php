@extends('layouts.navbar')

@section('content')
<body class="antialiased">
        <main class="py-4">
            <div class="container">
                <div class ="row align-items-start">
                    <div class="col-md-6">
                    <form action="{{ route('update-data') }}" method="POST" class="rounded-3 px-md-2">
                    @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="form-outline mb-2">
                                <input id="restaurant_name" type="text" placeholder="Enter New Restaurant Name" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus>

                                @error('restaurant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <input id="operational_day" type="text" placeholder="Enter New Operational Day" class="form-control @error('operational_day') is-invalid @enderror" name="operational_day" value="{{ old('operational_day') }}" required autocomplete="operational_day">

                                @error('operational_day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <input id="operational_time" type="text" placeholder="Enter New Operational Time" class="form-control @error('operational_time') is-invalid @enderror" name="operational_time" value="{{ old('operational_time') }}" required autocomplete="operational_time">

                                @error('operational_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">

                                <select id="restaurant_type" type="text" class="form-select @error('restaurant_type') is-invalid @enderror" name="restaurant_type" required autocomplete="restaurant_type">
                                    @foreach($resto as $res)
                                    <option selected id="selected-option" value="{{ $res->data()['restotype'] }}">{{ $res->data()['restotype'] }}</option>
                                    @endforeach
                                    <option value="Western">Western</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Indonesian">Indonesian</option>
                                    <option value="Korean">Korean</option>
                                    <option value="Desserts">Desserts</option>
                                    <option value="Chinese">Chinese</option>
                                </select>
                                @error('restaurant_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>   
                            
                            <div class="form-outline mb-2">

                                <input id="restaurant_location" type="text" placeholder="Enter New Location Restaurant" class="form-control @error('restaurant_location') is-invalid @enderror" name="restaurant_location" value="{{ old('restaurant_location') }}" required autocomplete="restaurant_location">

                                @error('restaurant_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                    </div> 
                    <div class="col-md-6">
                        <input type="submit"  value="Update" class="btn btn-m mb-1 d-grid gap-2 col-9 mx-auto" style="background-color:#EC7700; color:black; margin-top: 420px;">
                    </div>
                </form>
            </div>
        </main>
</body>
</html>
@endsection