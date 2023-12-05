<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-4af4ef94-c452-4e52-8176-b8bd1d059433.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-4af4ef94-c452-4e52-8176-b8bd1d059433.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-4af4ef94-c452-4e52-8176-b8bd1d059433.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-4af4ef94-c452-4e52-8176-b8bd1d059433.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-4af4ef94-c452-4e52-8176-b8bd1d059433.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-4af4ef94-c452-4e52-8176-b8bd1d059433.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-4af4ef94-c452-4e52-8176-b8bd1d059433.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
