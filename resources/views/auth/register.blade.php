<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra HD Registration Form</title>
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

        .register-card {
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

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="file"] { /* Added input[type="file"] */
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #007bff;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="register-card">
            <div class="card-header">Register</div>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"> <!-- Added enctype for file upload -->
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="form-group">
                    <label for="image"> Image</label> <!-- Added label for image -->
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*"> <!-- Added file input -->
                    @error('image')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="buttons">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
