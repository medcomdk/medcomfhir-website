<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2e8c8e54-388c-4547-954c-1917652986da.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2e8c8e54-388c-4547-954c-1917652986da.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2e8c8e54-388c-4547-954c-1917652986da.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2e8c8e54-388c-4547-954c-1917652986da.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2e8c8e54-388c-4547-954c-1917652986da.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2e8c8e54-388c-4547-954c-1917652986da.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2e8c8e54-388c-4547-954c-1917652986da.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
