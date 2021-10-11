@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('car_brands.index') }}" class="btn btn-dark">Back</a><br><br>
            <div class="card">
                <div class="card-header">New Brand</div>

                    <div class="card-body">
                        <form action="{{ route('car_brands.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-6 control-label">Name: </label>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary pull-right">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
