<?php  

include 'head.php';

?>

<body>
<div class= "col-md-6"> 
 <div class= "paydiv">
 
  <form id= "paymentForm">
   <div>
    <input type= "text" class= "form-control" placeholder= "Your Email" id= "email-address" required />
   </div>

   <div style= "margin-top: 5dvh;">
    <button class= "btn btn-success" type="submit" onclick= "payWithPaystack()" style= " width: 35%;"> Buy Now </button>
   </div>

   <script src= "https://js.paystack.co/v1/inline.js"> </script>
   <script src= "js/index.js"> </script>
  </form>

  <p id="successMessage" style="display: none; margin-top: 12vdh;">Payment successful! <a href="success.php">View your Receipt</a></p>

</div>
</div>
</body>
</html>