@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Dashboard
</h1>

{{-- Nanti isi metric & chart di sini --}}


<div class="bg-white p-6 rounded shadow">
    selamat datang {{ Auth::user()->name }}
</div>
@endsection
