            <section id="presentation">
                <article>
                    <h1>Adrien PVM</h1>
                    <p>24-year old Full Stack Developer
                    and Game Artist from Luxembourg
                    with 3+ years of experience in
                    infographics and various computer
                    skills. Very good contact, smiling,
                    curious, ability to learn quickly.
                    Great with teamwork and
                    adaptability.
                    </p>
                    <p>I'm fluent in French, English and Dutch</p>
                </article>
            </section>

            <section>
                <div class="arrowUp"></div>
                <section id="inner_arrow">
                    <div id="shape_middleLine"></div>
                    <?php $i=0; ?>
                    <?php foreach ($result as $article) { ?>
                        <?php $i++; ?>
                            <div id="cards">
                                <?php if ($i%2==1) { ?>
                                <div id="smallLine1" class="smallLine"></div>
                                <section id="card" class="card">
    
    
                            <?php } else { ?>
                                <div id="smallLine2" class="smallLine"></div>
                                <section id="card" class="card2">
                                    <?php } ?>
                                            <div id="shape_articlePic">
                                                <img src="<?= $article['dat_image']; ?>" alt="This is the article picture">
                                            </div>
                                            <article>
                                                <h2><?= $article['dat_title']; ?></h2>
                                                <p><?= $article['dat_text']; ?></p>
                                            </article>
                                        </section> 
                                    </div>
                        <?php }; ?>
                    
                </section>

            </section>