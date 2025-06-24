<section class="list-product">

    <div class="logomarque">
        <img src="../public/images/Apple.png" alt="logoApple">
        <span>Apple</span>
    </div>

    <div class="cards-products">

        <!-- <?php foreach ($produits as $produit): ?>
            <a href="<?= ROOT ?>listeProduit/detailProduit" class="no-style">
                <div class="card-product">
                    <img src="../public/images/<?= $produit['image'] ?>" alt="">
                    <span><?= $produit['modele'] ?></span>
                </div>
            </a>
        <?php endforeach; ?> -->

        <?php foreach ($produits as $produit): ?>
            <form action="<?= ROOT ?>listeProduit/detailProduit" method="POST">
                <input type="hidden" name="id" value="<?= $produit['id'] ?>">
                <button type="submit" style="all: unset; cursor: pointer;">
                    <div class="card_prod">
                        <img style="height: 150px;" src="../public/images/<?= $produit['image'] ?>" alt="">
                        <span><?= $produit['modele'] ?></span>
                    </div>
                </button>
            </form>
        <?php endforeach ?>

    </div>

    <div class="count-page">
        <p>1 | 2 | 3</p>
    </div>

</section>