<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form JS</title>
    <link rel="stylesheet" href="assets/styles.css">

</head>

<body>

    <form name="form">
        <h1>Melvyn</h1>
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="number">Phone :</label>
            <textarea type="number" id="phone" name="user_phone"></textarea>
        </div>
        <div>
            <label for="msg">Meessage :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div>
            <input id="submit" type="submit">
        </div>

    </form>
    <script src="assets/js/scripts.js"></script>
</body>

</html>