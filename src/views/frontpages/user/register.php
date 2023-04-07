<h2>Inscription</h2>
<form method="POST" action="index.php?controller=user&action=createUser">
    <div>
        <label for="email">Adresse email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>
    <div>
        <label for="phone">Téléphone:</label>
        <input type="tel" id="phone" name="phone" required>
    </div>
    <div>
        <label for="address">Adresse:</label>
        <input type="text" id="address" name="address" required>
    </div>
    <div>
        <label for="zipcode">Code postal:</label>
        <input type="text" id="zipcode" name="zipcode" required>
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">S'inscrire</button>
</form>
