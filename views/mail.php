<div id="contenu">
    <h2>Entrez mail</h2>
    <div id="notification"><?php if(isset($notification)) echo $notification; ?></div>
    <div class="formulaire">
        <form action="index.php?action=message" method="post">
            <label for="Email">Email:</label><br>
            <input type="text" id="email" name="email">
            <p><input type="submit" name="form_contact" value="Envoyer"></p>
        </form>
    </div>
    <p><?php if(isset($msg)) echo $msg ?></p>
</div>