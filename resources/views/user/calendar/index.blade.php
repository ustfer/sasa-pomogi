@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($user->calendar as $item)
    @dump($item)
    <pre>
        {{json_encode($item)}}
        {{array_map(function ($i) {
            return [
                'event' => $i['event'],
                'start' => $i['started_on'],
                'end' => $['ended_on']
        ];
        }, $item)}}
    </pre>
    @endforeach
    <div id="calendar"></div>
</div>
@endsection
