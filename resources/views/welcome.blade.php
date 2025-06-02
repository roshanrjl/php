@extends('layouts.master')
@section('content')
    <div class="bg-amber-800">
        <h1 class="text-white bg-amber-600">this is {{$name}} page </h1>
        <a href="{{ route('dashboard') }}" class="text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded">Dashboard</a>
    </div>
@endsection