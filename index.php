<?php

// Définition de la date actuelle
$presentTime = new DateTime();

// Définition de la date de destination
$destinationTime = new DateTime('2015-10-21 04:29:00');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retour vers le future</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <div class="destinationTime">
            <div class="month">
                <p class="date">MONTH</p>
                <p class="number"><?php echo $destinationTime->format('M'); ?></p>
            </div>
            <div class="day">
                <p class="date">DAY</p>
                <p class="number"><?php echo $destinationTime->format('d'); ?></p>
            </div>
            <div class="year">
                <p class="date">YEAR</p>
                <p class="number"><?php echo $destinationTime->format('Y'); ?></p>
            </div>
            <div class="ampm">
                <p class="date">AM/PM</p>
                <p class="number"><?php echo $presentTime->format('A'); ?></p>
            </div>
            <div class="hour">
                <p class="date">HOUR</p>
                <p class="number"><?php echo $presentTime->format('h'); ?></p>
            </div>
            <div class="minute">
                <p class="date">MIN</p>
                <p class="number"><?php echo $presentTime->format('i'); ?></p>
            </div>
            <div class="destTime">
                <p>DESTINATION TIME</p>
            </div>
        </div>
        <div class="presentTime">
            <div class="month">
                <p class="date">MONTH</p>
                <p class="number"><?php echo $presentTime->format('M'); ?></p>
            </div>
            <div class="day">
                <p class="date">DAY</p>
                <p class="number"><?php echo $presentTime->format('d'); ?></p>
            </div>
            <div class="year">
                <p class="date">YEAR
                <p class="number"><?php echo $presentTime->format('Y'); ?></p>
            </div>
            <div class="ampm">
                <p class="date">AM/PM</p>
                <p class="number"><?php echo $presentTime->format('A'); ?></p>
            </div>
            <div class="hour">
                <p class="date">HOUR</p>
                <p class="number"><?php echo $presentTime->format('h'); ?></p>
            </div>
            <div class="minute">
                <p class="date">MIN</p>
                <p class="number"><?php echo $presentTime->format('i'); ?></p>
            </div>
            <div class="presTime">
                <p>PRESENT TIME</p>
            </div>
        </div>

        <?php
        // Calcul de la différence entre les deux dates
        $interval = $presentTime->diff($destinationTime);
        ?>

        <div class="dureeVoyage">
            <h2 class="date">Durée du voyage</h2>
            <p class="number"><?php echo $interval->format('%y ans, %m mois, %d jours, %h heures et %i minutes'); ?></p>
        </div>

        <?php
        // Calcul de la durée en minutes
        $minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;

        // Calcul du carburant nécessaire
        $carburant = ceil($minutes / 10000);
        ?>
        
        <div class="carburant">
            <h2 class="date">Carburant nécessaire</h2>
            <p class="number"><?php echo $carburant; ?> litres</p>
        </div>

    </main>

</body>

</html>