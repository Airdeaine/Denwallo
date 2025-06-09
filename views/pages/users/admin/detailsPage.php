<section class="product-details">

    <div class="alldetail">

        <div class="top-detailprod">

            <a href="<?= ROOT ?>admin/adminProduit"> <img src="../public/images/retour.png" alt="retour"></a>
            <form class="btn-modifier" action="<?= ROOT ?>admin/modifierProduit" method="POST">
                <input type="hidden" name="id" value="<?= $produit['id'] ?>">
                <button class="" type="submit" style="all: unset; cursor: pointer;">
                    Modifier
                </button>
            </form>

        </div>

        <div class="centerdetail">

            <div class="img-product">
                <img style="height: 575px; width: 470px;" src="../public/images/<?= $produit['image'] ?>"
                    alt="iphone11bis">
            </div>

            <div class="detail-product">

                <div class="caractere">

                    <h1>Details</h1>

                    <p>Marque : <?= ucfirst($produit['marque']) ?></p>
                    <p>Modèle : <?= ucfirst($produit['modele']) ?></p>
                    <p>Stockage : <?= ucfirst($produit['stockage']) ?> Go</p>
                    <p>Couleur : <?= ucfirst($produit['couleur']) ?></p>
                    <p>Système d'exploitation : <?= ucfirst($produit['os']) ?></p>
                    <p>RAM : <?= ucfirst($produit['ram']) ?></p>
                    <p>Résolution : <?= ucfirst($produit['resolution']) ?></p>
                    <p>Taille : <?= ucfirst($produit['taille']) ?></p>
                    <p>Prix : <?= ucfirst($produit['prix']) ?> &euro;</p>


                </div>

            </div>

        </div>

    </div>

</section>