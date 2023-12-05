<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-a1b27813-8aa8-4fa1-846b-aeabf5afb7d4.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-a1b27813-8aa8-4fa1-846b-aeabf5afb7d4.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-a1b27813-8aa8-4fa1-846b-aeabf5afb7d4.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-a1b27813-8aa8-4fa1-846b-aeabf5afb7d4.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-a1b27813-8aa8-4fa1-846b-aeabf5afb7d4.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-a1b27813-8aa8-4fa1-846b-aeabf5afb7d4.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-a1b27813-8aa8-4fa1-846b-aeabf5afb7d4.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
