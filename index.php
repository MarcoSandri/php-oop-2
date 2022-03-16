<?php

require_once __DIR__ . '/classes/items/item.php';
require_once __DIR__ . '/classes/items/food.php';
require_once __DIR__ . '/classes/items/bed.php';
require_once __DIR__ . '/classes/items/toy.php';
require_once __DIR__ . '/classes/user.php';

$croccantini = new food("croccantini", 12, "cane", "croccantini", "pollo");
$paolo = new user("paolo", "paoli", "paolopaoli@paolos.it", "paolone22");

//paolo sbaglia password quindi non fa il login
$paolo->login('paolo', 'paolone11');
echo 'login? ' . $paolo->getLogged();

//paolo mette la password giusta
$paolo->login('paolo', 'paolone22');
echo 'login? ' . $paolo->getLogged();

//paolo inserisce i dati della carta di credito
$paolo->setCreditCardInfo(1000, 7, 123);


//paolo paga con carta di credito scaduta
$croccantini->payment($paolo->getLogged(), $paolo->getCreditcardExp(), 6);

//paolo paga con carta di credito non scaduta
$croccantini->payment($paolo->getLogged(), $paolo->getCreditcardExp(), 8);





?>