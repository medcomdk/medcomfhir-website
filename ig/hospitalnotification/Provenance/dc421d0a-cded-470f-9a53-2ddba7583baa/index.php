<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-dc421d0a-cded-470f-9a53-2ddba7583baa.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-dc421d0a-cded-470f-9a53-2ddba7583baa.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-dc421d0a-cded-470f-9a53-2ddba7583baa.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-dc421d0a-cded-470f-9a53-2ddba7583baa.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-dc421d0a-cded-470f-9a53-2ddba7583baa.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-dc421d0a-cded-470f-9a53-2ddba7583baa.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-dc421d0a-cded-470f-9a53-2ddba7583baa.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
