<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/PractitionerRole-8adda490-63ef-4d97-86f0-14553628e53a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/PractitionerRole-8adda490-63ef-4d97-86f0-14553628e53a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/PractitionerRole-8adda490-63ef-4d97-86f0-14553628e53a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/PractitionerRole-8adda490-63ef-4d97-86f0-14553628e53a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/PractitionerRole-8adda490-63ef-4d97-86f0-14553628e53a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/PractitionerRole-8adda490-63ef-4d97-86f0-14553628e53a.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/PractitionerRole-8adda490-63ef-4d97-86f0-14553628e53a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
