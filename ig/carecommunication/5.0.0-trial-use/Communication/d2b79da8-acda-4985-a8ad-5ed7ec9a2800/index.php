<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
