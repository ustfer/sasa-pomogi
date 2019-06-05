@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($user->calendar as $item)
    <pre>
    {{json_encode($item)}}
    </pre>
    @endforeach
    <script>
    window.__events__ = @json($calendar)
    </script>
    <div id="calendar"></div>
</div>
@endsection
