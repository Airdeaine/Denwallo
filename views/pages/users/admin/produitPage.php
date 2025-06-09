<section class="monespace">

    <div class="contenu_produit">

        <div class="top_contenu">

            <div class="title_contenu">
                <h1>Produits</h1>
            </div>

            <div class="nav_marque">
                <ul>
                    <li>Apple</li>
                    <li>Samsung</li>
                    <li>Xiaomi</li>
                    <li>Huawei</li>
                </ul>
            </div>

            <div class="btn_ajoutProduit">
                <a class="add_btn" href="<?= ROOT ?>admin/ajouterProduit">Ajouter +</a>
            </div>

        </div>

        <div class="cards_prod">

            <?php foreach ($produits as $produit): ?>
                <form action="<?= ROOT ?>admin/detail_produit" method="POST">
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

    </div>

</section>