<?php include("inc/header.inc.php"); ?>
<?php //load gift list
$gift_list = $db->query('SELECT * FROM gift_list');
$gift_list_result = $events->fetch_assoc();


?>
<!-- All above this is for each page -->
<title>The Wedding of <?= $wedding_name; ?> | Our Story</title>
</head>

<body>
    <?php include("inc/nav.inc.php"); ?>
    <div class="hero gift-hero">
        <div class="container hero-container">
            <div class="hero-title text-center ">
                <h1>Our Gift List</h1>
                <p><?= $wedding_name; ?></p>

            </div>
            <div class="hero-img-card">
                <img src="assets/img/hero/index-hero-card.jpg" alt="">
            </div>
        </div>
    </div>

    <main>
        <section class="container">
            <h2 class="text-center my-3">Our gift ideas</h2>
            <p class="text-center">We are very grateful for any gift you might wish to give us, if you are not sure what we may like, here are some ideas.</p>

            <?php if ($gift_list->num_rows > 0) : ?>
                <?php foreach ($gift_list as $gift_item) : ?>
                    
                        <div class="std-card my-3">
                            <h3><?= $gift_item['gift_item_name']; ?></h3>
                            <p><?= $gift_item['gift_item_desc']; ?></p>
                        </div>
                   
                    


                <?php endforeach; ?>
            <?php endif; ?>


        </section>


        <div class="my-7 section-divider">
            <img src="assets/img/flowers.svg" alt="">
        </div>



    </main>
    <?php include("inc/footer.inc.php"); ?>

</body>

</html>