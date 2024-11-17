<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoachWise</title>
    <link rel="icon" href="images/home/logo .png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400&display=swap">
</head>
<body>
<div class="background">
    <div class="overlay"></div>
    <div class="navbar">
        
        <img src="{{ asset('images/home/logo .png') }}" alt="Logo" class="logo">
        <ul class="nav-links">
            <li><a href="#">HOME</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#coaches">COACHES</a></li> 
            <li><a href="#blog">BLOG</a></li>
            <li><a href="#about us">ABOUT US</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
      
        <button class="login-btn" onclick="location.href='{{ route('signin') }}'">Log In</button>


        
    </div>
    <div class="content">
        <h1 class="title">Find the Best Coaches to Guide You</h1>
        <p class="subtitle">Empowering you to achieve your goals with personalized coaching</p>
        <div class="options">
            <div class="search-container">
                <select class="category-select">
                    <option value="" disabled selected>What are you looking for?</option>
                    <option value="life-coaching">I'm looking for a coach</option>
                    <option value="career-coaching">I'm looking for a trainee</option>
                </select>
                <input type="text" class="search-input" placeholder="Search...">
                <button class="search-btn">Search</button>
            </div>
            <button class="join-btn" id="join-btn" onclick="location.href='signup.html'">Join Us</button>
           
        </div>
    </div>
</div>


   <!-- SERVICES CONTENT STARTS -->
<div class="services-contents" id="services">
    <!--<h2 class="services-title">Services</h2>-->
    <h1 class="services-title2"> SERVICES WE OFFER</h1>

    <div class="service-box">
        <div class="service-icon-box" id="service-icon">
            <span class="material-symbols-outlined">fitness_center</span>
        </div>
        <div class="service-desc">
            <h2>Body Building</h2>
            <p>Our body building programs help you build strength and achieve your fitness goals with personalized plans.</p>
        </div>
    </div>

    <div class="service-box">
        <div class="service-icon-box" id="service-icon">
            <span class="material-symbols-outlined">self_improvement</span>
        </div>
        <div class="service-desc">
            <h2>Yoga</h2>
            <p>Find balance and peace with our yoga classes, designed to improve flexibility and mindfulness for all levels.</p>
        </div>
    </div>
    
    <div class="service-box">
        <div class="service-icon-box" id="service-icon">
            <span class="material-symbols-outlined">sports_mma</span>
        </div>
        <div class="service-desc">
            <h2>Boxing</h2>
            <p>Experience the thrill of boxing while getting fit. Our trainers provide a safe and encouraging environment.</p>
        </div>
    </div>

    <div class="service-box">
        <div class="service-icon-box" id="service-icon">
            <span class="material-symbols-outlined">directions_run</span>
        </div>
        <div class="service-desc">
            <h2>Running Coaching</h2>
            <p>Improve your running skills with our coaching programs designed for both beginners and experienced runners.</p>
        </div>
    </div>

    <div class="service-box">
        <div class="service-icon-box" id="service-icon">
            <span class="material-symbols-outlined">pool</span>
        </div>
        <div class="service-desc">
            <h2>Swimming</h2>
            <p>Join our swimming classes to enhance your technique and enjoy the benefits of water fitness.</p>
        </div>
    </div>

    <div class="service-box">
        <div class="service-icon-box" id="service-icon">
            <span class="material-symbols-outlined">favorite</span>
        </div>
        <div class="service-desc">
            <h2>Health Coaching</h2>
            <p>Work with our health coaches to achieve a holistic approach to your wellness journey.</p>
        </div>
    </div>
    
    <div class="service-box">
        <div class="service-icon-box" id="service-icon">
            <span class="material-symbols-outlined">sports_basketball</span>
        </div>
        <div class="service-desc">
            <h2>Basketball Coaching</h2>
            <p>Enhance your basketball skills with professional coaching sessions tailored to all experience levels.</p>
        </div>
    </div>
    
    <div class="service-box">
        <div class="service-icon-box" id="service-icon">
            <span class="material-symbols-outlined">sports_tennis</span>
        </div>
        <div class="service-desc">
            <h2>Tennis Coaching</h2>
            <p>Join our tennis coaching program to improve your technique and learn from experienced trainers.</p>
        </div>
    </div>
    
   
    <button onclick="window.location.href='{{ asset('More_Services.html') }}'" class="see-more-btn">
        Check Out More Services on Our Homepage!
    </button>
