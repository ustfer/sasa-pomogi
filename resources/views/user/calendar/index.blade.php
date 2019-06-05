@extends('layouts.app')

@section('content')
<div class="container">
    <script>
    window.__events__ = @json($calendar)
    </script>
    <div id="calendar"></div>
</div>
@endsection
