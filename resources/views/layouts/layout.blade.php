@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gray-100">
    <main>
        {{ $slot }}
    </main>
</div>
@endsection
