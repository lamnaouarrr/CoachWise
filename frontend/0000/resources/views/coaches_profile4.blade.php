<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach John Doe Portfolio</title>
    <!-- Using Laravel's asset() function to link to the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/coaches_profile.css') }}">
</head>
<body>
    <!-- Top Navbar with Back Button -->
    <div class="navbar">
        <button onclick="window.location.href='{{ asset('index.html#coaches') }}'" class="back-btn">Back to Coaches</button>
    </div>

    <!-- Main Profile Container -->
    <div class="portfolio-container">
        <!-- Profile Header Section -->
        <div class="profile-header">
            <!-- Using Laravel's asset() function for images -->
            <img src="{{ asset('images/coaches/basketball1.jpg') }}" alt="John Doe" class="profile-image">
            <div class="profile-info">
                <h1>Lonzo Ball</h1>
                <h2>Fitness Trainer & Body Building Specialist</h2>
                <p>Helping clients reach their full potential through dedicated fitness coaching and personalized workout plans.</p>
            </div>
        </div>

        <!-- Bio Section -->
        <section class="bio-section">
            <h3>About John</h3>
            <p>
                John Doe has over 10 years of experience in the fitness industry. His passion lies in transforming lives through fitness, focusing on strength training, bodybuilding, and healthy lifestyle changes. John believes in a holistic approach that empowers clients not only physically but also mentally.
            </p>
        </section>

        <!-- Achievements Section -->
        <section class="achievements-section">
            <h3>Achievements</h3>
            <ul>
                <li>Certified Fitness Trainer with over 500 successful client transformations</li>
                <li>National Bodybuilding Champion - 2018</li>
                <li>Featured in "Health & Fitness" Magazine - Top 10 Trainers in 2021</li>
                <li>Conducted over 50 fitness workshops worldwide</li>
            </ul>
        </section>

        <!-- Certifications Section -->
        <section class="certifications-section">
            <h3>Certifications</h3>
            <ul>
                <li>National Strength and Conditioning Association (NSCA)</li>
                <li>Certified Nutritionist</li>
                <li>First Aid and CPR Certified</li>
            </ul>
        </section>

        <!-- Coach Schedule Section -->
        <section class="schedule-section">
            <h3>Coach Schedule</h3>
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Time Slot 10:00 - 11:00 -->
                    <tr>
                        <td>10:00 - 11:00</td>
                        <td class="available">Available</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="available">Available</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="available">Available</td>
                        <td class="available">Available</td>
                    </tr>
                    <!-- Time Slot 12:00 - 13:00 -->
                    <tr>
                        <td>12:00 - 13:00</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="available">Available</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="available">Available</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="available">Available</td>
                    </tr>
                    <!-- Time Slot 14:00 - 15:00 -->
                    <tr>
                        <td>14:00 - 15:00</td>
                        <td class="available">Available</td>
                        <td class="available">Available</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="available">Available</td>
                        <td class="unavailable">Unavailable</td>
                    </tr>
                    <!-- Time Slot 16:00 - 17:00 -->
                    <tr>
                        <td>16:00 - 17:00</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="available">Available</td>
                        <td class="available">Available</td>
                        <td class="unavailable">Unavailable</td>
                        <td class="available">Available</td>
                    </tr>
                </tbody>
            </table>
            <button onclick="window.location.href='{{ asset('payment.html') }}'" class="book-btn">Book Coach</button>
        </section>
    </div>
</body>
</html>
