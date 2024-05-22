<aside>
    <h2>Tageskarte</h2>
    <div class="container">
        <a class="box">
            <img src="<?= base_url() ?>pictures/Sandwich.webp" alt="Sandwich Bild">
            <p class="box-title">Sandwich</p>
            <p class="box-body">
                mit Tomaten, Salat, Schinken, Gurken, Mais
            </p>
        </a>
    </div>
</aside>
<article>
    <div id="msg"></div>
    <section>
        <!-- About -->
        <h2>Über uns</h2>
        <p>Unternehmensvorstellung. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae commodi laboriosam omnis quibusdam sit atque eum. Temporibus enim vitae vero, blanditiis dolores perspiciatis, ducimus a repellendus quibusdam, tenetur aliquam magnam.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis itaque eveniet delectus hic debitis, at et perspiciatis similique deserunt distinctio ratione eligendi dicta quas quis sint accusamus porro dolor? Iusto!</p>
    </section>
    <hr>
    <section>
        <!-- Karte -->
        <h2>Speisekarte</h2>
        <div id="menu" class="container">
            <? foreach ($products as $product) : ?>
                <a class="box">
                    <img src="<?= base_url() ?>pictures/Sandwich.webp" alt="Sandwich Bild">
                    <p class="box-title"><?= $product['name'] ?></p>
                    <p class="box-body">
                        mit Tomaten, Salat, Schinken, Gurken, Mais
                        <? var_dump($product) ?>
                    </p>
                </a>
            <? endforeach ?>
        </div>
    </section>
</article>
