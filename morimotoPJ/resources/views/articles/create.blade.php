
@extends('app')

@section('content')

<div style="width:400px; background-color:white; padding:1px 15px 50px 40px; border-radius: 10px;">
    <h2 class="page-header">
        <div align="right">
            <a href="/" class="btn btn-primary">go home</a>
        </div>
        I whisper to...
    </h2>
    
    <form name="form1" action="/articles/store" method="post" id="form1">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <!--<div class="form-group">
            <label>title</label>
        </div>-->
        <input type="hidden" name="title" value="ID" required="required" class="form-control" />
        <div class="form-group">
            <!--<label>body</label>-->
            <textarea name="body" required="required" class="form-control" style="height:100px;width:300px;"></textarea>
        </div>
        
        <button type="bottun" onclick="myFunc();" class="btn btn-default">Write</button>
    </form>
</div>
</div>
<a href="javascript:window.close();" title="exit">close window</a>
@endsection
<script type="text/javascript">
  function myFunc(){
  $('#form1').submit(function(){
  $.ajax({
    url: $(this).attr('action'),
    type: 'get',
    data: $(this).serialize(),
    dataType: 'html'
  })
  //POSTが完了後に処理を行う。
  .always(function(){
    //親ウインドウの関数(func_update)を使い、親ウインドウを更新
    window.opener.func_update;
    //サブウインドウを閉じる
    window.close();
  })
  return false;
})
}
</script>