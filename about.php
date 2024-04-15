<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>YPC Book Store for College</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="index.html">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Explore the reasons why YPC Book Store for College is your go-to destination for all your academic needs.</p>
         <p>Discover YPC BookStore, where our mission is deeply rooted in delivering top-notch literature to readers worldwide. Embrace the opportunity to explore the essence of YPC BookStore and our unwavering commitment to quality literary offerings. Dive into a world where every page holds the promise of enlightenment, entertainment, and enrichment.</p>
         <p>Moreover, our dedication extends beyond merely providing books; it encompasses fostering a global community of avid readers and knowledge seekers. We believe that literature has the power to connect people across cultures and continents, transcending boundaries and enriching lives.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Reviews</h1>

   <div class="box-container">

      <?php
         $reviews = array(
            array(
               'image' => 'images/pic-1.png',
               'text' => 'Excellent selection of books! YPC Book Store for College has everything I need for my courses.',
               'name' => 'John Deo'
            ),
            array(
               'image' => 'images/pic-2.png',
               'text' => 'Great service and fast delivery! I\'m impressed with the efficiency of YPC Book Store for College.',
               'name' => 'Jane Smith'
            ),
            array(
               'image' => 'images/pic-3.png',
               'text' => 'This book store has a wide range of textbooks at affordable prices. Highly recommended!',
               'name' => 'Michael Johnson'
            ),
            array(
               'image' => 'images/pic-4.png',
               'text' => 'I love shopping at YPC Book Store for College! The website is easy to navigate, and the prices are unbeatable.',
               'name' => 'Emily Davis'
            ),
            array(
               'image' => 'images/pic-5.png',
               'text' => 'The customer service at YPC Book Store for College is exceptional! They go above and beyond to help students.',
               'name' => 'Daniel Wilson'
            ),
            array(
               'image' => 'images/pic-6.png',
               'text' => 'I\'ve been a loyal customer of YPC Book Store for College for years. They always have the textbooks I need at great prices.',
               'name' => 'Sophia Brown'
            )
         );

         foreach ($reviews as $review) {
      ?>
      <div class="box">
         <img src="<?php echo $review['image']; ?>" alt="">
         <p><?php echo $review['text']; ?></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><?php echo $review['name']; ?></h3>
      </div>
      <?php } ?>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great Authors</h1>

   <div class="box-container">

      <?php
         $authors = array(
            array(
               'image' => 'images/author-1.jpg',
               'name' => 'John Deo'
            ),
            array(
               'image' => 'images/author-2.jpg',
               'name' => 'Jane Smith'
            ),
            array(
               'image' => 'images/author-3.jpg',
               'name' => 'Michael Johnson'
            ),
            array(
               'image' => 'images/author-4.jpg',
               'name' => 'Emily Davis'
            ),
            array(
               'image' => 'images/author-5.jpg',
               'name' => 'Daniel Wilson'
            ),
            array(
               'image' => 'images/author-6.jpg',
               'name' => 'Sophia Brown'
            )
         );

         foreach ($authors as $author) {
      ?>
      <div class="box">
         <img src="<?php echo $author['image']; ?>" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3><?php echo $author['name']; ?></h3>
      </div>
      <?php } ?>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>