</div>
<!-- SERVICES CONTENT ENDS -->

   
  <!-- COACHES CONTENT STARTS -->
<div class="coaches-contents" id="coaches">
    <h2 class="coaches-title">OUR COACHES</h2>
    <div class="coaches-grid">
        <div class="coach-card">
            <!-- Updated image path using Laravel's asset() -->
            <img src="{{ asset('images/coaches/fitnesse.jpg') }}" alt="Coach 1" class="coach-image">
            <h3 class="coach-name">John Doe</h3>
            <p class="coach-specialist">Fitness Trainer</p>
            <p class="coach-price">$50/hour</p>
            <button class="view-profile-btn" onclick="window.location.href='{{ asset('coaches_profile.html') }}'">View Profile</button>
        </div>
        <div class="coach-card">
            <!-- Updated image path using Laravel's asset() -->
            <img src="{{ asset('images/coaches/yoga.jpg') }}" alt="Coach 2" class="coach-image">
            <h3 class="coach-name">Jane Smith</h3>
            <p class="coach-specialist">Yoga Instructor</p>
            <p class="coach-price">$40/hour</p>
            <button class="view-profile-btn" onclick="window.location.href='{{ asset('coaches_profile1.html') }}'">View Profile</button>
        </div>
        <div class="coach-card">
            <!-- Updated image path using Laravel's asset() -->
            <img src="{{ asset('images/coaches/box.jpg') }}" alt="Coach 3" class="coach-image">
            <h3 class="coach-name">Mohammed Rabii</h3>
            <p class="coach-specialist">Boxing Coach</p>
            <p class="coach-price">$60/hour</p>
            <button class="view-profile-btn" onclick="window.location.href='{{ asset('coaches_profile2.html') }}'">View Profile</button>
        </div>
        <div class="coach-card">
            <!-- Updated image path using Laravel's asset() -->
            <img src="{{ asset('images/coaches/running.jpg') }}" alt="Coach 4" class="coach-image">
            <h3 class="coach-name">James Lincoln</h3>
            <p class="coach-specialist">Running Coach</p>
            <p class="coach-price">$45/hour</p>
            <button class="view-profile-btn" onclick="window.location.href='{{ asset('coaches_profile3.html') }}'">View Profile</button>
        </div>
        <div class="coach-card">
            <!-- Updated image path using Laravel's asset() -->
            <img src="{{ asset('images/coaches/basketball.jpg') }}" alt="Coach 5" class="coach-image">
            <h3 class="coach-name">Lonzo Ball</h3>
            <p class="coach-specialist">Basketball Coach</p>
            <p class="coach-price">$55/hour</p>
            <button class="view-profile-btn" onclick="window.location.href='{{ asset('coaches_profile4.html') }}'">View Profile</button>
        </div>
    </div>
</div>
<!-- COACHES CONTENT ENDS -->



