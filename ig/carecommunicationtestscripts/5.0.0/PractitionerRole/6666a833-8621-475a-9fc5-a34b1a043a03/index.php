<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-6666a833-8621-475a-9fc5-a34b1a043a03.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-6666a833-8621-475a-9fc5-a34b1a043a03.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-6666a833-8621-475a-9fc5-a34b1a043a03.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-6666a833-8621-475a-9fc5-a34b1a043a03.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-6666a833-8621-475a-9fc5-a34b1a043a03.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-6666a833-8621-475a-9fc5-a34b1a043a03.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-6666a833-8621-475a-9fc5-a34b1a043a03.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
