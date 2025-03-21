<?php 
 include './header.php';
?>

    <div class="container-fluid">


        <div class="content-spacing"></div>

        <!-- Carousel Section -->
        <section class="carousel ">
            <div class="carousel-container">
                <div class="slide active">
                    <img src="assets/images/slider/OnlineEducation&Skilling.png" alt="Online Learning">
                    <!-- <div class="caption">Transform Your Future with Digital Learning.</div> -->
                </div>
                <div class="slide">
                    <img src="assets/images/slider/culturalNew.png" alt="Skill Development">
                    <div class="caption">The joyful cultural night</div>
                </div>
                <div class="slide">
                    <img src="assets/images/slider/AI_Confl.png" alt="Team Work">
                    <!-- <div class="caption">Learn from Industry Experts</div> -->
                </div>
                 <div class="slide"> 
                    <img src="assets/images/slider/certificateDis.png" alt="Certificate Distribution"> 
                    <!-- <div class="caption">Transform Your Future with Digital Learning</div> -->
                 </div> 
                
            </div>

            <!-- Carousel Arrows -->
            <button class="prev" onclick="prevSlide()"></button>
            <button class="next" onclick="nextSlide()"></button>

        </section>

        <div class="container py-5">
            <div class="row align-items-stretch">
                <!-- About Us Column -->
                <div class="col-lg-8 col-md-7 mb-4 d-flex">
                    <div class="content-box h-100 w-100" id="about">
                        <h2>About OES</h2>
                        <p>The Online Education and Skilling section at IIT Guwahati is dedicated to providing world-class education through innovative online platforms. As a nodal department for all online educational initiatives at the institute, we focus on delivering high-quality, flexible learning opportunities that cater to a diverse audience. Our programs aim to empower individuals with the skills and knowledge necessary to excel in their professional and personal endeavors, fostering a culture of continuous learning and development. Through cutting-edge technologies and expert faculty, we bring the excellence of IIT Guwahati’s education to learners worldwide.</p>
                    </div>
                </div>

                <!-- Notification Column -->
                <div class="col-lg-4 col-md-5 mb-4 d-flex">
                    <aside class="notification-panel h-100 w-100">
                        <h3 class="notification-title">Notifications</h3>
                        <div class="notification-content">
                            <marquee direction="up" scrollamount="2" behavior="scroll" class="notification-scroll" onmouseover="this.stop();" onmouseout="this.start();">
                                <a href="https://iitg.ac.in/acad/admission/online/" target="_blank" class="notification-item">📢 Online BSc (Hons) in AI</a>
                                <a href="#" class="notification-item">📢 Exam Date Announced</a>
                                <a href="#" class="notification-item">📢 New Course Available</a>
                                <a href="#" class="notification-item">📢 Announcement for new admission</a>
                                <a href="#" class="notification-item">📢 Workshop on Cyber-Security</a>
                            </marquee>
                            <div class="view-all">
                                <a href="./notification.php">View All</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

    <?php include './footer.php'; ?>
    
   