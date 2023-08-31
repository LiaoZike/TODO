<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入介面...</title>
</head>
<body>
    <div class="loginBOX">
        <h1>登入介面...未完成</h1>
        <p>管理員介面具備CRUD功能</p>
        <a href="{{ route('admin.verification') }}" class="loginbtn">登入</a>
    </div>
    <style>
        .loginBOX{
            background-color: lavenderblush;
        }
        .loginbtn {
            display: inline-block;
            width: 300px;
            background-color: #0b5ed7;
            color:white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            margin: 5px;
            transition: all .5s;
        }
        .loginbtn:hover{
            background-color: #80bdff;
            color:black;
        }
    </style>
</body>
</html>
