<section class="list-product">

    <div class="logomarque">
        <img src="../public/images/Apple.png" alt="logoApple">
        <span>Apple</span>
    </div>

    <div class="cards-products">

        <?php foreach($produits as $produit): ?>
        <a href="<?=ROOT?>listeProduit/detailProduit" class="no-style">
            <div class="card-product">
                <img src="../public/images/<?= $produit['image']?>" alt="">
                <span><?= $produit['modele']?></span>
            </div>
        </a>
        <?php endforeach; ?>

        <div class="card-product"></div>
        <div class="card-product"></div>
        <div class="card-product"></div>
        <div class="card-product"></div>
        <div class="card-product"></div>
    </div>

    <div class="count-page">
        <p>1 | 2 | 3</p>
    </div>

</section>