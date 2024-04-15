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
   <title>FAQ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

<style>
    /* Add styles for FAQ page */

.faq {
  padding: 50px;
}

.faq .title {
  text-align: center;
  margin-bottom: 30px;
  font-size: 24px;
}

.faq .box-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}

.faq .box {
  background: #f9f9f9;
  padding: 20px;
  border-radius: 10px;
  border: 1px solid #ccc; 
}

.faq .box h2 {
  margin-bottom: 10px;
  color: #333;
  font-size: 18px;
}

.faq .box p {
  color: #666;
  font-size: 16px;
  line-height: 1.6;
}

</style>

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Frequently Asked Questions</h3>
   <p> <a href="home.php">Home</a> / FAQ </p>
</div>

<section class="faq">

   <h1 class="title">Frequently Asked Questions</h1>

   <div class="box-container">

      <div class="box">
         <h2>How can I place an order?</h2>
         <p>To place an order, simply browse our products, add items to your cart, and proceed to checkout.</p>
      </div>

      <div class="box">
         <h2>What payment methods do you accept?</h2>
         <p>We accept all major credit and debit cards, as well as PayPal.</p>
      </div>

      <div class="box">
         <h2>Can I cancel or change my order?</h2>
         <p>Once an order has been placed, it cannot be canceled or changed. Please review your order carefully before confirming.</p>
      </div>

      <div class="box">
         <h2>Do you offer international shipping?</h2>
         <p>Yes, we offer international shipping to select countries. Please contact us for more information.</p>
      </div>

      <div class="box">
         <h2>What is your return policy?</h2>
         <p>We offer a 30-day return policy for unused and unopened items. Please see our Returns page for more details.</p>
      </div>

      <div class="box">
         <h2>How can I track my order?</h2>
         <p>Once your order has been shipped, you will receive a tracking number via email. You can use this number to track your package online.</p>
      </div>

      <div class="box">
        <h2>What genres of books do you offer?</h2>
        <p>We offer a wide range of genres, including fiction, non-fiction, romance, mystery, thriller, science fiction, fantasy, biography, self-help, and more. Whatever your interests, we have something for everyone!</p>
      </div>

      <div class="box">
        <h2>Are there any book clubs or reading groups associated with your bookstore?</h2>
        <p>Yes, we host book clubs and reading groups where members can discuss and explore various literary works together. It's a great way to connect with fellow book lovers, share insights, and engage in lively discussions about books.</p>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
