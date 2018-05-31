@extends('layouts.app')

@section('content')

<h1>メッセージ一覧</h1>

   @if (count($daikis) > 0)
        
    @foreach ($daikis as $daiki)
        <ul>
                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->title }} > {{ $message->content }}</li>
    @endforeach
        </ul>
    @endif
        {!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection
