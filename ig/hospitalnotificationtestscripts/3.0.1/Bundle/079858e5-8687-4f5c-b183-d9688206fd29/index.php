<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-079858e5-8687-4f5c-b183-d9688206fd29.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-079858e5-8687-4f5c-b183-d9688206fd29.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-079858e5-8687-4f5c-b183-d9688206fd29.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-079858e5-8687-4f5c-b183-d9688206fd29.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-079858e5-8687-4f5c-b183-d9688206fd29.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-079858e5-8687-4f5c-b183-d9688206fd29.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-079858e5-8687-4f5c-b183-d9688206fd29.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