<!-- WHAT PEOPLE SAY ABOUT US CONTENT STARTS -->
<div class="testimonials-contents">
    <h2 class="testimonials-title">CHECK OUT WHAT PEOPLE SAID ABOUT OUR COACHES</h2>
    <div class="testimonials-grid">
    
        <div class="testimonial-card">
            <div class="profile-container">
                <!-- Updated image path using Laravel's asset() -->
                <img src="{{ asset('images/users/user1.jpeg') }}" alt="User 1" class="testimonial-image">
                <div class="profile-details">
                    <h3 class="testimonial-name">Alice Johnson</h3>
                    <p class="testimonial-role">Life Coach Client</p>
                </div>
            </div>
            <div class="testimonial-rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star half">&#9733;</span>
            </div>
            <p class="testimonial-text">"I had an amazing experience with my coach. They really understood my goals and helped me achieve them!"</p>
        </div>

        <div class="testimonial-card">
            <div class="profile-container">
                <!-- Updated image path using Laravel's asset() -->
                <img src="{{ asset('images/users/user2.jpg') }}" alt="User 2" class="testimonial-image">
                <div class="profile-details">
                    <h3 class="testimonial-name">Mark Smith</h3>
                    <p class="testimonial-role">Fitness Training Client</p>
                </div>
            </div>
            <div class="testimonial-rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9734;</span>
            </div>
            <p class="testimonial-text">"The guidance and support I've received have been life-changing. Highly recommend!"</p>
        </div>

        <div class="testimonial-card">
            <div class="profile-container">
                <!-- Updated image path using Laravel's asset() -->
                <img src="{{ asset('images/users/user3.jpg') }}" alt="User 3" class="testimonial-image">
                <div class="profile-details">
                    <h3 class="testimonial-name">Sarah Lee</h3>
                    <p class="testimonial-role">Yoga Client</p>
                </div>
            </div>
            <div class="testimonial-rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star half">&#9733;</span> <!-- Half-star using 'half' class -->
            </div>
            <p class="testimonial-text">"The best coaching experience I've ever had. My coach was truly dedicated to my success!"</p>
        </div>

        <div class="testimonial-card">
            <div class="profile-container">
                <!-- Updated image path using Laravel's asset() -->
                <img src="{{ asset('images/users/user4.jpg') }}" alt="User 4" class="testimonial-image">
                <div class="profile-details">
                    <h3 class="testimonial-name">John Davis</h3>
                    <p class="testimonial-role">Basketball Client</p>
                </div>
            </div>
            <div class="testimonial-rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
            <p class="testimonial-text">"I saw a huge improvement in my shooting accuracy after working with my coach. Their advice on footwork and positioning has been invaluable!"</p>
        </div>
        
    </div>
</div>
<!-- WHAT PEOPLE SAY ABOUT US CONTENT ENDS -->

<!-- CLIENT SUCCESS STORIES / CASE STUDIES STARTS -->
<div class="success-stories-contents">
    <h2 class="success-stories-title">Client Success Stories</h2>
    <div class="success-stories-grid">
        <!-- Success Story 1 -->
        <div class="success-story-card">
            <div class="client-info">
                <!-- Updated image path using Laravel's asset() -->
                <img src="{{ asset('images/users/user1.jpeg') }}" alt="Client 1" class="client-image">
                <div class="client-details">
                    <h3 class="client-name">Isabella Rose Montgomery</h3>
                    <p class="client-role">Team Building Workshops Client</p>
                </div>
            </div>
            <div class="story-details">
                <h4>Challenge</h4>
                <p>Isabella's team was facing communication issues and a lack of collaboration, leading to decreased productivity.</p>
                <h4>Solution</h4>
                <p>Through our team-building workshops, we focused on improving communication, trust, and collaboration within the team.</p>
                <h4>Results</h4>
                <p>After completing the workshop, Isabella reported a significant improvement in team dynamics, with better cooperation and higher morale.</p>
            </div>
        </div>

        <!-- Success Story 2 -->
        <div class="success-story-card">
            <div class="client-info">
                <!-- Updated image path using Laravel's asset() -->
                <img src="{{ asset('images/clients/client2.jpg') }}" alt="Client 2" class="client-image">
                <div class="client-details">
                    <h3 class="client-name">Alexander Bennett</h3>
                    <p class="client-role">Karate Coaching Client</p>
                </div>
            </div>
            <div class="story-details">
                <h4>Challenge</h4>
                <p>Alexander had been struggling with self-confidence and discipline in her Karate practice, often getting frustrated with her progress.</p>
                <h4>Solution</h4>
                <p>We focused on building her mental discipline, setting clear goals, and incorporating mindfulness techniques into her training.</p>
                <h4>Results</h4>
                <p>Alexander became more disciplined, gained confidence, and achieved a new belt level within 6 months, while also improving her focus and strength.</p>
            </div>
        </div>

        <!-- Success Story 3 -->
        <div class="success-story-card">
            <div class="client-info">
                <!-- Updated image path using Laravel's asset() -->
                <img src="{{ asset('images/clients/client3.jpg') }}" alt="Client 3" class="client-image">
                <div class="client-details">
                    <h3 class="client-name">David Brown</h3>
                    <p class="client-role">Ski Coaching Client</p>
                </div>
            </div>
            <div class="story-details">
                <h4>Challenge</h4>
                <p>David had been struggling with his skiing technique, particularly on advanced slopes, and felt he wasn't improving fast enough.</p>
                <h4>Solution</h4>
                <p>Through personalized coaching sessions, we focused on refining his technique, improving balance, and increasing his confidence on difficult terrain.</p>
                <h4>Results</h4>
                <p>David now skis with greater confidence and improved technique, able to navigate advanced slopes with ease and agility.</p>
            </div>
        </div>
    </div>
