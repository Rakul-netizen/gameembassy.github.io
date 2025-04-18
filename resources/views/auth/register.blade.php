<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        body{
            display: flex;
            justify-content: center;
        }

        #register-form{
            border: 1px solid rgb(228, 228, 228);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            margin-top: 140px;
        }

        #register-form h2{
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-size: 24px;
        }

        #register-form input{
            width: 100%;
            margin-top: 15px;
            padding: 10px 12px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            font-size: 14px;
        }

        #register-form button{
            border: none;
            text-transform: uppercase;
            font-weight: bold;
            margin-top: 20px;
            width: 100%;
            padding: 12px 0;
            border-radius: 5px;
            background-color: #aa4aa2;
            color: white;
            font-size: 16px;
        }

        #register-form p{
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        a{
            text-decoration: none;
        }

        #login{
            color: #4285F4;
            cursor: pointer;
        }

    </style>
</head>

<body>

    <div id="register-form" class="register">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row p-0 m-0">
                <div class="col-12">
                    <input type="text" name="name" placeholder="username" required>
                </div>
                <div class="col-12">
                    <input type="email" name="email" placeholder="email address" required>
                </div>
            </div>
            <div class="row p-0 m-0">
                <div class="col-12">
                    <input type="password" name="password" placeholder="password" required>
                </div>
            </div>
            <div class="row p-0 m-0">
                <div class="col-12">
                    <button type="submit">Register</button>
                </div>
            </div>
            <div class="row p-0 m-0">
                <div class="col-12">
                    <p class="notnow">
                        <span>or</span> <br>
                        Already have an account? <a href="/login" id="login">login</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
