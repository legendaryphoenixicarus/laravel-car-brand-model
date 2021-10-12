@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('car_brands.index') }}" class="btn btn-dark">Back</a><br><br>
            <div class="card">
                <div class="card-header">Edit Brand</div>

                    <div class="card-body">
                        <form action="{{ url('/car_brands/' . $car_brand->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label text-right">Name: </label>
                                <div class="col-6">
                                    <input type="text" name="name" value="{{ $car_brand->name }}" class="form-control" focus required>
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