</div>
<!-- CLIENT SUCCESS STORIES / CASE STUDIES ENDS -->




<!-- EXCLUSIVE COACHING PACKAGES & VIP PROGRAMS STARTS -->
<div class="vip-packages-contents">
    <h2 class="vip-packages-title">Exclusive Coaching Packages & VIP Programs</h2>
    <p class="vip-packages-description">Unlock premium coaching services tailored to your unique needs. With personalized sessions, VIP events, and one-on-one support, our exclusive coaching packages are designed for those who want to elevate their success.</p>
    
    <div class="vip-packages-grid">
        <!-- VIP Package 1: Silver Package -->
        <div class="vip-package-card">
            <div class="vip-package-header">
                <h3 class="vip-package-name">Silver</h3>
                <div class="vip-package-price-circle">$5,000</div>
            </div>
            
            <ul class="vip-package-details">
                <li>One-on-One Coaching Sessions</li>
                <li>Access to VIP Webinars</li>
                <li>Exclusive Resources and Tools</li>
            </ul>
            
            <button onclick="window.location.href='{{ asset('payment.html') }}'" class="vip-book-button">Book plan</button>
        </div>

        <!-- VIP Package 2: Gold Package -->
        <div class="vip-package-card">
            <div class="vip-package-header">
                <h3 class="vip-package-name">Gold</h3>
                <div class="vip-package-price-circle">$8,000</div>
            </div>
          
            <ul class="vip-package-details">
                <li>Tailored Coaching Program</li>
                <li>VIP Access to Coaching Events</li>
                <li>Ongoing Support and Mentorship</li>
            </ul>
            <button onclick="window.location.href='{{ asset('payment.html') }}'" class="vip-book-button">Book plan</button>
        </div>

        <!-- VIP Package 3: Platinum Package (Recommended) -->
        <div class="vip-package-card">
            <div class="recommended-tag">Recommended</div>
            <div class="vip-package-header">
                <h3 class="vip-package-name">Platinum</h3>
                <div class="vip-package-price-circle">$12,000</div>
            </div>
           
            <ul class="vip-package-details">
                <li>Fully Personalized Coaching</li>
                <li>Exclusive VIP Retreats and Events</li>
                <li>Priority Access to All Services</li>
            </ul>
            <button onclick="window.location.href='{{ asset('payment.html') }}'" class="vip-book-button">Book plan</button>
        </div>
    </div>
