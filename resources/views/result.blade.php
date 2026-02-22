@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Calculator</div>

                    <div class="card-body">
                        <h2>Result is {{ $res }}</h2>
                                <hr>
                                <a href="{{ route('bwi.index') }}" class="btn btn-success">Back</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
