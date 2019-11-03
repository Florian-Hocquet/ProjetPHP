<?php
require $navbar;
?>

<div class="container-form-inscription">
    <h1> Tu veux créer une discussion ? </h1>
    <h2> Tu es au bon endroit ! </h2>
    <form class="form" action="<?php echo $create_disc_model ?>" method="post">
        <p> Nom de la discussion </p>
        <input class="bouton" type="text" name="name_disc" maxlength="30" required/>
        <p> Entre ici ton premier message  </p>
        <input class="bouton" type="text" name="message" maxlength="20" placeholder="Entrer un message de deux mots maximum" required pattern="^([A-Za-z0-9'éèàùâêîôûëïç]*-?[A-Za-z0-9'éèàùâêîôûëïç]*-?[A-Za-z0-9'éèàùâêîôûëïç]* [A-Za-z0-9'éèàùâêîôûëïç]*-?[A-Za-z0-9'éèàùâêîôûëïç]*-?[A-Za-z0-9'éèàùâêîôûëïç]*)$|^([A-Za-z0-9'éèàùâêîôûëïç]*-?[A-Za-z0-9'éèàùâêîôûëïç]*-?[A-Za-z0-9'éèàùâêîôûëïç]*)$"/>
        <p> Nombre de message autorisés dans la discussion (max = 30) </p>
        <input class="bouton" type="number" max="30" min="1" required name="nb_msg_max"/>
        <br><br>
        <input class ="submit" type="submit" name="action" value="Créer ma discussion"/>
    </form>
</div>

</body>
</html>