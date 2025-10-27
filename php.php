
<?php
if(isset($_POST['email']){)
$server="localhost";
$username="root";
$password="";


$conn=mysqli_connect($server, $username, $password);

if(!$conn){
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "success connecting to the db";
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$sql = "INSERT INTO 'IAgro'.`contact`(`Email`, `Phone_No`, `Message`) VALUES ('$email','$phone','$message');";
echo $sql;

if(conn->query($sql) == TRUE){
    echo "successfully inserted";
    }
    else{
        echo"ERROR: $sql <br> $conn->error";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Home Page</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-rows: auto 1fr auto;
            height: 100vh;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
        }
        header img {
            position: absolute;
            left: 20px;
            top: 10px;
            width: 50px;
            height: 50px;
            cursor: pointer;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: white;
        }
        .hero {
            <img src=""C:\Users\SHARVARI JADHAV\Downloads\WhatsApp Image 2024-10-24 at 11.22.07 AM.jpeg"" alt="Logo">
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            color: white;
        }
        .hero h1 {
            font-size: 3em;
            color: #FF4500; /* Shade of red */
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .gallery-item {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
        }
        .gallery-item p {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
        }
        .news-section {
            padding: 20px;
            background: #f9f9f9;
        }
        .news-item {
            display: flex;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .news-item img {
            width: 120px;
            height: 80px;
            border-radius: 8px;
            margin-right: 15px;
        }
        .news-item h3 {
            margin: 0;
            color: #4CAF50;
        }
        .news-item p {
            margin: 5px 0;
            color: #555;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            color: #4CAF50;
        }
        .content p {
            line-height: 1.6;
        }
        .kit-market {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .kit-market-item {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .contact-form {
            padding: 20px;
            text-align: center;
        }
        input, textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
    <script>
        function sendContact() {
            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;
            const message = document.getElementById("message").value;

            if (message.length > 100) {
                alert("Message cannot exceed 100 characters.");
                return;
            }

            alert(Message Sent!\n\nEmail: ${email}\nPhone: ${phone}\nMessage: ${message});
            document.getElementById("contactForm").reset(); // Reset form after submission
        }
    </script>
</head>
<body>
    <header>
        <a href="javascript:void(0);" onclick="location.reload();">
            <img src="image.jpeg" alt="Logo">
        </a>
        <h1>I AGRO</h1>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="News.html">News</a>
        <a href="farmer'skit.html">Farmer's Kit</a>  
        <a href="marketaccess.html">Farmers Market</a>
        <a href="account.html">Account</a>
        <a href="contact.html">Contact</a>
    </nav>
    <div class="header-links">
        <nav>
            <a href="farmer'skit.html">Farmer's Kit</a>
            <a href="marketaccess.html">Farmers Market</a>
            <a href="account.html">Account</a>
        </nav>
    </div>
    <div class="hero">
        <h1>Welcome to I AGRO</h1>
    </div>

    <div class="gallery">
        <div class="gallery-item">
            <img src="https://cdn.britannica.com/43/128643-004-17C2CD69/Tractor.jpg" alt="Farmers Kit">
            <p>Farmers Kit</p>
        </div>
        <div class="gallery-item">
            <img src="https://images.pexels.com/photos/95425/pexels-photo-95425.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Farmers Market">
            <p>Farmers Market</p>
        </div>
        <div class="gallery-item">
            <img src="https://sbi.co.in/documents/14463/1284855/110322-SBI-Yono-Krishi_Customer_English-Web-banner_1820px-%28w%29-X-831px-%28h%29.jpg/60b3beed-30d8-3bfd-d54e-e733dc7302a1?t=1647000046308" alt="Account">
            <p>Account</p>
        </div>
        <div class="gallery-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7ls6PugMx_Eh5hX9YHJgExkxTQxBOXFWB0vvdAyZr6_DGu-QzdFPq7BqhTiNhIzhAua8&usqp=CAU" alt="News">
            <p>News</p>
        </div>
    </div>

    <div class="news-section">
        <h2>Latest News</h2>
        <div class="news-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSmJVcMkEgnGm5uKhmkJJRSfmoYLJmUZ2nCDLz7-I-PI1S91om5BfDxJ1kEAqdLrQ1JJA&usqp=CAU" alt="News Image 1">
            <div>
                <h3><a href="https://www.mahindraagri.com/news/article1" target="_blank">Exciting New Innovations in Agriculture</a></h3>
                <p>Discover the latest technologies that are transforming the agricultural sector, making farming more efficient than ever.</p>
            </div>
        </div>
        <div class="news-item">
            <img src="https://www.aljazeera.com/wp-content/uploads/2020/11/Indiafarmersprotest6.jpg?resize=770%2C513&quality=80" alt="News Image 2">
            <div>
                <h3><a href="https://www.mahindraagri.com/news/article2" target="_blank">Sustainable Practices for Modern Farming</a></h3>
                <p>Learn about eco-friendly farming practices that promote sustainability and increase yield.</p>
            </div>
        </div>
        <!-- More news items can be added similarly -->
    </div>

    <div class="kit-market">
        <div class="kit-market-item" id="farmerskit">
            <h2>Farmer's Kit</h2>
            <p>Explore a comprehensive kit tailored for farmers that includes essential tools, resources, and information to enhance productivity.</p>
        </div>
        <div class="kit-market-item" id="farmersmarket">
            <h2>Farmers Market</h2>
            <p>Connect with local farmers to access fresh produce and products directly from the source, promoting local agriculture.</p>
        </div>
    </div>

    <div class="contact-form" id="contact">
        <h2>Contact Us</h2>
        <form id="contactForm" onsubmit="event.preventDefault(); sendContact();"></form>
        <form action="php.php" method="post">
            <input type="email" id="email" placeholder="Your Email" required>
            <input type="tel" id="phone" placeholder="Your Phone Number" required>
            <textarea id="message" placeholder="Your Message (max 100 characters)" maxlength="100" required></textarea>
            <button type="submit"  >Send Message</button>
            </form>
    </form>
    </div>

    <div class="content">
        <h2 id="news articles">News Articles</h2>
        <p>Read our latest news articles on agriculture.</p>
        <h2 id="account">Account</h2>
        <p>Manage your account and preferences.</p>
        <h2 id="contact">Contact Us</h2>
        <p>Get in touch with us for any queries or support.</p>
    </div>
    <footer>
        <p>&copy; 2024 I AGRO. All rights reserved.</p>
    </footer>
</body>
</html>