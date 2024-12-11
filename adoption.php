<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Process - ZION Orphanage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
        

        .hero-section {
            background-color: #2c3e50;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.25rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .cta-button {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #34495e;
            margin-bottom: 20px;
            text-align: center;
        }

        .section-description {
            font-size: 1.2rem;
            color: #555;
            text-align: center;
            margin-bottom: 50px;
        }

        /* Professional Process Cards */
        .process-step {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            text-align: center;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards;
        }

        .process-step:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .step-icon {
            font-size: 3.5rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .step-title {
            font-size: 1.7rem;
            font-weight: 600;
            color: #34495e;
            margin-bottom: 15px;
        }

        .step-description {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 0;
        }

        .step-number {
            background-color: #007bff;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 1.5rem;
            line-height: 50px;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .process-step:nth-child(1) {
            animation-delay: 0.3s;
        }

        .process-step:nth-child(2) {
            animation-delay: 0.5s;
        }

        .process-step:nth-child(3) {
            animation-delay: 0.7s;
        }

        .process-step:nth-child(4) {
            animation-delay: 0.9s;
        }

        /* Info Section Styling */
        .info-section {
            background-color: #ffffff;
            padding: 40px 20px;
            margin-bottom: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards;
        }

        .info-section:nth-child(5) {
            animation-delay: 1s;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .process-step {
                padding: 30px;
            }

            .cta-button {
                font-size: 1rem;
                padding: 12px 25px;
            }

            .step-icon {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<?php include './header.php'; ?>
<body>


    <section class="adoption-process">
        <div class="container py-5">
            <!-- Introduction Section -->
            <div class="text-center mb-5">
                <h1 class="display-4 font-weight-bold mb-4">Your Adoption Journey Begins Here</h1>
                <p class="lead text-muted">
                    At ZION ORPHANAGE, we believe that every child deserves a loving home. The adoption process can seem overwhelming, but we're here to guide you through every step. Join the countless families who have already made a lasting difference.
                </p>
            </div>

            <!-- Process Steps Section -->
            <div class="row text-center mb-5">
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h5 class="step-title">Initial Consultation</h5>
                        <p class="step-description text-muted">Talk to our experts, ask questions, and learn about the process.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h5 class="step-title">Application Process</h5>
                        <p class="step-description text-muted">Fill out the necessary forms and provide essential details for matching.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="step-title">Matching & Home Study</h5>
                        <p class="step-description text-muted">We’ll find the best match for you, with a thorough home study process.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h5 class="step-title">Placement & Transition</h5>
                        <p class="step-description text-muted">Once matched, we help ensure a smooth transition into your home with support.</p>
                    </div>
                </div>
            </div>

            <!-- Additional Information Section -->
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="info-section">
                        <h4 class="font-weight-bold mb-3">Guidance Throughout the Process</h4>
                        <p class="text-muted">Our experts guide you at every step, from the initial consultation to the final placement, ensuring a seamless experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-section">
                        <h4 class="font-weight-bold mb-3">Post-Adoption Support</h4>
                        <p class="text-muted">We continue to support you after adoption with counseling and resources, helping both parents and children adjust and thrive.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-section">
                        <h4 class="font-weight-bold mb-3">Financial Assistance Resources</h4>
                        <p class="text-muted">We provide information on financial assistance options to ensure adoption is accessible to families of all backgrounds.</p>
                    </div>
                </div>
            </div>

            <!-- Call to Action Section -->
            <div class="text-center">
                <h3 class="font-weight-bold mb-3">Ready to Change a Life?</h3>
                <p class="lead text-muted mb-4">Start your adoption journey today and help a child find the love and care they deserve. Our team is ready to guide you through every step.</p>
                <a href="contact.php" class="btn btn-primary btn-lg">Start Your Journey</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include './footer.php'; ?>
</html>


