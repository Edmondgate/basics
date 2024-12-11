<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | ZION Orphanage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css for Scroll Animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #f8f9fa;
            margin: 0;
        }

        /* Section Styles */
        .section {
            padding: 60px 20px;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 30px;
        }

        .section-description {
            text-align: center;
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 50px;
        }

        /* Timeline Section */
        .timeline-item {
            position: relative;
            padding: 20px;
            border-left: 3px solid #007bff;
            margin-bottom: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .timeline-item:before {
            content: "";
            position: absolute;
            left: -9px;
            top: 20px;
            width: 20px;
            height: 20px;
            background: #007bff;
            border-radius: 50%;
        }

        .timeline-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .timeline-text {
            margin-top: 10px;
            color: #555;
        }

        /* Statistics Section */
        .stats-card {
            text-align: center;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }

        .stats-icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 15px;
        }

        .stats-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }

        .stats-label {
            font-size: 1.1rem;
            color: #555;
        }

        /* Testimonials Section */
        .testimonial-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-text {
            font-style: italic;
            color: #555;
            margin-bottom: 20px;
        }

        .testimonial-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }

            .stats-card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <!-- About Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn">About ZION Orphanage</h2>
            <p class="section-description animate__animated animate__fadeIn">
                At ZION Orphanage, we believe every child deserves a loving home. Our mission is to create opportunities for children to thrive in a family environment.
            </p>
        </div>
    </section>

    <!-- Our Journey Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn">Our Journey</h2>
            <div class="timeline-item animate__animated animate__fadeInLeft">
                <h3 class="timeline-title">Founded in 2005</h3>
                <p class="timeline-text">ZION Orphanage began as a small initiative to support orphaned children in need of love and care.</p>
            </div>
            <div class="timeline-item animate__animated animate__fadeInLeft">
                <h3 class="timeline-title">Expanded in 2015</h3>
                <p class="timeline-text">We expanded our reach, building partnerships with local communities and international organizations.</p>
            </div>
            <div class="timeline-item animate__animated animate__fadeInLeft">
                <h3 class="timeline-title">Today</h3>
                <p class="timeline-text">We’ve helped over 1,000 children find homes and continue to advocate for adoption worldwide.</p>
            </div>
        </div>
    </section>

    <!-- Impact Statistics Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn">Our Impact</h2>
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="stats-card animate__animated animate__fadeInUp">
                        <div class="stats-icon">🏠</div>
                        <div class="stats-value">1,000+</div>
                        <p class="stats-label">Homes Found</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card animate__animated animate__fadeInUp">
                        <div class="stats-icon">💖</div>
                        <div class="stats-value">500+</div>
                        <p class="stats-label">Volunteers</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card animate__animated animate__fadeInUp">
                        <div class="stats-icon">🌍</div>
                        <div class="stats-value">10+</div>
                        <p class="stats-label">Countries Impacted</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeIn">Frequently Asked Questions</h2>
            <p class="section-description animate__animated animate__fadeIn">Find answers to some of the most common questions about our orphanage and the adoption process.</p>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is the first step in the adoption process?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The first step is to schedule an initial consultation with our team to discuss your adoption goals and learn about the process.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How long does the adoption process take?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The duration varies based on the child's needs, home studies, and legal requirements. Typically, it takes between 6 to 12 months.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Are there any fees involved?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, there are some administrative and legal fees. During your consultation, we provide a transparent breakdown of all costs.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include 'footer.php'; ?>
</html>
