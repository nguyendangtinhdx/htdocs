<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
    body{background: #CCC}
    table{
        margin: auto;
        margin-top: 30px;
        width: 300px;
    }
    table,tr,td{
        border-collapse: collapse;
        border: 1px solid #555;
        background: #C5F5FE;
        padding: 5px 10px;
    }
    .title{
        text-align: center;
        font-size: 20px;
    }
    td{font-weight: bold;}
    </style>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td class="title" colspan="2">
                    Thông tin đăng nhập
                </td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input name="txtUn" type="text" class="form-control input-sm" height="5" id="email" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input name="txtPw" type="password" class="form-control input-sm" id="pwd" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                    <td><input name="btnLogin" type="submit" class="btn btn-primary btn-sm" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>
