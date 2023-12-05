<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-3b11cb1c-63df-4206-a7aa-f299c4a206ba.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-3b11cb1c-63df-4206-a7aa-f299c4a206ba.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-3b11cb1c-63df-4206-a7aa-f299c4a206ba.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-3b11cb1c-63df-4206-a7aa-f299c4a206ba.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-3b11cb1c-63df-4206-a7aa-f299c4a206ba.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-3b11cb1c-63df-4206-a7aa-f299c4a206ba.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-3b11cb1c-63df-4206-a7aa-f299c4a206ba.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
