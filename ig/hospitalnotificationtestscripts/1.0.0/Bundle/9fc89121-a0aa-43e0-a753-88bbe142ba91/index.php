<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-9fc89121-a0aa-43e0-a753-88bbe142ba91.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-9fc89121-a0aa-43e0-a753-88bbe142ba91.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-9fc89121-a0aa-43e0-a753-88bbe142ba91.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-9fc89121-a0aa-43e0-a753-88bbe142ba91.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-9fc89121-a0aa-43e0-a753-88bbe142ba91.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-9fc89121-a0aa-43e0-a753-88bbe142ba91.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-9fc89121-a0aa-43e0-a753-88bbe142ba91.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
