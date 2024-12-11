<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zionkid - Bringing Families Together</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f7f6; /* Soft off-white background for a calm and professional feel */
      font-family: Arial, sans-serif;
      color: #333; /* Dark grey text for readability */
    }

    .hero {
      position: relative;
      height: 400px;
      overflow: hidden;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      filter: brightness(0.7);
    }

    .hero .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5); /* Dark overlay for text contrast */
      z-index: 2;
    }

    .hero .content {
      position: relative;
      z-index: 3;
      color: #fff;
      text-align: center;
      padding: 100px 20px;
      animation: fadeIn 2s ease-in-out;
    }

    .cta-button {
      background-color: #28a745; /* Professional green */
      color: white;
      padding: 15px 25px;
      font-size: 1.2em;
      border-radius: 5px;
      text-decoration: none;
      margin-top: 20px;
      display: inline-block;
      animation: bounce 2s infinite;
    }

    .cta-button:hover {
      background-color: #218838; /* Slightly darker green on hover */
    }

    /* Animations */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    /* FAQ Section */
    .accordion-button {
      background-color: #f4f7f6;
      color: #4B8C4A;
      font-weight: bold;
    }

    .accordion-button:hover {
      background-color: #e0e0e0;
      transition: background-color 0.3s ease;
    }

    .accordion-body {
      animation: fadeIn 1s ease;
    }

    /* Footer */
    footer {
      background: #2c3e50; /* Dark blue-gray background for professionalism */
      color: #ecf0f1; /* Light grey text */
    }

    footer p {
      margin: 0;
    }

    footer a {
      color: #ecf0f1;
    }

    footer a:hover {
      color: #f39c12; /* Gold hover effect for links */
    }





    h2, h3 {
            color: #333;
        }

        /* Hero Section (Already Present) */

        /* How It Works Section */
        .how-it-works {
            background-color: #ffffff;
            padding: 60px 20px;
            text-align: center;
            border-bottom: 2px solid #e5e5e5;
        }

        .how-it-works .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #4f8a10;
        }

        .section-description {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 40px;
        }

        .steps-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        .step {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 30px;
            flex-basis: 22%;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .step:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .step-number {
            background-color: #ff8c00;
            color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            line-height: 50px;
            margin: 0 auto 20px;
            font-size: 1.8rem;
        }

        .step-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .step-description {
            font-size: 1.1rem;
            color: #777;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #4f8a10;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
            margin-top: 40px;
        }

        .cta-button:hover {
            background-color: #387b08;
        }

        /* Optional Scroll Animation */
        .step.animated {
            opacity: 1;
            transform: translateY(0);
        }

        .step {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

  </style>
</head>

<body>
<?php include 'header.php'; ?>
  <!-- Hero Section -->
  <div class="hero">
    <div class="overlay"></div>
    <img src="images/mainhero.jpg" alt="Happy Children">
    <div class="content">
      <h1>Welcome to Zion kids</h1>
      <p>Connecting hearts, building families, and creating a brighter future for every child.</p>
      <a href="adoption.php" class="cta-button">Adopt a Child</a>
      <a href="donate.php" class="cta-button">Donate Now</a>
    </div>
  </div>



  <section class="how-it-works">
    <div class="container">
        <h2 class="section-title text-center my-4" style="font-size: 2.5em;">How Adoption Works</h2>
        <p class="section-description text-center mb-5" style="font-size: 1.2em;">At ZION ORPHANAGE, we guide you through every step of the adoption process, ensuring a smooth and fulfilling journey. Here's how it works:</p>
  
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center p-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); border-radius: 10px; transition: box-shadow 0.3s ease;">
                    <div class="step-number" style="font-size: 2.5em; font-weight: bold;">1</div>
                    <h3 class="step-title" style="font-size: 1.5em; margin-top: 10px;">Initial Consultation</h3>
                    <p class="step-description" style="font-size: 1em;">We begin with a one-on-one consultation to discuss your adoption goals, provide valuable information, and answer all your questions.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center p-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); border-radius: 10px; transition: box-shadow 0.3s ease;">
                    <div class="step-number" style="font-size: 2.5em; font-weight: bold;">2</div>
                    <h3 class="step-title" style="font-size: 1.5em; margin-top: 10px;">Application Process</h3>
                    <p class="step-description" style="font-size: 1em;">After your initial consultation, you’ll fill out an adoption application that helps us understand your preferences and expectations.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center p-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); border-radius: 10px; transition: box-shadow 0.3s ease;">
                    <div class="step-number" style="font-size: 2.5em; font-weight: bold;">3</div>
                    <h3 class="step-title" style="font-size: 1.5em; margin-top: 10px;">Matching and Home Study</h3>
                    <p class="step-description" style="font-size: 1em;">We’ll match you with children who are looking for loving homes. A home study will be conducted to ensure you’re ready for adoption.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center p-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); border-radius: 10px; transition: box-shadow 0.3s ease;">
                    <div class="step-number" style="font-size: 2.5em; font-weight: bold;">4</div>
                    <h3 class="step-title" style="font-size: 1.5em; margin-top: 10px;">Placement and Transition</h3>
                    <p class="step-description" style="font-size: 1em;">Once a match is made, the child will transition into your home with ongoing support from our team to ensure a successful placement.</p>
                </div>
            </div>
        </div>
  
        <a href="adoption.php" class="cta-button btn btn-lg d-block mx-auto mt-4" style="
          background: linear-gradient(90deg, #007bff, #0056b3); 
          color: white; 
          padding: 12px 30px; 
          font-size: 1.1em; 
          border-radius: 50px; 
          text-align: center; 
          transition: background-color 0.3s ease, transform 0.3s ease; 
          text-decoration: none;
          font-weight: 600;
          max-width: 400px; /* Set a max width for the button */
          width: 100%; /* Make the button take full width up to max-width */
          margin: 0 auto; /* Center the button */
        ">
            Learn More About Our Process
        </a>
    </div>
  </section>
  
  <!-- Inline Hover Effects -->
  <style>
    .cta-button:hover {
        background-color: #004085;
        transform: translateY(-3px);
    }
  
    .card:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }
  </style>
  






  <!-- FAQ Section -->
  <div class="container mt-5 box-shadow" id="faq">
    <h2 class="text-center text-primary mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            What is the adoption process?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show">
          <div class="accordion-body">
            The process involves filling out an application, attending orientation, and finding the right match.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            How can I donate to the orphanage?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse">
          <div class="accordion-body">
            Donations can be made online via our secure payment gateway or through direct bank transfer.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
            Can I visit the orphanage?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse">
          <div class="accordion-body">
            Yes, we welcome visitors by appointment. Please contact us to schedule your visit.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
            Are there volunteering opportunities?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse">
          <div class="accordion-body">
            Absolutely! You can assist in various programs. Reach out to learn how you can help.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
            What support is available for adopted children?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse">
          <div class="accordion-body">
            We provide post-adoption support, including counseling and workshops for adoptive families.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
            How are donations used?
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse">
          <div class="accordion-body">
            Donations are used to provide healthcare, education, and daily essentials for the children.
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>




  <section class="mission-vision" style="background-color: #ffffff; padding: 50px 0;">
    <div class="container">
        <h2 class="section-title text-center mb-5" style="font-size: 2.5em; font-weight: bold; color: #333;">Our Mission & Vision</h2>
        <p class="section-description text-center mb-4" style="font-size: 1.2em; color: #555;">We are dedicated to transforming lives, providing hope, and building a brighter future for every child in need.</p>
  
        <div class="row">
            <!-- Mission -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="mission-box p-4" style="background-color: #f9f9f9; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 1.8em; font-weight: bold; color: #007bff;">Our Mission</h3>
                    <p style="font-size: 1.1em; color: #555; line-height: 1.6;">To provide a safe and nurturing environment for orphans, facilitating their journey to find loving families and fulfilling their potential through education, care, and support.</p>
                    <img src="images/mission-p.jpg" alt="Mission Image" style="width: 100%; border-radius: 15px; margin-top: 15px;">
                </div>
            </div>
  
            <!-- Vision -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="vision-box p-4" style="background-color: #f9f9f9; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 1.8em; font-weight: bold; color: #007bff;">Our Vision</h3>
                    <p style="font-size: 1.1em; color: #555; line-height: 1.6;">A world where every child belongs to a loving family, grows with dignity, and has the opportunity to thrive in a supportive and inclusive community.</p>
                    <img src="images/vission-p.jpg" alt="Vision Image" style="width: 100%; border-radius: 15px; margin-top: 15px;">
                </div>
            </div>
        </div>
    </div>
  </section>
  
  <!-- Inline Styling -->
  <style>
    .mission-box, .vision-box {
        transition: transform 0.3s ease-in-out;
    }
  
    .mission-box:hover, .vision-box:hover {
        transform: translateY(-5px);
    }
  
    .mission-box img, .vision-box img {
        border-radius: 15px;
        max-height: 200px;
        object-fit: cover;
    }
  
    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .section-title {
            font-size: 2em;
        }
        .section-description {
            font-size: 1em;
        }
        .mission-box h3, .vision-box h3 {
            font-size: 1.5em;
        }
        .mission-box p, .vision-box p {
            font-size: 1em;
        }
        .mission-box img, .vision-box img {
            max-height: 150px;
        }
    }
  </style>
  

  
  <section class="testimonials">
    <div class="container">
        <h2 class="section-title text-center my-5" style="font-size: 2.5em; font-weight: bold;">What Families Are Saying</h2>
        <p class="section-description text-center mb-4" style="font-size: 1.2em; color: #555;">Hear from some of the families who have experienced the joy of adoption with ZION ORPHANAGE.</p>
        
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 text-center p-4" style="box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); border-radius: 15px; transition: box-shadow 0.3s ease-in-out;">
                    <div class="profile-container mb-3">
                        <img src="images/john-pro.jpg" alt="Family 1" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #007bff; margin: 0 auto;">
                    </div>
                    <p class="testimonial-text">"Adopting through ZION ORPHANAGE changed our lives. We are so grateful for the support and guidance throughout the entire process!"</p>
                    <p class="testimonial-name">John & Emily Davis</p>
                    <div class="reactions mt-3">
                        <button class="reaction-btn">👍 2.3M</button>
                        <button class="reaction-btn">❤️ 3.1M</button>
                        <button class="reaction-btn">👏 2.5K</button>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 text-center p-4" style="box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); border-radius: 15px; transition: box-shadow 0.3s ease-in-out;">
                    <div class="profile-container mb-3">
                        <img src="images/sara-pro.jpg" alt="Family 2" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #007bff; margin: 0 auto;">
                    </div>
                    <p class="testimonial-text">"The process was seamless, and now we have a beautiful child in our home. Thank you for making our dreams come true!"</p>
                    <p class="testimonial-name">Sarah & Michael Lee</p>
                    <div class="reactions mt-3">
                        <button class="reaction-btn">👍 911.6K</button>
                        <button class="reaction-btn">❤️ 741.6K</button>
                        <button class="reaction-btn">👏 12k</button>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 text-center p-4" style="box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); border-radius: 15px; transition: box-shadow 0.3s ease-in-out;">
                    <div class="profile-container mb-3">
                        <img src="images/alyssa-pro.jpg" alt="Family 3" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #007bff; margin: 0 auto;">
                    </div>
                    <p class="testimonial-text">"We never imagined the process could be so smooth. ZION ORPHANAGE made us feel comfortable and supported every step of the way."</p>
                    <p class="testimonial-name">Alyssa & Brian Carter</p>
                    <div class="reactions mt-3">
                        <button class="reaction-btn">👍 4.2M</button>
                        <button class="reaction-btn">❤️ 472.5K</button>
                        <button class="reaction-btn">👏 92.1K</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inline Styling for Hover Effect, Responsiveness, and Reactions -->
