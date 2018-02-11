@extends('app')

@section('content')
<div style="width:600px; background-color:white; padding:30px 30px 30px 30px; border-radius: 10px;">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <table class="table table-striped table-hover">    
        <TR>
            <TD style="width:29%; background-color:ffefd5;">
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
                    </tbody>

                </table>
            </TD>
            <TD style="width:70%; background-color:fdf5e6; padding:0px 0px 0px 30px;">
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
            </TD>
        </TR>
    </TABLE>


</div>
@endsection
<script type="text/javascript">
  function func_update(){
  location.reload();
}
</script>