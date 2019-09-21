@extends('layouts.app')
@section('content')
    
    <div id="header">
        <div class=navbar>
            <nav class="navbar navbar-light bg-blue">
                <button>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div>charafan</div>
            <button id="logout">ログアウト</button>
        </div>
        <hr width=95% size="1" color=#C9C9C9>
        <div class=navbar_bottom>
            <form action="" method="POST">{{ csrf_field() }}
            <button type="submit" class=header_btm id="profchange">プロフィール変更</button>
            </form>
        </div>
    </div>
    
    <div class="content">
        <div class=user_top>
            <img id=bg_img src="/storage/user_picture/{{$user_detail->u_back_img}}" width=100%></img>
            <img id=ft_img src="/storage/user_picture/{{$user_detail->u_img}}"></img>
            <div id=prof>
                <div class=prof_name></div>
                <div class=prof_comment></div>
                <div class=prof_job>---</div>
            </div>
        </div>
        <div class=contents>
            <div class=hedaing><a>♡マイキャラリスト</a></div>
            <div class=box>
                @foreach($mycharas as $mychara)
                <div id=box1>
                    <div class=inbox>
                        <img src="/storage/chara_img/{{$mychara->chara_picture}}" height=72px>{{$mychara->chara_name}}
                    </div>
                </div>
                @endforeach
            </div>
            <div class=bottom><button>もっとみる</button></div>
            <hr width=95% size="1" color=#C9C9C9>
        </div>
        <div class=contents>
            <div class=hedaing><a>♡マイプロジェクト</a></div>
            <ul class=box>
                <li id=box1></li>
                <li id=box1></li>
                <li id=box1></li>
            </ul>
            <div class=bottom><a>もっとみる</a></div>
            <hr width=95% size="1" color=#C9C9C9>
        </div>
        <div class=contents>
            <div class=hedaing><a>♡マイピクチュア</a></div>
            <ul class=box>
                <li id=box1></li>
                <li id=box1></li>
                <li id=box1></li>
            </ul>
            <div class=bottom><a>もっとみる</a></div>
            <hr width=95% size="1" color=#C9C9C9>
        </div>
    </div>
    
    
    
@endsection