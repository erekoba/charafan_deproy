$(function(){
   $("#bg_input").on('change',function(e){
       // 1枚だけ表示する
        var file = e.target.files[0];
        console.log(file);

        // ファイルのブラウザ上でのURLを取得する
        var blobUrl = window.URL.createObjectURL(file);

        // img要素に表示
        $('#bg_img').attr('src', blobUrl);
   });
   
   $("#ft_input").on('change',function(e){
       // 1枚だけ表示する
        var file = e.target.files[0];

        // ファイルのブラウザ上でのURLを取得する
        var blobUrl = window.URL.createObjectURL(file);

        // img要素に表示
        $('#ft_img').attr('src', blobUrl);
   })
    
});