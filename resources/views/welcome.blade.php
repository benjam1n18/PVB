<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-image: url('banner-image.jpg'); /* Replace 'banner-image.jpg' with your image file */
            background-size: cover;
            background-position: center;
            height: 300px; /* Adjust the height according to your image */
            text-align: center;
            color: white;
        }

        nav {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
        }

        section {
            padding: 40px 0;
        }

        .project {
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

    </style>
</head>
<body>

<header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>My Portfolio</h1>
        <p>Welcome to my portfolio website</p>
    </div>
</header>


<section id="about">
    <div class="container">
        <h2>About Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula auctor consequat. Integer vel nisi et mi congue pulvinar. Suspendisse potenti. Duis mollis velit a justo volutpat, in finibus enim aliquet. Nullam auctor eros sit amet lacinia tristique.</p>
    </div>
</section>

<section id="projects">
    <div class="container">
        <h2>Projects</h2>
        <div class="project">
            <h3>Project 1</h3>
            <p>Description of project 1</p>
        </div>
        <div class="project">
            <h3>Project 2</h3>
            <p>Description of project 2</p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Contact Me</h2>
        <p>Email: info@example.com</p>
        <p>Phone: 123-456-7890</p>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2024 My Portfolio. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
