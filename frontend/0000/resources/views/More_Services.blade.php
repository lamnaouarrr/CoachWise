<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Services - Coaching Website</title>
    <!-- Using Laravel's asset() function for linking the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    </style>
</head>
<body>
    <div class="services-contents">
        <h1 class="services-title2">Explore More of Our Services</h1>

        <!-- Hiking Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-hiking"></i> 
            </div>
            <div class="service-desc">
                <h2>Hiking Coaching</h2>
                <p>Explore nature and improve your fitness with guided hiking experiences suitable for all levels.</p>
            </div>
        </div>
        
        <!-- Golf Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-golf-ball"></i>
            </div>
            <div class="service-desc">
                <h2>Golf Coaching</h2>
                <p>Master your swing and learn the strategies of the game with our professional golf coaches.</p>
            </div>
        </div>
        
        <!-- Basketball Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-basketball-ball"></i> 
            </div>
            <div class="service-desc">
                <h2>Basketball Training</h2>
                <p>Enhance your skills on the court with our basketball training sessions focused on technique and teamwork.</p>
            </div>
        </div>
        
        <!-- Ski Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-skiing"></i> 
            </div>
            <div class="service-desc">
                <h2>Ski Coaching</h2>
                <p>Learn skiing techniques and improve your performance on the slopes with our expert instructors.</p>
            </div>
        </div>
        
        <!-- Team Building Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-people-arrows"></i> 
            </div>
            <div class="service-desc">
                <h2>Team Building Workshops</h2>
                <p>Participate in our team-building activities designed to foster collaboration and improve group dynamics.</p>
            </div>
        </div>
        
        <!-- Table Tennis Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-table-tennis"></i> 
            </div>
            <div class="service-desc">
                <h2>Table Tennis Coaching</h2>
                <p>Improve your table tennis skills with expert coaching sessions tailored to all skill levels.</p>
            </div>
        </div>
        
        <!-- Football Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-futbol"></i> 
            </div>
            <div class="service-desc">
                <h2>Football Coaching</h2>
                <p>Learn football techniques and strategies with our experienced coaches in a team-building environment.</p>
            </div>
        </div>
        
        <!-- Karate Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-hand-rock"></i> 
            </div>
            <div class="service-desc">
                <h2>Karate</h2>
                <p>Build discipline and self-defense skills in our karate classes, suitable for all ages and skill levels.</p>
            </div>
        </div>
        
        <!-- Bicycle Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-biking"></i> 
            </div>
            <div class="service-desc">
                <h2>Bicycle Coaching</h2>
                <p>Enhance your cycling skills and fitness through guided cycling sessions, whether for recreation or competition.</p>
            </div>
        </div>
        
        <!-- Volleyball Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-volleyball-ball"></i> 
            </div>
            <div class="service-desc">
                <h2>Volleyball Coaching</h2>
                <p>Join our volleyball training to learn techniques and teamwork from experienced coaches.</p>
            </div>
        </div>

        <!-- Mental Coaching Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-brain"></i> 
            </div>
            <div class="service-desc">
                <h2>Mental Coaching</h2>
                <p>Our mental coaching programs help you build resilience, focus, and a positive mindset for life and sport.</p>
            </div>
        </div>
        
        <!-- Fitness Coaching Service -->
        <div class="service-box">
            <div class="service-icon-box">
                <i class="fas fa-dumbbell"></i> 
            </div>
            <div class="service-desc">
                <h2>Fitness</h2>
                <p>Our fitness sessions focus on helping you build strength, improve stamina, and achieve your wellness goals.</p>
            </div>
        </div>

        <!-- Note Section -->
        <div class="note">
            Explore our extensive range of services! Return to our homepage to access the search feature, allowing you to discover tailored options that meet your unique needs.
        </div>

        <!-- Back to Homepage Button -->
        <button onclick="window.location.href='{{ asset('index.html') }}'" class="see-more-btn">Back to Homepage!</button>
    </div>
</body>
</html>
