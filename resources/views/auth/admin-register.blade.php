<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div id="register-form" class="register">
        <h2>Register</h2>
        <form action="{{ route('admin.register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6">
                    <input type="text" name="name" placeholder="username" required>
                </div>
                <div class="col-12 col-lg-6">
                    <input type="email" name="email" placeholder="email address" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="password" name="password" placeholder="password" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="password" name="password_confirmation" placeholder="password" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit">Register</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="notnow">
                        <span>or</span> <br>
                        <span id="cls-register">not now</span> <br>
                        Already have an account? <span id="login">login</span>
                    </p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
