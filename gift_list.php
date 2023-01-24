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
    <div class="hero index-hero">
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
                    <?php if ($gift_item['gift_item_type'] == "message") : ?>
                        <div class="std-card my-3">
                            <h3><?= $gift_item['gift_item_name']; ?></h3>
                            <p><?= $gift_item['gift_item_desc']; ?></p>
                        </div>
                    <?php else : ?>
                        <div class="grid-auto-sm">
                            <div class="gift-item-card my-3">
                                <div class="gift-item-card-body">
                                    <h3><?= $gift_item['gift_item_name']; ?></h3>
                                    <p><?= $gift_item['gift_item_desc']; ?></p>
                                    <?php if(!$gift_item['gift_item_url']==""):?>
                                    <a href="http://<?= $gift_item['gift_item_url']; ?>" target="_blank"><?= $gift_item['gift_item_url']; ?> <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                    <?php endif;?>
                                </div>
                                <img src="assets/img/venue/mercure.jpg" alt="" class="gift-item-img">
                            </div>
                        </div>
                    <?php endif; ?>


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