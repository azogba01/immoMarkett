<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire de Paiement</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    form {
        max-width: 600px;
        margin: 50px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 15px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<form action="#" method="post">
    <h2>Formulaire de Paiement</h2>
    <label for="nom">Nom du Client:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="adresse">Adresse de Livraison:</label>
    <input type="text" id="adresse" name="adresse" required>

    <label for="email">Adresse Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="tel">Téléphone:</label>
    <input type="tel" id="tel" name="tel" required>

    <label for="carte">Type de Carte de Crédit:</label>
    <select id="carte" name="carte" required>
        <option value="visa">Visa</option>
        <option value="mastercard">MasterCard</option>
        <option value="amex">American Express</option>
    </select>

    <label for="numero">Numéro de Carte de Crédit:</label>
    <input type="text" id="numero" name="numero" required>

    <label for="expiration">Date d'Expiration:</label>
    <input type="text" id="expiration" name="expiration" placeholder="MM/AA" required>

    <label for="cvv">Code de Sécurité (CVV):</label>
    <input type="text" id="cvv" name="cvv" required>

    <label for="montant">Montant à Payer:</label>
    <input type="text" id="montant" name="montant" required>

    <label>
        <input type="checkbox" name="terms" required> J'accepte les termes et conditions.
    </label>

    <input type="submit" value="Payer">
</form>

</body>
</html>
```

Cet exemple crée un formulaire de paiement basique avec des champs pour le nom du client, l'adresse de livraison, l'adresse email, le téléphone, le type de carte de crédit, le numéro de carte, la date d'expiration, le code de sécurité (CVV) et le montant à payer. Il inclut également une case à cocher pour accepter les termes et conditions, ainsi qu'un bouton de soumission.