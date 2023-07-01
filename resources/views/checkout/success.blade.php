@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-success">
            {{ $message }}
        </div>
        <p>Redirecting to login page...</p>
    </div>
@endsection

@section('scripts')
    <script>
        setTimeout(function() {
            window.location.href = "{{ route('login') }}";
        }, 2000); // Redirect after 2 seconds
    </script>
@endsection