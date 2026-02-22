@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">BWI Calculator</div>
            <div class="card-body">
                <form action="{{ route("result") }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>Weight (kg)</label>
                        <input type="number" step="0.1" name="w" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Height (m)</label>
                        <input type="number" step="0.01" name="m" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Calculate</button>
                </form>

            </div>
@endsection
