<?php include 'header.php'?>
  <!-- ---------------------------------------------gallery -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBS gallery</title>
     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="../../images/logo.png" />
  </head>
  <body>
    
  </body>
  </html>
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    .container {
      max-width: 1224px;
      width: 90%;
      margin: auto;
      padding: 40px 0;
    }

    .title {
      margin-bottom: 2rem;
    }

    .photo_gallery {
      display: flex;
      gap: 20px;
    }

    .column {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .photo img {
      width: 100%;
      height: 100%;
      border-radius: 5px;
      object-fit: cover;

    }

     .img-galeria {
        object-fit: cover;
        width: 30%;
        display: block;
        margin-bottom: 15px;
        box-shadow: 0 0 6px rgb(0, 0, 0, 0.5);
        cursor: pointer;
        border-radius: 10px;
    }

    .img-galeria:hover {
        transition: all 0.3s ease-in-out;
        transform: scale(1.1);
    }

    @media(max-width:768px) {
      .photo_gallery {
        flex-direction: column;
      }
    }
  </style>
  <div class="container">
    <h2  class="title"></h2>
    <div class="photo_gallery">
        <div class="column">
            <div class="photo"><a href="images/site (1).jpg"><img class="image img-galeria " src="images/site (1).jpg" alt=""></a></div>
            <div class="photo"><a href="images/site (2).jpg"><img class="image img-galeria " src="images/site (2).jpg" alt=""></a></div>
            <div class="photo"><a href="images/site (3).jpg"><img class="image img-galeria " src="images/site (3).jpg" alt=""></a></div>
            <div class="photo"><a href="images/site (4).jpg"> <img class="image img-galeria " src="images/site (4).jpg" alt=""></a></div>
            <div class="photo"><a href="images/site (17).jpg"><img class="image img-galeria " src="images/site (17).jpg" alt=""></a></div>
            <div class="photo"><a href="images/food (2).jpg"><img class="image img-galeria " src="images/food (2).jpg" alt=""></a></div>
        </div>
        <div class="column">
          <div class="photo"><a href="images/food (1).jpg"><img class="image img-galeria " src="images/food (1).jpg" alt=""></a></div> 
            <div class="photo"><a href="images/site (10).jpg"><img class="image img-galeria " src="images/site (10).jpg" alt=""></a></div>
            
         
           
            
            
        </div>
        <div class="column">
           <div class="photo"><a href="images/food (3).jpg"><img class="image img-galeria " src="images/food (3).jpg" alt=""></a></div>
            <div class="photo"><a href="images/site (5).jpg"><img class="image img-galeria " src="images/site (5).jpg" alt=""></a></div>
            <div class="photo"><a href="images/site (6).jpg"><img class="image img-galeria " src="images/site (6).jpg" alt=""></a></div>
            <div class="photo"><a href="images/food (5).jpg"><img class="image img-galeria " src="images/food (5).jpg" alt=""></a></div>
            <div class="photo"><a href="images/site (7).jpg"><img class="image img-galeria " src="images/site (7).jpg" alt=""></a></div>
            <div class="photo"><a href="images/site (8).jpg"><img class="image img-galeria " src="images/site (8).jpg" alt=""></a></div>
            
          
        </div>
    </div>
</div>



<?php include 'footer.php'?>