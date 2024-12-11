<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .contact-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }
        .contact-header h1 {
            font-size: 2.8em;
            font-weight: bold;
        }
        .contact-header p {
            font-size: 1.2em;
        }
        .contact-info {
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 40px;
        }
        .contact-info h3 {
            font-size: 1.5em;
            font-weight: bold;
            color: #007bff;
        }
        .contact-info p {
            font-size: 1.1em;
            color: #555;
        }
        .cta-section {
            background: #007bff;
            color: white;
            text-align: center;
            padding: 50px 20px;
            border-radius: 10px;
        }
        .cta-section h2 {
            font-size: 2em;
            font-weight: bold;
        }
        .cta-section p {
            font-size: 1.2em;
            margin: 20px 0;
        }
        .cta-section a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background: #0056b3;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .cta-section a:hover {
            background: #003f7f;
        }
        .map-container iframe {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            border: 0;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>


    <main class="container my-5">
        <!-- Contact Details -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class="contact-info animate__animated animate__fadeInLeft">
                    <h3>Our Location</h3>
                    <p>Bastos Avenue, Yaoundé, Cameroon</p>
                    <h3>Phone</h3>
                    <p>+237 675 998 029</p>
                    <h3>Email</h3>
                    <p>orphanagechildrenofzion@gmail.com</p>
                    <h3>Working Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM</p>
                </div>
            </div>

            <!-- Map Section -->
            <div class="col-md-6">
                <div class="map-container animate__animated animate__fadeInRight">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.492931220667!2d11.50000001527422!3d3.8675861977647684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061107a71dbb31b%3A0xd6ee6ad99dc7de7c!2sBastos%20Avenue%2C%20Yaound%C3%A9!5e0!3m2!1sen!2scm!4v1695825031230!5m2!1sen!2scm" 
                        allowfullscreen="" loading="lazy"></iframe>
                </div> 
            </div>
        </div>

        <!-- Call to Action -->
        <div class="cta-section mt-5 animate__animated animate__fadeInUp">
            <h2>Need Assistance?</h2>
            <p>Our team is always here to support you. Don't hesitate to reach out.</p>
            <a href="mailto:contact@zionorphanage.org?subject=Adoption%20Inquiry&body=Hello%2C%0A%0AI%20am%20interested%20in%20adopting%20and%20would%20like%20to%20proceed.%20Please%20let%20me%20know%20the%20next%20steps.%0A%0AThank%20you.">
    Email Us Now
</a>

    </main>


    <section class="newsletter py-5" style="background: #f0f8ff;">
        <div class="container text-center">
            <h2 style="font-size: 2.5em; font-weight: bold; color: #007bff;">Stay Updated</h2>
            <p style="font-size: 1.2em; color: #555;">Sign up for our newsletter to receive updates on our programs, events, and success stories.</p>
            <div class="mt-4">
                <a href="contact.php" class="btn btn-primary btn-lg" style="border-radius: 30px;">Subscribe Now</a>
            </div>
        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include 'footer.php'; ?>
</html>
