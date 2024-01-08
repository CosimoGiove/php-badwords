<?php
$testo = $_GET['testo'];
$testo2 = $_GET['testo'];

$paragrafo_con_censure = str_replace($testo2, "***",$testo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>PHP Badwords</h1>
    <main>
        <!-- Primo Paragrafo -->
        <div class="contenitore">
            <h2>Paragrafo originale (<?php echo strlen($testo) ?> caratteri):</h2>
                <div>
                    <?php echo $testo ?>
                </div>
        </div>
        <!-- Secondo Paragrafo -->
        <div class="contenitore censura">
            <h2>Paragrafo censurato (<?php echo strlen($testo2) ?> caratteri):</h2>
                <div>
                    <?php echo $paragrafo_con_censure ?>
                </div>
        </div>
    </main>
</body>
</html>