<?php include("inc/header.inc.php"); ?>
<!-- All above this is for each page -->
<title>The Wedding of <?= $wedding_name; ?> | Our Story</title>
</head>

<body>
    <?php include("inc/nav.inc.php"); ?>
    <div class="hero index-hero">
        <div class="container hero-container">
            <div class="hero-title text-center ">
                <h1>Our Story</h1>
                <p><?= $wedding_name; ?></p>
                
            </div>
            <div class="hero-img-card">
                <img src="assets/img/hero/index-hero-card.jpg" alt="">
            </div>
        </div>
    </div>

    <main>
        <section class="container my-7 ">
            <div class="std-card">
                <h2 class="text-center">How it all began!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quos dolorum consequatur dicta nemo porro omnis, vero autem voluptates laborum praesentium tempora exercitationem aliquam. Nesciunt est esse eius, atque quidem maiores possimus. At quos assumenda modi commodi nam odio earum fuga, voluptatem autem labore est, rerum reiciendis amet eius optio?</p>
                <br><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod beatae aliquam esse assumenda doloremque ipsa facere voluptatum laboriosam et sint rerum recusandae id laborum obcaecati, dignissimos itaque, illo quae culpa dolorum tenetur. Adipisci, nihil. Qui repellendus tenetur, magnam rerum sed dolor adipisci corporis cupiditate et veritatis similique mollitia repudiandae facilis.</p>
            </div>

        </section>

        
<div class="my-7 section-divider">
    <img src="assets/img/flowers.svg" alt="">
</div>



    </main>
    <?php include("inc/footer.inc.php"); ?>

</body>

</html>