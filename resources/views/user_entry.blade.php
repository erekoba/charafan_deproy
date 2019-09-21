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
        
    </div>
    <div class="content">
        <form method="POST" action="{{url('user')}}" enctype="multipart/form-data">{{ csrf_field() }}
            <div class=user_top>
                <!--<img id=bg-img src="" width=100%></img>-->
                <!--<img id=ft-img src=""></img>-->
            
                
                    <img id=bg_img src="/storage/noimg.svg" width=100%></img>
                    <label id=bg_upload_button class=upload for="bg_input">変更
                    <input id=bg_input type="file" name="bg_img" accept="image/*" capture="camera"></label>
                    <img id=ft_img src="/storage/method-draw-image.svg"></img>
                    <label id=ft_upload_button class=upload for="ft_input">変更
                    <input id=ft_input type="file" name="ft_img" accept="image/*" capture="camera"></label>
                
            </div>
            <div class=contents>
                <div>
                <label class=user_info for="">名前</label>
                <input type="text" name="name" value=""></div>
                <div>
                <label class=user_info for="">自己紹介</label>
                <input type="text" name="prof" value=""></div>
                <div>
                <label class=user_info for="">生年月日</label>
                <input type="date" name="birthday" value=""></div>
                <div>
                <label class=user_info for="">email</label>
                <input type="text" name="email" value=""></div>
                <div class=register_button>
                <input class=post type="submit" value="登録"></div>
                
            
            </div>
        </form>
    </div>
<style>
    body{
        height:812px;
        background: #F0F0F0 0% 0% no-repeat padding-box;
    }
    .contens{
        display:flex;
        flex-direction:column;
        text-align:center;
    }
    #ft_img{
        left: 107px;
        object-fit: cover;
        object-position:0px 0px;
    }
    label > input {
        display:none; /* アップロードボタンのスタイルを無効にする */
    }
    
    .upload {
    color: #4A95E9; /* ラベルテキストの色を指定する */
    background-color: #ffffff;/* ラベルの背景色を指定する */
    border-radius:12px;
    padding: 4px 12px 4px 12px; /* ラベルとテキスト間の余白を指定する */
    border: solid 1px #4A95E9;/* ラベルのボーダーを指定する */
    }
    input{
        width:60%;
        background-color: #F0F0F0;
        border:1px;
        border-bottom:solid 1px #bababa;
    }
    .post{
        width:48px;
        color:#4A95E9;
        background-color:#ffffff;
        border-radius:14px;
        padding: 4px 48px 4px 18px; ; /* ラベルとテキスト間の余白を指定する */
        border: solid 1px #4A95E9;/* ラベルのボーダーを指定する */
    }
    
    #bg_upload_button{
        position:absolute;
        top:72px;
        left:12px;
        z-index:3;
    }
    #ft_upload_button{
        position:absolute;
        top:180px;
        left:60px;
    }
    .register_button{
        width:100%;
        text-align:center;
    }
</style>
@endsection