</div>
<!-- EXCLUSIVE COACHING PACKAGES & VIP PROGRAMS ENDS -->



<!-- MAGAZINE STYLE BLOG SECTION STARTS -->
<div id="blog" class="magazine-blog-contents">
    <h2 class="magazine-blog-title">Explore Our Latest Insights: Coaching, Sports & More</h2>

    <!-- BLOG POST 1: Football Coaching -->
    <div class="blog-post-wrapper">
        <div class="blog-post-left">
            <img src="{{ asset('images/blog/img1.jpeg') }}" alt="Football Coaching" class="blog-image">
        </div>
        <div class="blog-post-right">
            <h3 class="blog-post-title">Mastering Football Skills: How Coaching Makes a Difference</h3>
            <p class="blog-post-description">Discover the secrets to becoming a football star with the right coaching techniques and mindset.</p>
            <p class="blog-post-text">Football coaching is not just about running drills. It's about **developing leadership skills**, fostering teamwork, and teaching discipline. Whether you're an aspiring player or a coach yourself, mastering the right techniques can elevate your game.</p>
            <div class="blog-image-gallery">
                <img src="{{ asset('images/blog/img2.jpg') }}" alt="Football Drill" class="gallery-image">
            </div>
            <p class="highlight-text">“A winning strategy is not just about tactics, it’s about mindset.” – Coach Mike</p>
            <a href="#" class="read-more-button">Read More</a>
        </div>
    </div>

    <!-- BLOG POST 2: High Jumping (Text Left, Image Right) -->
    <div class="blog-post-wrapper reverse">
        <div class="blog-post-left">
            <h3 class="blog-post-title">High Jumping: The Key Techniques for Reaching New Heights</h3>
            <p class="blog-post-description">Unlock the essential tips and tricks to mastering high jumping and pushing your limits.</p>
            <p class="blog-post-text">High jumping isn’t just about leaping higher—it’s about precision, timing, and strategy. In this post, we’ll cover the techniques that will help you take your high jumping to the next level.</p>
            <div class="blog-image-gallery">
                <img src="{{ asset('images/blog/img5.jpg') }}" alt="High Jump Training" class="gallery-image">
            </div>
            <a href="#" class="read-more-button">Read More</a>
        </div>
        <div class="blog-post-right">
            <img src="{{ asset('images/blog/img4.png') }}" alt="" class="blog-image">
        </div>
    </div>

    <!-- BLOG POST 3: Judo Coaching (Image Left, Text Right) -->
    <div class="blog-post-wrapper">
        <div class="blog-post-left">
            <img src="{{ asset('images/blog/img6.jpg') }}" alt="Judo Coaching" class="blog-image">
        </div>
        <div class="blog-post-right">
            <h3 class="blog-post-title">Mastering Judo: Techniques for Success</h3>
            <p class="blog-post-description">How Judo coaching can help athletes improve their techniques and achieve mastery in this martial art.</p>
            <p class="blog-post-text">Judo is a sport that requires not only physical strength but also mental focus and discipline. In this post, we explore key techniques that will help you improve your judo skills, including throws, holds, and submission techniques.</p>
            <div class="blog-image-gallery">
                <img src="{{ asset('images/blog/img7.jpg') }}" alt="Judo Throw" class="gallery-image">
            </div>
            <a href="#" class="read-more-button">Read More</a>
        </div>
    </div>

    <!-- BLOG POST 4: Hiking Wellness (Text Left, Image Right) -->
    <div class="blog-post-wrapper reverse">
        <div class="blog-post-left">
            <h3 class="blog-post-title">The Healing Power of Hiking: How Nature Transforms Your Mind</h3>
            <p class="blog-post-description">Explore the physical and mental health benefits of hiking and how it can improve your well-being.</p>
            <p class="blog-post-text">Hiking in nature has been shown to lower stress, boost mental clarity, and improve overall wellness. This post dives into the ways hiking can transform your mindset and help you reconnect with yourself.</p>
            <div class="blog-image-gallery">
                <img src="{{ asset('images/blog/img9.jpg') }}" alt="" class="gallery-image">
            </div>
            <a href="#" class="read-more-button">Read More</a>
        </div>
        <div class="blog-post-right">
            <img src="{{ asset('images/blog/img8.jpg') }}" alt="Hiking Wellness" class="blog-image">
        </div>
    </div>
