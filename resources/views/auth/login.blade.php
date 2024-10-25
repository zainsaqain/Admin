<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra HD Login Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f0f0f0, #d9e2ec);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .login-card {
            background-color: white;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 40px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .card-header {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        .form-check-label {
            margin-left: 5px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="card-header">Login</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group remember-me">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Remember Me</label>
                </div>

                <div class="form-group buttons">
                    <button type="submit" class="btn">Login</button>
                    @if (Route::has('password.request'))
                        <a class="forgot-password" href="{{ route('password.request') }}">Forgot Your Password?</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>
</html>
