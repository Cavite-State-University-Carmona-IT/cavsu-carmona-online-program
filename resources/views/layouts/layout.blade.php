@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation.nav-component')
    <main>
        {{ $slot }}
    </main>
</div>
@endsection
