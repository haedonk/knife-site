<?php


if($_POST["message"]) {


mail("kaufmanrheagan@email.address", "Question: Will Kraemer",


$_POST["insert your message here"]. "From: haka9670@gmail.com");


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;400&family=Josefin+Slab:wght@600&display=swap" rel="stylesheet">
    <title>WK Contact</title>
</head>
<body>

    <div class="main">

        <header>
            <img id="logo" src="images/logo.png" alt="logo">
            <h1 id="webTitle">Kraemer Metalworks</h1>
            <div class="right"></div>
        </header>
    
        <nav>
            <a href="javascript:void(0);" class="myicon" onclick="myFunction()">
                <div class="iconCont"><div class="icon first"></div><div class="icon mid"></div><div class="icon last"></div></div>
              </a>
            <ul class="topNav" id="myTopNav">
                <li><a id="home" href="index.html">Home</a></li>
                <li><a id="shop" href="shop.html">Shop</a></li>
                <li><a id="knifeGallery" href="knifeGallery.html">Knife Gallery</a></li>
                <li><a id="metalPro" href="metalPro.html">Metal Projects</a></li>
                <li><a id="contact" href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <div class="contactGroup">
            <section>

                <h2>Get In Touch</h2>
    
                 <p>
                    For inquires about custom orders or current orders, please fill out the contact form.
                 </p>
    
            </section>
    
            <form method="post" action="contactform.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="123-456-7890">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary m-2">Submit</button>
              </form>
        </div>

        <footer>
          <a href="https://instagram.com/kraemer.metalworks?igshid=YmMyMTA2M2Y="><img id="insta" src="images/socials/instagramLogoFix.png" alt="insta"></a>
          <a href="https://www.facebook.com/will.kraemer.7"><img id="insta" src="images/socials/Facebook-logoFix.png" alt="facebook"></a>
        </footer>

    </div>
    
    <script>
        function myFunction() {
          var x = document.getElementById("myTopNav");
          if (x.className === "topNav") {
            x.className += " responsive";
          } else {
            x.className = "topNav";
          }
        }
    </script>
</body>
</html>