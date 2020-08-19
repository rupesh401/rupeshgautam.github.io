<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>My Website</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1>Er.<span> R</span>upesh <span>G</span>autam</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hi there, This<span></span></h1>
        <h1> is <span></span></h1>
        <h1>Rupesh <span></span></h1>
        <h1>Software Developer <span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Services <span>you</span> will get</h1>
        <p>I'm a creative Software Developer based on Hetauda, Nepal, who loves clean, simple and unique coding technique.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="images/web.jpg"/></div>
          <h2>Web Design</h2>
          <p>A well managed, clean and responsive web design using HTML, CSS, Javascript and PHP.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="images/desktop.jpg"/></div>
          <h2>Desktop Application Development</h2>
          <p></p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="images/android.jpg"/></div>
          <h2>App Development</h2>
          <p>A well designed android application with responsive design.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Website Design Test Sample</h1>
            <h2>This is a Test Project</h2>
            <p>This is the test project given to me. This site is designed using HTML and CSS. I can say that is one of the best project that was assigned to me.</p>
          </div>
          <div class="project-img">
            <img src="images/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Library Management System</h1>
            <h2>Desktop Application and Well maintained Website</h2>
            <p>This is the simple desktop Application that can be used in any Library. CoreJava is used as frontend and MYSQL as the backend. </p>
          </div>
          <div class="project-img">
            <img src="images/img-2.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Construction Management System</h1>
            <h2>Desktop Application and Website Design</h2>
            <p>This is the project that can be used by any construction company for their product management and worker management as well. In this project, core Java and MYSQL is used as frontend and backend whereas HTML, CSS and JavaScript is used for website designing.</p>
          </div>
          <div class="project-img">
            <img src="images/img-3.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Voting App</h1>
            <h2>Android Application</h2>
            <p>This is voting application for android devices where we can add different parties and their respective flag and the people can vote them using their android phone.</p>
          </div>
          <div class="project-img">
            <img src="images/img-4.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="images/about.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Front End Developer/Desktop Application Developer</h2>
        <p>I am a dedicated, hardworking and proactive Computer Engineer with a strong background in Web Development, Desktop Application Development.  I am currently looking for an opportunity to utilise my development skills in a challenging working environment and become a valuable asset to the company that I work for.</p>
        <a href="file/cv.pdf" class="cta" download="cv.pdf">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Get in Touch <span>with me</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+977-9821827338</h2>
            <h2>+977-9809238091</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>gautamrupesh401@gmail.com</h2>
            <h2>rupeshgautam401@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Hetauda-17, Laxmipur, Makwanpur, Nepal</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>R</span>upesh <span>G</span>autam</h1></div>
      <h2>Complete Software Development Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p>Copyright © 2020 Rupesh. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="js/app.js"></script>
</body>
</html>