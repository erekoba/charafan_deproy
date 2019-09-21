<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Chara;
use App\Mychara;
use App\user_detail;
use Illuminate\Http\Request;

Route::POST('/chara',function(Request $request){
    //データ登録処理
    $charas = new Chara;
    $charas->chara_name=$request->name;
    $charas->chara_profile=$request->prof;
    $charas->regster_id=1;
    $charas->chara_birthday='test';
    
    $upload_chara_img=$request->chara_img;
    $filePath = $upload_chara_img->store('public/chara_img');
    $charas->chara_picture =str_replace('public/chara_img/', '', $filePath);
    
    $charas->chara_castingtitle=$request->title;
    $charas->chara_parent='test';
    $charas->chara_gender=$request->gender;
    $charas->save();
    
    return redirect('/chara_top');
});

Route::post('/chara_update',function(Request $request){
    // return view('chara_update');
    //キャラデータ更新処理
    
    $chara = Chara::find($request->id);
    $chara->chara_name=$request->name;
    $chara->chara_profile=$request->prof;
    $chara->regster_id=1;
    $chara->chara_birthday='test';
    
    if($request->chara_img){
    $upload_chara_img=$request->chara_img;
    $filePath = $upload_chara_img->store('public/chara_img');
    $chara->chara_picture =str_replace('public/chara_img/', '', $filePath);
    }
    $chara->chara_castingtitle=$request->title;
    $chara->chara_parent='test';
    $chara->chara_gender=$request->gender;
    $chara->save();

    return redirect('/chara_top');
});  

Route::GET('/chara_update/{chara}',function(Chara $chara){
    return view('chara_update',['chara'=>$chara]);
});

Route::get('/chara_entry',function(){
    return view('chara_entry');
});

Route::get('/chara_top',function(){
    $charas=Chara::where('id',4)->get();
    return view('chara_top',['charas'=>$charas]);
});

Route::get('/user_detail', function () {
    $mycharas=user_detail::select()
                ->join('mycharas','mycharas.user_id','=','user_details.id')
                ->join('charas','charas.id','=','mycharas.chara_id')
                ->get();
    $user_detail=user_detail::where('email','aaa')->first();
    
    return view('user_detail',['mycharas'=>$mycharas,'user_detail'=>$user_detail]);
    // return view('user_detail');
});

Route::get('/mychara', function () {
    $user_detail=user_detail::where('email','aaa')
                ->join('mycharas','mycharas.user_id','=','user_details.id')
                ->first();
    
    return view('mychara',['user_detail'=>$user_detail]);
    // return view('user_detail');
});
Route::POST('/mychara_register', function (Request $request) {
    $mycharas = new Mychara;
    $mycharas->chara_id=$request->chara_id;
    $mycharas->user_id=$request->user_id;
    $mycharas->label_id=$request->user_id;
    $mycharas->save();
    return redirect('user_detail');
});


Route::GET('/user_entry', function () {
    // $user_details=user_detail::where('email','ggg')->get();
    // return view('user_entry',['user_details'=>$user_details]);
    return view('user_entry');
});

Route::POST('/user',function(Request $request){
    
    //データ登録処理
    $user_details = new user_detail;
    $user_details->email=$request->email;
    $user_details->pass='test';
    $user_details->l_kana=$request->name;
    $user_details->l_name='test';
    $user_details->f_kana='test';
    $user_details->f_name='test';
    $user_details->u_profile=$request->prof;
    $user_details->birthday = $request->birthday;
    $user_details->gender ='test';
    
    $upload_ft_img=$request->ft_img;
    $filePath_ft = $upload_ft_img->store('public/user_picture');
    
    $user_details->u_img =str_replace('public/user_picture/', '', $filePath_ft);
    
    $upload_bg_img=$request->bg_img;
    $filePath_bg = $upload_bg_img->store('public/user_picture');
    
    $user_details->u_back_img =str_replace('public/user_picture/', '', $filePath_bg);
    $user_details->save();
    return redirect('/user_detail');
    
});

Route::POST('/user_update',function(Request $request){
    
    //データ更新処理
    $user_detail = user_detail::find($request->id);
    $user_detail->email=$request->email;
    $user_detail->l_kana=$request->name;
    $user_detail->u_profile=$request->prof;
    $user_detail->birthday = $request->birthday;
    
    if($request->bg_img){
    $change_bg_img=$request->bg_img;
    $filePath_bg = $change_bg_img->store('public/user_picture');
    $user_detail->u_back_img =str_replace('public/user_picture/', '', $filePath_bg);
    }
    
    if($request->ft_img){
    $change_ft_img=$request->ft_img;
    $filePath_ft = $change_ft_img->store('public/user_picture');
    $user_detail->u_img =str_replace('public/user_picture/', '', $filePath_ft);
    }
    
    $user_detail->save();
    return redirect('/user_detail');
});    

Route::POST('/user_update/{user_detail}',function(user_detail $user_detail){
    return view('user_update',['user_detail'=>$user_detail]);
});