<?php
// Home
// erhalten wir eine GET Anfrage auf die Homepage, rufe im namespace
// Controller die Methode index der Klasse HomeController auf.
$f3->route('GET /', '\Controller\HomeController->index');