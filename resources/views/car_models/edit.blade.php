@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('car_models.index') }}" class="btn btn-dark">Back</a><br><br>
            <div class="card">
                <div class="card-header">Edit Model</div>

                    <div class="card-body">
                        <form action="{{ url('/car_models/' . $car_model->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label text-right">Name: </label>
                                <div class="col-6">
                                    <input type="text" name="name" value="{{ $car_model->name }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="brand" class="col-4 col-form-label text-right">Brand: </label>
                                <div class="col-6">
                                    <select id="brand" name="brand_id" class="form-control" required>
                                        @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" @if ($brand->id == $car_model->car_brand->id) {{ 'selected' }} @endif>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">    
                                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
