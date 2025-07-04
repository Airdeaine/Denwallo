<section class="monespace">

    <div class="box-formAddProduit">

        <div class="formulaire">

            <h1>Nouveau Produit</h1>

            <form action="<?=ROOT?>admin/nouveauProduit" method="POST">

                <div class="marque">
                    <label for="marque">Marque :</label>
                    <input type="text" name="marque" id="marque">
                </div>

                <div class="modele">
                    <label for="modele">Modèle :</label>
                    <input type="text" name="modele" id="modele">
                </div>

                <div class="imageduprod">
                    <label for="image">Image :</label>
                    <input type="text" name="image" id="image">
                </div>

                <div class="stockage">
                    <label for="stockage">Stockage :</label>
                    <input type="number" name="stockage" id="stockage">
                </div>

                <div class="couleur">
                    <label for="couleur">Couleur :</label>
                    <input type="text" name="couleur" id="couleur">
                </div>

                <div class="os">
                    <label for="si">Système d'exploitation :</label>
                    <input type="text" name="os" id="os">
                </div>

                <div class="ram">
                    <label for="ram">RAM :</label>
                    <input type="text" name="ram" id="ram">
                </div>

                <div class="resolution">
                    <label for="resolution">Résolution :</label>
                    <input type="text" name="resolution" id="resolution">
                </div>

                <div class="taille">
                    <label for="taille">Taille :</label>
                    <input type="text" name="taille" id="taille">
                </div>

                <div class="prix">
                    <label for="taille">Prix :</label>
                    <input type="text" name="prix" id="prix">
                </div>

                <div class="bouton">
                    <input type="submit" value="Soumettre">
                    <input type="reset" value="Annuler">
                </div>

            </form>

        </div>

    </div>

</section>