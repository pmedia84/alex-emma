<?php include("inc/header.inc.php"); ?>
<!-- All above this is for each page -->
<title>The Wedding of <?= $wedding_name; ?> | Contact Us</title>
</head>

<body>
    <?php include("inc/nav.inc.php"); ?>
    <div class="hero contact-hero">
        <div class="container hero-container">
            <div class="hero-title text-center ">
                <h1>Get In Touch</h1>
                <p><?= $wedding_name; ?></p>
                <p><?= $wedding_date; ?></p>

            </div>
            <div class="hero-img-card">
            <img src="assets/img/hero/hero-img.webp" alt="" height="400px">
            </div>
        </div>
    </div>

    <main>
        <section class="container my-3 ">
            <div class="std-card">
                <h2 class="text-center">Contact Us</h2>
                <p>Got a question about our big day? Or simply just want to send us a message, then drop us a line and we will get back to you...</p>


                <form class="form-card my-3" id="contact" action="scripts/contact.script.php" method="post">
                    <div class="form-input-wrapper">
                        <label for="visitor_email"><strong>Email Address</strong></label>
                        <!-- input -->
                        <input type="email" name="visitor_email" id="visitor_email" placeholder="Enter email address..." required="" maxlength="45" value="" autocomplete="email">
                    </div>
                    <div class="form-input-wrapper">
                        <label for="visitor_phone"><strong>Phone Number</strong></label>
                        <!-- input -->
                        <input type="text" name="visitor_phone" id="visitor_phone" placeholder="Enter phone number..." required="" maxlength="45" value="" autocomplete="tel">
                    </div>
                    <div class="form-input-wrapper">
                        <label for="visitor_name"><strong>Name</strong></label>
                        <!-- input -->
                        <input type="text" name="visitor_name" id="visitor_name" placeholder="Enter your name..." required="" maxlength="45" autocomplete="name">
                    </div>
                    <div class="form-input-wrapper">
                        <label for="visitor_message"><strong>Your Message</strong></label>
                        <textarea name="visitor_message" id="visitor_message" cols="30" placeholder="Enter your message here..."></textarea>

                    </div>
                    <div class="google-policy">
                            <p>Our website is protected by reCAPTCHA and the Google</p>
                            <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
                            <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                        </div>
                    <div class="button-section my-3">
                        <button class="btn-primary form-controls-btn loading-btn" type="submit">Send Message<img id="loading-icon" class="loading-icon d-none" src="./assets/img/icons/loading.svg" alt=""></button>
                    </div>
                </form>
                <div id="response" class="d-none">
                </div>
            </div>
        </section>


        <div class="my-7 section-divider">
            <img src="assets/img/flowers.svg" alt="">
        </div>



    </main>
    <?php include("inc/footer.inc.php"); ?>

</body>
<script>



    $('#contact').submit(function(event) {
        event.preventDefault(); //prevent form default submit
        //bring in recaptcha scripts and request token
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdLOSYkAAAAAMhX6ojn3hk-B6v3-NWkLb-YrdB-', {
                action: 'submit'
            }).then(function(token) {
                var formData = new FormData($("#contact").get(0));
                formData.append("token", token);//append the recaptcha token
                $.ajax({ //start ajax post
                    type: "POST",
                    url: "scripts/contact.script.php",
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() { //animate button
                        $("#loading-icon").show(400);
                    },
                    complete: function() {
                        $("#loading-icon").hide(400);
                    },
                    success: function(data, responseText) {
                        $("#response").html(data);
                        $("#response").slideDown(400);
                    }
                });
            });
        });
    });
</script>

</html>