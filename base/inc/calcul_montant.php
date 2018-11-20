<?php

// Si la personne a moins de 14 ans
if ($age < 14) {
    $montant = $tarifs['enfant'];
}
// Si la personne a moins de 16 ans (implicitement, elle aura au moins 14 ans)
elseif ($age <= 16) {
    $montant = $tarifs['reduit'];
}
// Si la personne a plus de 60 ans
elseif ($age > 60) {
    $montant = $tarifs['reduit'];
}
// Enchainement de if et elseif, donc le else final (toujours à la fin) signifie "si on est rentré dans aucun des cas précédent
// => Si entre 16 et 60 ans
else {
    $montant = $tarifs['plein'];
}


