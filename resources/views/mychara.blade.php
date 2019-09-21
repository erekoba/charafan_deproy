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
        <div class=contents>
            <div class=hedaing><a>♡マイキャラリスト</a></div>
            
            <form method="POST" action="{{url('mychara_register')}}" enctype="multipart/form-data">{{ csrf_field() }}
                <div class=contents>
                <div>
                <label class=user_info for="">chara_id</label>
                <input type="text" name="chara_id" value="{{$user_detail->chara_id}}"></div>
                <div>
                <label class=user_info for="">user_id</label>
                <input type="text" name="user_id" value="{{$user_detail->user_id}}"></div>
                <div>
                <label class=user_info for="">label_id</label>
                <input type="text" name="label_id" value="1"></div>
                
                <div class=register_button>
                <input class=post type="submit" value="登録"></div>
            </div>
            </form>
        </div>
    </div>

@endsection
