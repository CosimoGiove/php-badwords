<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>php badwords</h1>
    <div class="contenitore">
    <form action="richiesta.php" method="get">
        <label for="testo">
           inserisci un testo
        </label>
        <input type="text" name="testo" id="testo">
        <label for="testo2">
            inserisci il testo da censurare
        </label>
        <input type="text" name="testo" id="testo2">
       <button>invia</button>
    </form>
    </div>
</body>
</html>