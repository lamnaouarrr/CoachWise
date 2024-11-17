<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Coachwise</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}"> <!-- Using Laravel asset helper -->
</head>
<body>
    <!-- Background with overlay -->
    <div class="background">
        <div class="overlay"></div>
    </div>

    <!-- Top Navigation Links -->
    <div class="top-links">
        <button onclick="window.location.href='{{ route('home') }}'" class="back-to-home-btn">🏠 Back to Home</button>
        <div>
            <button onclick="window.location.href='{{ route('signin') }}'" class="signin-btn">Already have an account? Sign In</button>
        </div>
    </div>

    <!-- Main Sign-Up Choice -->
    <div id="signup-choice" class="step">
        <h2>I am looking for a</h2>
        <button class="animated-btn" onclick="selectSignupType('customer')">Customer</button>
        <button class="animated-btn" onclick="selectSignupType('coach')">Coach</button>
    </div>

    <!-- Customer Type Choice -->
    <div id="customer-type-choice" class="step" style="display: none;">
        <h2>Are you signing up as?</h2>
        <button class="animated-btn" onclick="selectCustomerType('personal')">Personal</button>
        <button class="animated-btn" onclick="selectCustomerType('institution')">Institution</button>
        <div style="text-align: left;">
            <button class="back-btn" onclick="goBackToSignupChoice()">👈 Back</button>
        </div>
    </div>

    <!-- Customer Personal Form -->
    <div id="customer-personal-form" class="step" style="display: none;">
        <h2>Personal Information</h2>
        <form id="signup-form" action="{{ route('signup.submit') }}" method="POST">
            @csrf <!-- CSRF Token for Laravel Form Protection -->
            <input type="text" id="first-name" name="first_name" placeholder="First Name" required>
            <input type="text" id="last-name" name="last_name" placeholder="Family Name" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="confirm-password" name="password_confirmation" placeholder="Confirm Password" required>
            <input type="date" id="birthday" name="birthday" placeholder="Birthday" required>
            <input type="tel" id="phone-number" name="phone" placeholder="Phone Number" required>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
                <option>Prefer not to say</option>
            </select>
            <label>Choose your sports:</label>
            <select id="sport" name="sport" required>
                <option value="" disabled selected>Sport</option>
                <option>Football</option>
                <option>Volleyball</option>
                <option>Swimming</option>
                <option>Tennis</option>
            </select>
            <button type="submit" class="animated-btn">Submit</button>
            <div style="text-align: left;">
                <button type="button" class="back-btn" onclick="goBackToCustomerType()">👈 Back</button>
            </div>
        </form>
    </div>

    <!-- Customer Institution Form -->
    <div id="customer-institution-form" class="step" style="display: none;">
        <h2>Institution Information</h2>
        <form action="{{ route('signup.submit') }}" method="POST">
            @csrf
            <input type="text" name="institution_name" placeholder="Institution Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="email" name="contact_email" placeholder="Contact Email" required>
            <input type="tel" name="phone_number" placeholder="Phone Number" required>
            <input type="url" name="website" placeholder="Website">
            <label>Select your sports:</label>
            <select name="sport" required>
                <option value="" disabled selected>Sport</option>
                <option>Football</option>
                <option>Volleyball</option>
                <option>Swimming</option>
                <option>Tennis</option>
            </select>
            <button type="submit" class="animated-btn">Submit</button>
            <div style="text-align: left;">
                <button type="button" class="back-btn" onclick="goBackToCustomerType()">👈 Back</button>
            </div>
        </form>
    </div>

    <!-- Coach Form -->
    <div id="coach-form" class="step" style="display: none;">
        <h2>Coach Information</h2>
        <form id="coach-info-form" action="{{ route('signup.submit') }}" method="POST">
            @csrf
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Family Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <input type="date" name="birthday" placeholder="Birthday" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <select name="gender" required>
                <option value="" disabled selected>Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select>
            <button type="button" class="animated-btn" onclick="showCoachProfessionalForm()">Next</button>
            <div style="text-align: left;">
                <button type="button" class="back-btn" onclick="goBackToCustomerOrCoachChoice()">👈 Back</button>
            </div>
        </form>
    </div>

    <!-- Coach Professional Form -->
    <div id="coach-professional-form" class="step" style="display: none;">
        <h2>Professional Information</h2>
        <form action="{{ route('signup.submit') }}" method="POST">
            @csrf
            <label>Sports Coached:</label>
            <select name="sports_coached" required>
                <option value="" disabled selected>Sport</option>
                <option>Football</option>
                <option>Volleyball</option>
                <option>Swimming</option>
                <option>Tennis</option>
            </select>
            <input type="number" name="years_experience" placeholder="Years of Experience" required>
            <select name="coaching_level" required>
                <option value="" disabled selected>Coaching Level</option>
                <option>Beginner</option>
                <option>Intermediate</option>
                <option>Advanced</option>
                <option>Professional</option>
            </select>
            <label>Upload Certificates:</label>
            <input type="file" name="certificates" accept=".pdf,.doc,.docx">
            <input type="number" name="customer_age_min" placeholder="Customer Age Range (Min)" required>
            <input type="number" name="customer_age_max" placeholder="Customer Age Range (Max)" required>
            <input type="text" name="previous_teams" placeholder="Previous Teams/Clubs Coached (Optional)">
            <label>Availability:</label>
            <input type="file" name="availability_document" accept=".pdf,.doc,.docx">
            <input type="url" name="linkedin" placeholder="LinkedIn">
            <input type="url" name="facebook" placeholder="Facebook">
            <input type="url" name="instagram" placeholder="Instagram">
            <input type="url" name="twitter" placeholder="Twitter">
            <button type="submit" class="animated-btn">Submit</button>
            <div style="text-align: left;">
                <button type="button" class="back-btn" onclick="goBackToCoachInformation()">👈 Back</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/signup.js') }}"></script>
</body>
</html>
