<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-2cadabe8-9349-4b2e-9b5e-4441c9aeef4b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-2cadabe8-9349-4b2e-9b5e-4441c9aeef4b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-2cadabe8-9349-4b2e-9b5e-4441c9aeef4b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-2cadabe8-9349-4b2e-9b5e-4441c9aeef4b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-2cadabe8-9349-4b2e-9b5e-4441c9aeef4b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-2cadabe8-9349-4b2e-9b5e-4441c9aeef4b.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-2cadabe8-9349-4b2e-9b5e-4441c9aeef4b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
