@if (Auth::id() != $user->id)
    @if (Auth::user()->is_fovorites1($user->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.fovorites2', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('fovorites1', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.fovorite', $user->id]]) !!}
            {!! Form::submit('fovorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif