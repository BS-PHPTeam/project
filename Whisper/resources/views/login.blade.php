@extends('header')
<center>
    <table width="80%">
        <tr>
            <td align="center" bgcolor="#E9546B" height="85px">
                <font color="#fffff" size="18px"><b>[ログイン]←ここの値は画面によって変える</b></font>
            </td>
        </tr>
    </table>
    <br/>
    <form name ="ログイン" method="post" action="/cgi-bin/login.cgi">
        <div class="box">
            <table>
                <tr>
                    <td>
                        <input type="text" name="uid" size="10" maxlength="10" autocomplete="OFF" placeholder="ID"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pwd" size="10" maxlength="10" autocomplete="OFF" placeholder="パスワード"/>
                    </td>
                </tr>
            </table>
            <br/>
            <input type="submit" id="login" value="ログイン"/>
            <br/>
            <br/>
            パスワードをお忘れの方はこちら
            <br/>
            <br/>
            <input type="submit" id="newRegister" value="新規登録"/>
        </div>
    </form>
    <br/><br/><br/><br/><br/><br/>
</center>
@extends('footer')
