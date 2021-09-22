<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin Test</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        .container{
            width: 100%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .login-form{
            width: 100%;
            max-width: 400px;
            /* margin: 20px auto; */
            background-color: #ffffff;
            padding: 15px;
            border: 2px dotted #cccccc;
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .form-control {
            margin-bottom: 10px;
        }

        .form-control input {
            padding: 7.5px 15px;
            width: 100%;
            border: 1px solid #cccccc;
            outline: none;
            border-radius: 2px;
        }

        .btn-box {
            text-align: right;
            margin-top: 30px;
        }

        .btn-box .btn-login {
            padding: 7.5px 15px;
            border-radius: 2px;
            background-color: #009999;
            color: #ffffff;
            border: none;
            outline: none;
        }
        .login-header {
            width: 100%;
            min-height: 30px;
        }

        .login-header::after {
            content: "";
            width: 100%;
            border: 1px solid #ccc;
            margin: 10px 0;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
       <div class="login-form">
           <div class="login-header">
               <h1>Login</h1>
            </div>
           <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-control">
                    <label for="">Email:</label>
                    <input type="text" name="email" id="" value="{{old('email')}}">
                </div>
                <div class="form-control">
                <label for="">Password:</label>
                    <input type="password" name="password" id="">
                </div>
                <div class="btn-box">
                    <button type="submit" class="btn btn-login">Login</button>
                </div>
            </form>
       </div>
    </div>
</body>
</html>