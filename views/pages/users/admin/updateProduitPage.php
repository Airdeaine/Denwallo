<section class="monespace">

    <div class="box-formAddProduit">

        <div class="formulaire">

            <h1>Modification du produit</h1>

            <form action="<?=ROOT?>admin/updateProduitDB" method="POST">

                <div class="marque">
                    <label for="marque">Marque :</label>
                    <input type="text" value="<?= $produit['marque'] ?>" name="marque" id="marque" required>
                </div>

                <div class="modele">
                    <label for="modele">Modèle :</label>
                    <input type="text" value="<?= $produit['modele'] ?>" name="modele" id="modele" required>
                </div>

                <div class="imageduprod">
                    <label for="image">Image :</label>
                    <input type="text" value="<?= $produit['image'] ?>" name="image" id="image" required>
                </div>

                <div class="stockage">
                    <label for="stockage">Stockage :</label>
                    <input type="number" value="<?= $produit['stockage'] ?>" name="stockage" id="stockage" required>
                </div>

                <div class="couleur">
                    <label for="couleur">Couleur :</label>
                    <input type="text" value="<?= $produit['couleur'] ?>" name="couleur" id="couleur" required>
                </div>

                <div class="os">
                    <label for="si">Système d'exploitation :</label>
                    <input type="text" value="<?= $produit['os'] ?>" name="os" id="os" required>
                </div>

                <div class="ram">
                    <label for="ram">RAM :</label>
                    <input type="text" value="<?= $produit['ram'] ?>" name="ram" id="ram" required>
                </div>

                <div class="resolution">
                    <label for="resolution">Résolution :</label>
                    <input type="text" value="<?= $produit['resolution'] ?>" name="resolution" id="resolution" required>
                </div>

                <div class="taille">
                    <label for="taille">Taille :</label>
                    <input type="text" value="<?= $produit['taille'] ?>"name="taille" id="taille" required>
                </div>

                <div class="prix">
                    <label for="taille">Prix :</label>
                    <input type="text" value="<?= $produit['prix'] ?>" name="prix" id="prix" required>
                </div>

                <div>
                    <input type="hidden" name="id" value="<?= $produit['id'] ?>">
                </div>

                <div class="bouton">
                    <input type="submit" value="Soumettre">
                    <input type="reset" value="Annuler">
                </div>

            </form>

        </div>

    </div>

</section>