<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.0/Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.0/Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.0/Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.0/Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.0/Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.0/Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.0/Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