</div>
<!-- MAGAZINE STYLE BLOG SECTION ENDS -->


<!-- ABOUT US SECTION -->
<section id="about" class="about-us-section">
    <h2 class="section-title">Meet Our Team</h2>
    <div class="team-container">
        <!-- Mohamed Houari -->
        <div class="team-member">
            <div class="team-member-photo">
                <img src="{{ asset('images/team/mohamed.jpg') }}" alt="Mohamed Houari">
            </div>
            <div class="team-member-info">
                <h3 class="team-member-name">Mohamed Houari</h3>
                <p class="team-member-role">Frontend Developer</p>
                <p class="team-member-bio">Mohamed designed the entire website structure using HTML, CSS, and JavaScript. His vision and technical expertise are behind the smooth user interface and responsive design.</p>
            </div>
        </div>
        
        <!-- Ayoub Lamnaouar -->
        <div class="team-member">
            <div class="team-member-photo">
                <img src="{{ asset('images/team/ayoub.jpg') }}" alt="Ayoub Lamnaouar">
            </div>
            <div class="team-member-info">
                <h3 class="team-member-name">Ayoub Lamnaouar</h3>
                <p class="team-member-role">AI & Chatbot Specialist</p>
                <p class="team-member-bio">Ayoub worked on implementing AI-driven recommendations and the chatbot. His expertise in AI allows us to offer personalized coaching experiences to every user.</p>
            </div>
        </div>
        
        <!-- Hamza Bounaga -->
        <div class="team-member">
            <div class="team-member-photo">
                <img src="{{ asset('images/team/bng.png') }}" alt="Hamza Bounaga">
            </div>
            <div class="team-member-info">
                <h3 class="team-member-name">Hamza Bounaga</h3>
                <p class="team-member-role">Backend Developer</p>
                <p class="team-member-bio">Hamza ensures the website's backend runs efficiently, handling API integrations and database management to ensure speed and security.</p>
            </div>
        </div>
        
        <!-- Saad Akad -->
        <div class="team-member">
            <div class="team-member-photo">
                <img src="{{ asset('images/team/saad.jpg') }}" alt="Saad Akad">
            </div>
            <div class="team-member-info">
                <h3 class="team-member-name">Saad Akad</h3>
                <p class="team-member-role">Marketing Manager</p>
                <p class="team-member-bio">Saad leads our marketing strategy, driving brand growth through innovative campaigns and market insights.</p>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT US SECTION ENDS -->