<style>
    .card:hover {
        box-shadow: 0 6px 30px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }
  
    .testimonial-text {
        font-size: 1.1em;
        font-style: italic;
        color: #555;
        line-height: 1.6;
    }
  
    .testimonial-name {
        font-size: 1.3em;
        font-weight: bold;
        color: #007bff;
    }

    .profile-container img {
        display: block;
        margin: 0 auto;
    }

    .reaction-btn {
        background-color: #f8f9fa;
        border: 1px solid #ccc;
        border-radius: 20px;
        padding: 5px 15px;
        margin: 5px;
        font-size: 0.9em;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .reaction-btn:hover {
        background-color: #007bff;
        color: white;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }
  
    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .section-title {
            font-size: 2em;
        }
        .section-description {
            font-size: 1em;
        }
        .testimonial-text {
            font-size: 1em;
        }
        .testimonial-name {
            font-size: 1.1em;
        }
    }
  
    /* Tablet Screens */
    @media (max-width: 1024px) {
        .section-title {
            font-size: 2.2em;
        }
        .testimonial-name {
            font-size: 1.2em;
        }
    }
</style>
<?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
  // Optional JS for animations on scroll (for professional touch)
  document.addEventListener('DOMContentLoaded', function () {
      const steps = document.querySelectorAll('.step');

      // Triggering animations as elements come into view
      const revealSteps = () => {
          steps.forEach((step, index) => {
              const stepPosition = step.getBoundingClientRect().top;
              const windowHeight = window.innerHeight;

              if (stepPosition < windowHeight * 0.8) {
                  step.classList.add('animated');
              }
          });
      };

      window.addEventListener('scroll', revealSteps);
      revealSteps();  // Initial check when the page loads
  });
</script>
</html>
