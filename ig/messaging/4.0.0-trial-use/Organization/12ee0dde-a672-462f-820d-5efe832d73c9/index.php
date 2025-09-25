<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.0-trial-use/Organization-12ee0dde-a672-462f-820d-5efe832d73c9.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.0-trial-use/Organization-12ee0dde-a672-462f-820d-5efe832d73c9.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.0-trial-use/Organization-12ee0dde-a672-462f-820d-5efe832d73c9.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.0-trial-use/Organization-12ee0dde-a672-462f-820d-5efe832d73c9.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.0-trial-use/Organization-12ee0dde-a672-462f-820d-5efe832d73c9.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.0-trial-use/Organization-12ee0dde-a672-462f-820d-5efe832d73c9.html');
else 
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.0-trial-use/Organization-12ee0dde-a672-462f-820d-5efe832d73c9.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
