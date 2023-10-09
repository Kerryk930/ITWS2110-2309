Make be color of header be familiar. Use ai draw to
change the photo of factulty

-------------------------------------------------

/* Reset some default styles */
body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Set a background color and font for the entire page */
body {
    background-color: #f2f2f2;
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header section */
header {
    background-color: darkblue;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

header img {
    max-width: 150px;
    height: auto;
}

header nav a{
    color: white;
}

header nav a:hover {
    color: darkgray;
}


header h1 {
    font-size: 28px;
}

header h2 {
    font-size: 24px;
    font-weight: normal;
    margin-top: 10px;
}

nav ul {
    list-style-type: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}


/* Style the main content sections */
section {
    background-color: #fff;
    padding: 20px;
    margin: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

section h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

/* Style the buttons */
button {
    background-color: darkblue;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
}

button:hover {
    background-color: darkblue;
}

/* Style the footer */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

/* Style for the logo */
footer img {
    text-align: left;
    max-width: 100px; /* Adjust the max-width as needed */
    height: auto;
    margin-right: 20px; /* Add space between the logo and text */
}


/* Style the footer link */
footer a {

    color: white; /* Default link color */
    text-decoration: underline;
    transition: color 0.3s, text-decoration 0.3s; /* Add smooth color and text-decoration transitions */
}

/* Underline the link on hover */
footer a:hover {
    color: darkgray; /* Link color on hover */
}

/* Style the contact information */
footer p {
    margin-bottom: 5px;
}

ul {
    list-style-type: none;
}

ul li {
    margin-left: 20px;
}

#ANNOUNCEMENTS {
    line-height: 1.6; /* Increase line height for better readability */
    margin: 20px; /* Add some spacing around the section */
}

#ANNOUNCEMENTS h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: darkblue; /* Change the heading color for emphasis */
}

#ANNOUNCEMENTS p {
    font-size: 16px;
    margin-bottom: 15px; /* Increase spacing between paragraphs */
}

#NEWS {
    line-height: 1.6; /* Increase line height for better readability */
    margin: 20px; /* Add some spacing around the section */
}

#NEWS h2, #PROGRAMS h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: darkblue; /* Change the heading color for emphasis */
}

#NEWS p {
    font-size: 16px;
    margin-bottom: 15px; /* Increase spacing between paragraphs */
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
    header h1 {
        font-size: 24px;
    }
    header h2 {
        font-size: 20px;
    }
    nav ul li {
        margin-right: 10px;
    }
    button {
        font-size: 14px;
        padding: 8px 16px;
    }
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

h1 {
    font-size: 36px;
}

h2 {
    font-size: 24px;
    color: #0073e6;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

p {
    font-size: 16px;
    line-height: 1.5;
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL OF SCIENCE - Information Technology and Web Science</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>

</head>
<body>
    <header>
        <img src="logo.png" alt="Rensselaer Polytechnic Institute Logo">
        <h1>ITWS Department</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="contact.html">Contact</a>
            <a href="faculty.html">Faculty</a>
            <a href="news.html">News</a>
            <a href="programs.html">Programs</a>
        </nav>
    </header>

<section id="PROGRAMS">
    <h2>Information Technology and Web Science at Rensselaer</h2>
    <p>ITWS at Rensselaer presents a unique opportunity for students to combine a mastery of Information Age technologies with an academic discipline of their choice.</p>
    <p>Prospective students (undergraduate and graduate): Join our ITWS Discord server to meet ITWS faculty and students, and ask questions about the program: <a href="https://discord.gg/HRYuxjAtft">Join Discord</a></p>
    <button>UNDERGRADUATE PROGRAMS</button>
    <button>GRADUATE PROGRAMS</button>
</section>

<section id="ANNOUNCEMENTS">
    <h2>ANNOUNCEMENTS</h2>
    <p>Interview: On teaching at home A scholastic view of life during the pandemic by By John Stotz, Sarah Shiang, and Medhini Mankale</p>
    <p>In the last few weeks of the Spring Semester, The Polytechnic met with professors across three schools to learn what the transition looked like department to department. What we found, broadly speaking, was that the Computer Science and ITWS departments seemed to have transitioned most easily, while studio and lab-type courses faced the brunt of the switch to online classes.</p>
</section>

<section id="NEWS">
    <h2>NEWS</h2>
    <p>Rensselaer Polytechnic Institute Plans to Deploy First IBM Quantum System One on a University Campus</p>
    <p>Today, it was announced that Rensselaer Polytechnic Institute will become the first university in the world to house an IBM Quantum System One. The IBM quantum computer, intended to be operational by January of 2024, will serve as the foundation of a new IBM Quantum Computational Center in partnership with Rensselaer Polytechnic Institute (RPI). By partnering, RPI’s vision is to greatly enhance the educational experiences and research capabilities of students and researchers at RPI and other institutions, propel the Capital Region into a top location for talent, and accelerate New York's growth as a technology epicenter.</p>

    <p>Rensselaer Graduates Recognized for Resilience, Perseverance at 217th Commencement</p>
    <p>Rensselaer Polytechnic Institute President Martin A. Schmidt ’81 presided over the 217th Commencement Ceremony, his first as president. During the ceremony, which was held at the East Campus Athletic Village, Rensselaer awarded a total of 1,988 degrees — 152 doctoral degrees, 390 master’s degrees, and 1,446 bachelor’s degrees — to 1,957 students, some of whom earned multiple degrees. Approximately 1,500 students attended the ceremony.</p>

    <p>More Than 1,900 Degrees To Be Awarded at 217th Rensselaer Polytechnic Institute Commencement Ceremony</p>
    <p>Beginning at 9:30 a.m. on May 20, 2023, Rensselaer Polytechnic Institute will award a total of 1,988 degrees — 152 doctoral degrees, 390 master’s degrees, and 1,446 bachelor’s degrees — to 1,957 students, some of whom have earned multiple degrees. Approximately 1,500 students will attend the ceremony.</p>
</section>

<footer>
    <img src="logo.png" alt="Rensselaer Polytechnic Institute Logo">
    <p>DETAILED CONTACT INFORMATION</p>
    <p>Rensselaer Polytechnic Institute</p>
    <p>110 Eighth Street | Troy, NY USA 12180</p>
    <p>(518) 276-6000</p>
    <p><a href="contact.html">Contact Us</a></p>
</footer>
</body>
</html>

make header be red