<!-- Contact Us Section -->
<section id="contact" class="get-in-touch-section">
    <h2 class="section-title">Get In Touch</h2>
    <div class="box-wrapper">
        <div class="info-wrap">
            <h2 class="info-title">Contact Information</h2>
            <h3 class="info-sub-title">Fill up the form and our team will get back to you within 24 hours</h3>
            <ul class="info-details">
                <li>
                    <!-- Phone Icon SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF6F61" viewBox="0 0 24 24">
                        <path d="M3 2c0 0-1.5.1-1.5 1.6s0 3.7 2.8 7.6c2.8 4 7.2 7.5 11.4 7.5s1.6-1.5 1.6-1.5l-2.3-3.5c0 0-.6-.5-1.2 0-.6.5-1.4 1.5-2.1 1.1-2.5-1.5-4.5-3.5-6-6-.4-.7.7-1.5 1.1-2.1.5-.6 0-1.2 0-1.2l-3.5-2.3zm6.8 6.8l3.5 3.5 3.5-3.5h-7z"/>
                    </svg>
                    <span>Phone:</span> <a href="tel:+1235235598">+ 1235 2355 9870</a>
                </li>
                <li>
                    <!-- Email Icon SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF6F61" viewBox="0 0 24 24">
                        <path d="M12 12l10-6v12h-20v-12l10 6zm0-10c-5.5 0-10 3.6-10 8v8c0 4.4 4.5 8 10 8s10-3.6 10-8v-8c0-4.4-4.5-8-10-8z"/>
                    </svg>
                    <span>Email:</span> <a href="mailto:info@yoursite.com">7anoutzitargan@gmail.com</a>
                </li>
                <li>
                    <!-- Address Icon SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF6F61" viewBox="0 0 24 24">
                     <path d="M12 2c-3.9 0-7 3.1-7 7 0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z"/>
                    </svg>
                    <span>Adresse:</span> <a href="#">Wuhan institute of technology , computer science department </a>
                </li>
            </ul>
        </div>

        <div class="form-wrap">
            <form action="#" method="POST">
                <h2 class="form-title">Send Us a Message</h2>
                <div class="form-fields">
                    <div class="form-group">
                        <input type="text" class="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="lname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="email" placeholder="Mail" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="phone" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Type your message" required></textarea>
                    </div>
                </div>
                <input type="submit" value="Submit" class="submit-button">
            </form>
        </div>
    </div>
</section>

<!-- Chat Icon Button with Robot Icon -->
<div id="chat-icon" onclick="toggleChat()">
    <!-- Option 1: Font Awesome Robot Icon -->
    <i class="fas fa-robot"></i>
    
    <!-- Option 2: SVG Icon -->
    <!-- Uncomment below line and comment out the <i> line above if you prefer SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 2a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2v2h-4v-2H8v2H4v-2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h4V4a2 2 0 0 1 2-2zm-2 4h4v2h-4V6zm8 6v-2h-2v2h2zm-6 0h2v-2h-2v2zm-4 0h2v-2H8v2z"/>
    </svg>
</div>

<!-- Chat Window -->
<div id="chat-window">
    <div id="chat-header">
        <span>Chat with us</span>
        <button id="close-chat" onclick="toggleChat()">&times;</button>
    </div>
    <div id="chat-body">
        <!-- Messages will appear here -->
        <p>Welcome! How can I help you?</p>
    </div>
    <div id="chat-footer">
        <input type="text" placeholder="Type a message..." id="chat-input">
        <button id="send-btn">Send</button>
    </div>
