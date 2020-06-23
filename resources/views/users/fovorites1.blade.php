@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
           @if(count( $fovorites ) > 0)
    <ul class="list-unstyled">
        @foreach ( $fovorites  as  $fovorite )
            <li class="media mb-3">
              {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($fovorite->user->email, ['size' => 50]) }}" alt="">
               
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $fovorite->user->name, ['user' => $fovorite->user->id]) !!}
                        <span class="text-muted">posted at {{ $fovorite->created_at }}</span>
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($fovorite->content)) !!}</p>
                         @include('user_fovorites.fovorites_button', ['micropost' => $fovorite])
                    </div>
                    
                </div>
            </li>
        @endforeach
    </ul>
  @endif

            
           
        </div>
         
    </div>
@endsection
