<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Coachwise</title>
    <!-- Laravel Asset Helper for linking the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>
<body>
    <!-- Fullscreen background slideshow (can be customized with images or CSS) -->
    <div class="background-slideshow"></div>

    <!-- Centered Sign In Form -->
    <div class="signin-container">
        <form class="signin-form" action="{{ route('signin.submit') }}" method="POST">
            @csrf <!-- CSRF Token for Laravel Form Protection -->
            <h2>WELCOME BACK TO COACHWISE</h2>

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
            </div>

            <!-- Password Input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-signin">Sign In</button>

            <!-- Sign Up Prompt -->
            <p class="signup-prompt">
                Don't have an account? 
                <a href="{{ (route('signup')) }}" class="signup-link">Sign Up</a>
            </p>
        </form>
    </div>
</body>
</html>
