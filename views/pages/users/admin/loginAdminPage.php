<section class="monespaceadmin">

    <div class="box-connexion">

        <div class="formulaire">

            <h1>Connexion</h1>

            <form action="<?= ROOT ?>admin/adminPage" method="POST">

                <div class="mail">
                    <label for="mail">Adresse e-mail :</label>
                    <input type="text" name="mail" id="mail">
                </div>

                <div class="mdp">
                    <label for="mdp">Mot de passe :</label>
                    <input type="text" name="mdp" id="mdp">
                </div>

                <div class="bouton">
                    <input type="submit" value="Se connecter en tant qu'administrateur">
                </div>

            </form>

        </div>

    </div>

</section>