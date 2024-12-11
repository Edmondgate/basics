<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - ZION Orphanage</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f2f2f2;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding-top: 20px;
        }

        h1, h2 {
            font-weight: 700;
            color: #333;
            text-align: center;
            opacity: 0;
            animation: fadeIn 1.5s forwards;
        }

        h1 {
            font-size: 3rem;
        }

        h2 {
            font-size: 2rem;
            margin-top: 10px;
            color: #2980b9;
        }

       /* Hero Section */
.hero-section {
    background: url('images/donate.jpg') center/cover no-repeat;
    color: #fff;
    padding: 80px 0;
    text-align: center;
    border-radius: 10px;
    margin-bottom: 50px;
    position: relative;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);  /* Semi-transparent black overlay */
    border-radius: 10px;
    z-index: 1;  /* Make sure the overlay is below text */
}

.hero-section h1,
.hero-section p {
    position: relative;  /* Make sure text is above the overlay */
    z-index: 2;  /* Ensure text appears above the overlay */
}


.cta-btn {
    font-size: 1.5rem;
    background-color: #2980b9;
    padding: 15px 25px;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s ease;
    position: relative; /* Add position relative */
    z-index: 2;  /* Ensure it appears above the overlay */
}

.cta-btn:hover {
    background-color: #1f6f8b;
}



        /* Donation Section */
        .donation-cards {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .donation-card {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1 1 calc(33% - 30px);
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .donation-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .donation-card h3 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 15px;
        }

        .donation-card p {
            font-size: 1.1rem;
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        .donation-card i {
            font-size: 2rem;
            color: #2980b9;
            margin-bottom: 20px;
        }

        .contact-section {
            margin-top: 80px;
            padding: 40px;
            background-color: #fff;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #2980b9;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .contact-icons a {
            color: #2980b9;
            font-size: 2rem;
            transition: transform 0.3s ease;
        }

        .contact-icons a:hover {
            transform: scale(1.2);
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

        @media (max-width: 768px) {
            .donation-cards {
                flex-direction: column;
                align-items: center;
            }

            .donation-card {
                width: 80%;
                margin-bottom: 20px;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .cta-btn {
                font-size: 1.2rem;
                padding: 12px 20px;
            }

            .contact-section {
                padding: 30px;
            }
        }
    </style>
</head>
<body>

    <?php include './header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Support ZION Orphanage</h1>
        <p>Your generous donations can change lives. Help us provide for children in need.</p>
        <a href="#donate" class="cta-btn">Donate Now</a>
    </section>

    <!-- Donation Cards Section -->
    <section class="container">
        <h2>How You Can Help</h2>
        <div class="donation-cards" id="donate">
            <div class="donation-card">
                <i class="fas fa-dollar-sign"></i>
                <h3>Monetary Donations</h3>
                <p>Contribute funds to help with the daily operations, healthcare, and education of the children.</p>
            </div>
            <div class="donation-card">
                <i class="fas fa-gift"></i>
                <h3>Gift Donations</h3>
                <p>Donate clothing, educational toys, and books to make a child's day brighter.</p>
            </div>
            <div class="donation-card">
                <i class="fas fa-heart"></i>
                <h3>Volunteering</h3>
                <p>Offer your time and skills to support the orphanage's needs and activities.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <h2>Get in Touch</h2>
        <div class="contact-icons">
        <a href="mailto:children.of.zion.orphanage@gmail.com?subject=Adoption%20Inquiry&body=Hello%2C%0A%0AI%20am%20interested%20in%20adopting%20after%20reviewing%20your%20website.%20Please%20let%20me%20know%20the%20next%20steps.%0A%0AThank%20you." title="Email">
    <i class="fas fa-envelope"></i>
</a>

            <a href="https://wa.me/237675998029?text=Hello%2C%20I%20am%20interested%20in%20adopting%20after%20reviewing%20your%20website.%20Please%20let%20me%20know%20the%20next%20steps." title="WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

        </div>
    </section>

    <?php include './footer.php'; ?>

</body>
</html>
