<?php
// Date de départ
$presentTime = new DateTime();

// Date d'arrivée
$destinationTime = new DateTime('2023-05-01 15:30:00');

// Affichage des dates
echo  $presentTime->format('F j Y h:i a') . "\n";
echo 'Destination Time' . "\n";
echo  $destinationTime->format('F j Y h:i a') . "\n";
echo 'Present Time' . "\n";

// Calcul de la durée en années, mois, jours, heures et minutes
$interval = $presentTime->diff($destinationTime);
$years = $interval->y;
$months = $interval->m;
$days = $interval->d;
$hours = $interval->h;
$minutes = $interval->i;

// Affichage de la durée
echo  $years . 'years, ' . $months . 'months, ' . $days .  'days, ' . $hours . 'hours, ' . $minutes . 'minutes' . PHP_EOL;

// Calcul de la durée en minutes
$totalMinutes = ($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i;

// Calcul du nombre de litres de carburant nécessaires
$fuelNeeded = (int)($totalMinutes / 10000) + 1;

// Affichage du nombre de litres de carburant nécessaires
echo "carburant nécessaires: $fuelNeeded litres\n";
?>
