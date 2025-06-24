<section class="product-details">

    <div class="alldetail">

        <div class="top-detailprod">

            <a href="<?= ROOT ?>listeProduit"> <img src="../public/images/retour.png" alt="retour"></a>
            <button><img src="../public/images/ajoutpanier.png" alt=""></button>

        </div>

        <div class="centerdetail">

            <div class="img-product">
                <img style="height: 575px; width: 470px;" src="../public/images/iphone-11bis.jpg" alt="iphone11bis">
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

                </div>

            </div>

        </div>

    </div>

</section>