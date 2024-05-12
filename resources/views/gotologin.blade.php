@extends('layouts.app')

@section('content')
    <p>Redirecting to login page...</p>
    <script>
        window.location = "{{ url('/signin') }}";
    </script>
@endsection
