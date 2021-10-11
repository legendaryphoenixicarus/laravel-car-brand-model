@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">BRANDS</div>

                  <div class="card-body">
                      <a href="{{ route('car_brands.create') }}" class="btn btn-primary pull-right">ADD</a>
                      <br><br>
                      <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($car_brands as $car_brand)
                                    <tr>
                                        <td>{{ $car_brand->name }}</td>
                                        <td class="col-md-2">
                                            <form action="{{ url('/car_brands/' . $car_brand->id) }}" method="post" class="form-inline">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn-group">
                                                    <a href="{{ url('/car_brands/' . $car_brand->id) }}" class="btn btn-success">Edit</a>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush
