<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zion Kids Orphanage - Professional Logo</title>
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        background-color: #f9f9f9;
      }

      /* Header Styling */
      header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.5rem 1.5rem;
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
      }

      /* Logo Container */
      .logo {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        text-align: center;
      }

      /* Earth Icon */
      .logo-icon {
        font-size: 2rem;
        background-color: #feb47b;
        padding: 0.5rem;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        animation: colorChange 5s infinite; /* Color-changing animation */
      }

      /* Logo Text */
      .logo-text {
        font-weight: bold;
        color: #333;
        text-align: left;
      }
      .logo-text .name {
        font-size: 1.8rem;
        letter-spacing: 0.5px;
        color: #ff7e5f;
        text-transform: uppercase;
      }

      /* Left and Right Line Animating with the Slogan */
      .line-container {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin-top: 10px;
      }

      .line {
        content: '';
        position: absolute;
        height: 2px;
        background-color: #ff7e5f;
        width: 0;
        transition: width 0.3s ease-in-out;
      }

      /* Left Line to stop at O */
      .line.left {
        left: 0;
        animation: lineAnimationLeft 1s infinite alternate;
      }

      /* Right Line to stop at E */
      .line.right {
        right: 0;
        animation: lineAnimationRight 1s infinite alternate;
      }

      .slogan {
        font-size: 0.7rem;
        font-style: italic;
        color: #555;
        position: relative;
        z-index: 1;
        letter-spacing: 0.5px;
      }

      /* Animations for the left and right lines */
      @keyframes lineAnimationLeft {
        0% {
          width: 0;
        }
        50% {
          width: 30%; /* Left line should end at the "O" */
        }
        100% {
          width: 0;
        }
      }

      @keyframes lineAnimationRight {
        0% {
          width: 0;
        }
        50% {
          width: 25%; /* Right line should end at the "E" */
        }
        100% {
          width: 0;
        }
      }

      /* Color-changing animation for Earth icon */
      @keyframes colorChange {
        0% {
          color: #ff7e5f; /* Initial Color */
        }
        25% {
          color: #feb47b; /* Warm Yellow */
        }
        50% {
          color: #4caf50; /* Green */
        }
        75% {
          color: #1e90ff; /* Blue */
        }
        100% {
          color: #ff7e5f; /* Back to Initial Color */
        }
      }

      /* Navigation Menu */
      nav {
        display: flex;
        gap: 1.5rem;
      }
      nav a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
        font-size: 1rem;
        position: relative;
        transition: all 0.3s ease-in-out;
      }
      nav a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        width: 0;
        height: 2px;
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        transition: width 0.3s ease-in-out;
      }
      nav a:hover::after {
        width: 100%;
      }

      /* Hamburger Menu Button */
      .hamburger {
        display: none;
        flex-direction: column;
        cursor: pointer;
        gap: 5px;
      }
      .hamburger div {
        width: 30px;
        height: 3px;
        background-color: #333;
        border-radius: 3px;
        transition: all 0.3s ease-in-out;
      }

      /* Mobile Menu */
      .mobile-menu {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        right: 0;
        width: 100%;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-top: 1px solid #eee;
        z-index: 1000;
      }
      .mobile-menu a {
        text-align: center;
        padding: 1rem;
        border-bottom: 1px solid #f0f0f0;
        color: #333;
        font-weight: 600;
        font-size: 1rem;
        position: relative;
        transition: all 0.3s ease-in-out;
      }
      .mobile-menu a:last-child {
        border-bottom: none;
      }
      .mobile-menu a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        width: 0;
        height: 2px;
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        transition: width 0.3s ease-in-out;
      }
      .mobile-menu a:hover::after {
        width: 100%;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        nav {
          display: none;
        }
        .hamburger {
          display: flex;
        }
        .mobile-menu.active {
          display: flex;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <!-- Custom Logo -->
      <div class="logo">
        <div class="logo-icon">
          <i class="fas fa-globe-americas"></i> <!-- Earth Icon -->
        </div>
        <div class="logo-text">
          <div class="name">Zion Kids</div>
          <!-- Slogan with Animating Lines -->
          <div class="line-container">
            <div class="line left"></div>
            <div class="slogan">Orphanage</div>
            <div class="line right"></div>
          </div>
        </div>
      </div>

      <!-- Navigation Links -->
      <nav>
        <a href="./index.php">Home</a>
        <a href="./about.php">About Us</a>
        <a href="./adoption.php">Adoption Process</a>
        <a href="./contact.php">Contact</a>
        <a href="./donate.php">Donate</a>
      </nav>

      <!-- Hamburger Menu -->
      <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
      </div>

      <!-- Mobile Menu -->
      <div class="mobile-menu">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="about.php">About Us</a>
        <a class="nav-link" href="adoption.php">Adoption Process</a>
        <a class="nav-link" href="contact.php">Contact</a>
        <a class="nav-link" href="donate.php">Donate</a>
      </div>
    </header>

    <script>
      function toggleMenu() {
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.classList.toggle('active');
      }
    </script>
  </body>
</html>
