
    @if (Auth::user()->is_fovorites1($micropost->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.fovorites2', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('fovorites1', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.fovorite', $micropost->id]]) !!}
            {!! Form::submit('fovorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
