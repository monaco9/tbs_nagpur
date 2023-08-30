<?php require('header.php');
      require('./admin/html/dbconn.php');?>
<!-- Tailwind Css -->
<!-- <script src="https://cdn.tailwindcss.com"></script> -->


<link href="contact.css" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Alice&family=Tangerine&display=swap');

    body {
        font-family: 'Alice', serif;

    }
</style>

<body>
<div class="container-fluid py-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4">
                <h5 class="section-title ff-secondary  text-start text-danger">Address:</h5>
                <p><i class="fa-solid fa-location-dot" style="color: #b01717;"></i> Kondali,Nagpur</p>
            </div>
            <div class="col-md-4">
                <h5 class="section-title ff-secondary fw-normal text-start text-danger">Mobile No:</h5>
                <p><i class="fa-solid fa-phone" style="color: #a90f0f;"></i> +91-9373094760</p>
            </div>
            <div class="col-md-4">
                <h5 class="section-title ff-secondary fw-normal text-start text-danger">Email:</h5>
                <p><i class="fa-regular fa-envelope" style="color: #b30909;"></i> zmirza907@gamil.com</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3721.4120063755777!2d78.68449787525954!3d21.135995880540197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjHCsDA4JzA5LjYiTiA3OMKwNDEnMTMuNSJF!5e0!3m2!1sen!2sin!4v1691823792620!5m2!1sen!2sin"
                    height="450" style="border:0; width:100%;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">

                    <form action="admin/html/contact_action.php" method="POST"> 
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" placeholder="Your Mobile No" name="mobile" required>
                                    <label for="name">Your Mobile No</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 150px" name="message" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-danger w-100 py-3 " type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<?php require('footer.php') ?>
</body>

<!-- mail -->
<?php
if(isset($_POST['message'])){
$to = "mushmiir@gmail.com, zmirza907@gmail.com";
$subject = $_POST('subject');

$message = $_POST('message'); 
$from = $_POST('email'); 
$headers = "From : $from";

mail($to,$subject,$message,$headers);
echo "Mail has been sent.";
}
?>