</div>
<!-- CONTACT US SECTION ENDS -->

  
<!-- FOOTER SECTION STARTS -->
<footer id="footer">
    <div class="footer-container">
        
        <!-- About Section -->
        <div class="footer-about">
            <h3 class="footer-title">About Us</h3>
            <p>We are a team of passionate developers dedicated to building innovative solutions for the digital age. Our goal is to provide seamless and user-friendly experiences to our users.</p>
        </div>
        
        <!-- Quick Links -->
        <div class="footer-links">
            <h3 class="footer-title">Quick Links</h3>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact Us</a></li> <!-- Capitalized 'Contact Us' -->
                <li><a href="#footer">Privacy Policy</a></li>
                <li><a href="#services">Terms of Service</a></li>
                <li><a href="#">Go back to homepage</a></li>
            </ul>
        </div>
        
        <!-- Social Media Links with SVG Icons -->
        <div class="footer-social">
            <h3 class="footer-title">Follow Us</h3>
            <ul>
                <li><a href="https://facebook.com" target="_blank" title="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF6F61" viewBox="0 0 24 24" aria-label="Facebook Icon">
                        <path d="M22 12c0-5.5-4.5-10-10-10S2 6.5 2 12c0 5 3.7 9.2 8.5 9.9V15H8v-3h2.5v-2c0-2.4 1.5-3.7 3.6-3.7 1 0 1.9.1 2.1.1v2.4h-1.4c-1.2 0-1.5.6-1.5 1.4v1.8H16l-.4 3H13v6.9C17.3 21.2 22 17 22 12z"/>
                    </svg>
                </a></li>
                <li><a href="https://twitter.com" target="_blank" title="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF6F61" viewBox="0 0 24 24" aria-label="Twitter Icon">
                        <path d="M24 4.6c-.9.4-1.9.6-2.9.8 1-.6 1.8-1.6 2.2-2.7-.9.5-2 .9-3.1 1-1-1-2.5-1.3-3.8-.8s-2.3 1.9-2.2 3.3c-3.4-.2-6.5-1.8-8.6-4.4-.4.7-.5 1.6-.3 2.4.3.8.8 1.5 1.5 2-.8 0-1.5-.2-2.1-.5v.1c0 1.3.7 2.5 1.8 3.1-.6 0-1.3-.2-1.8-.5.3 1 1.1 1.8 2.1 2-.8.2-1.6.1-2.4-.2.7 1.2 2 1.9 3.3 2-1.7 1.3-3.8 1.8-5.8 1.4C2 20.2 4.4 21 7 21c8.6 0 13.5-7.1 13.2-13.4.9-.7 1.6-1.5 2.2-2.4z"/>
                    </svg>
                </a></li>
                <li><a href="https://linkedin.com" target="_blank" title="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF6F61" viewBox="0 0 24 24" aria-label="LinkedIn Icon">
                        <path d="M20.5 2h-17C2.7 2 2 2.7 2 3.5v17C2 21.3 2.7 22 3.5 22h17c.8 0 1.5-.7 1.5-1.5v-17C22 2.7 21.3 2 20.5 2zM8 19H5v-8h3v8zm-1.5-9.3C6.1 9.7 5.5 9.1 5.5 8.3S6.1 7 7 7c.9 0 1.5.6 1.5 1.3S7.9 9.7 7 9.7zm13.5 9.3h-3v-4.5c0-1.1-.4-1.9-1.5-1.9-.8 0-1.2.5-1.4 1.1-.1.2-.1.5-.1.8V19h-3s.1-7.5 0-8.3h3v1.2c.4-.6 1.1-1.4 2.7-1.4 2 0 3.3 1.3 3.3 4.1V19z"/>
                    </svg>
                </a></li>
                <li><a href="https://instagram.com" target="_blank" title="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF6F61" viewBox="0 0 24 24" aria-label="Instagram Icon">
                        <path d="M16.7 2h-9.4c-3.2 0-5.7 2.5-5.7 5.7v9.4c0 3.2 2.5 5.7 5.7 5.7h9.4c3.2 0 5.7-2.5 5.7-5.7v-9.4c0-3.2-2.5-5.7-5.7-5.7zm1.7 3.3c.4 0 .8.4.8.8 0 .4-.4.8-.8.8s-.8-.4-.8-.8c0-.4.4-.8.8-.8zm-6.4 3.9c1.6 0 2.8 1.3 2.8 2.8s-1.3 2.8-2.8 2.8-2.8-1.3-2.8-2.8 1.3-2.8 2.8-2.8zm6.8 9.8c0 1.5-1.2 2.7-2.7 2.7h-9.4c-1.5 0-2.7-1.2-2.7-2.7v-9.4c0-1.5 1.2-2.7 2.7-2.7h9.4c1.5 0 2.7 1.2 2.7 2.7v9.4z"/>
                    </svg>
                </a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="footer-bottom">
        <p>&copy; <script>document.write(new Date().getFullYear());</script> CoachWise. All Rights Reserved.</p>
    </div>
</footer>
<!-- FOOTER SECTION ENDS -->



<script src="{{ asset('js/00.js') }}"></script>
    
</body>
</html>

