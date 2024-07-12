<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestige</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/LOGO.png" alt="Logo" class="name-img"/>
            </a>
            <ul class="menu">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#work">Work</a></li>  
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading" id="home">
        <img src="images/NAME.png" alt="Logo" class="name-img"/>
            
        </div>
    </header>

    <section class="features" id="work">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/INT.png"/>
                </div>
                <div class="f-text">
                    <h4>Interior and Contracting</h4>
                    <p>Build your dream home with us. We offer comprehensive interior and contracting services.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/MAR.png"/>
                </div>
                <div class="f-text">
                    <h4>Marble Tiling Work</h4>
                    <p>Expert marble tiling work to add elegance to your home interiors.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/STR.png"/>
                </div>
                <div class="f-text">
                    <h4>Structural Audit</h4>
                    <p>Professional structural audits to ensure the safety and stability of your buildings.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/WTR.png"/>
                </div>
                <div class="f-text">
                    <h4>Water Proofing</h4>
                    <p>Comprehensive waterproofing solutions to protect your home from water damage.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="contact" id="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>If you have any doubt regarding our work</p>
        </div>
        <form action="userinformation.php" method="post">
    <input type="text" name="user" placeholder="Your Full Name"/>
    <input type="email" name="email" placeholder="Your E-Mail"/>
    <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
    <button class="main-btn contact-btn" type="submit">Send</button>
</form>

        <br>
        <p>&copy; 2024 PRESTIGE. All rights reserved.</p>
        </br>
    </footer>
</body>
</html>
