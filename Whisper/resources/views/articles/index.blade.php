@extends('app')

@section('content')
<div style="width:600px; background-color:white; padding:30px 30px 30px 30px; border-radius: 10px;">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <table class="table table-striped table-hover">    
        <tr>
            
            
<div class="gblnv_box">
<a class="menu-trigger" href="#"> <!-- ←ハンバーガーボタン -->
	<span></span>
	<span></span>
</a>
<div class="gblnv_block">
	<ul class="gblnv_list"> <!-- ←ハンバーガーボタン内、グローバルメニュー -->
		<li><a href="articles/index">一覧</a></li>
		<li><a href="articles/create">投稿</a></li>
	</ul>
</div>
</div>
        
        
            <td style="width:29%; background-color:ffefd5;">
                <table>
                    <tr>
                        <td>
                            <hr>
                            <div><a href ="articles/index" class="btn btn-primary">一覧</a></div>
                            <hr>
                            <div><a href="articles/create" class="btn btn-primary">投稿<i class="fa fa-twitter"></i></a></div>
                            <hr>
                            <div><a href="https://facebook.com/" class="btn btn-primary">プロフィール<i class="fa fa-facebook"></i></a></div>
                            <hr>
                            <div><a href="http://dribbble.com/gian_michelle" class="btn btn-primary">ホーム<i class="fa fa-dribbble"></i></a></div>
                            <hr>
                            <div><a href="http://behance.net/gianm" class="btn btn-primary">サインアウト<i class="fa fa-behance"></i></a></div>
                            <hr>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width:70%; background-color:fdf5e6; padding:0px 0px 0px 30px;">
                <table>
                    <tr>
                    <h2>List</h2>
                        @foreach($articles as $article)
                    <tr>
                        <td>
                            <hr>
                            {{{ $article->body }}}
                        </td>
                        <td  rowspan="2" width="10px"></td>
                        <td  rowspan="2">
                              <a href="/articles/show/{{{ $article->id }}}" class="btn btn-default btn-xs">詳細</a>
                    <a href="/articles/edit/{{{ $article->id }}}" class="btn btn-success btn-xs">編集</a>
                    <a href="/articles/destroy/{{{ $article->id }}}" class="btn btn-danger btn-xs">削除</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{{ $article->created_at }}}
                            
                <hr>
                        </td>
                    </tr>
                </tr>
                    @endforeach
                </table>
            </td>
        </tr>
    </table>


</div>

@endsection


<script type="text/javascript">
$(document).ready(function() {
	$(".menu-trigger").click(function () {
	  $(this).toggleClass("active");
	  $(this).next().toggleClass("onanimation");
	  $('ul li').hide();
	  $('ul li').each(function(i) {
	 	 $(this).delay(80 * i).fadeIn(500);
	  });
	});
});

//  function func_update(){
//  location.reload();
//}
</script>