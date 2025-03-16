<main>
    <h1><?= $until_message ?></h1>
    <picture id="img-container">
        <?php foreach ($data as $d) : ?>
            <img src=<?= $d['url'] ?> alt="cat">
        <?php endforeach; ?>
    </picture>
</main>