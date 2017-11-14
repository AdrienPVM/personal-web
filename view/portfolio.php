<section id="portfolio">

    <?php foreach ($result as $article) { ?>
        <article>
            <img src="<?= $article['por_image'] ?>" alt="Portfolio pic">
            <a href="<?= $article['por_link'] ?>">
                <div>
                    <h2 class="portfolioTitle"><?= $article['por_title'] ?></h2>
                    <span class="portfolioText"><?= $article['por_text'] ?></span>
                </div>
            </a>
        </article>
    <?php } ?>

</section>