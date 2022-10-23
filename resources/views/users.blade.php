

@extends('layouts.default')
@section('title', 'Teste2')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/users.css')}}">
@endpush

@section('content')
    


@foreach ($users as $user)
    <p>This is user {{ $user->name }}</p>
@endforeach

@endsection

@push('scripts')
    <script>
        console.log("asdasd");
    </script>
@endpush