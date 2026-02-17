@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<h2 class="text-2xl font-bold mb-4">Welcome to the Dashboard</h2>

<div class="bg-white p-6 rounded shadow">
    selamat datang {{ Auth::user()->name }}
</div>
@endsection
