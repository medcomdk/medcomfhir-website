<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.0/Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.0/Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.0/Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.0/Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.0/Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.0/Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.html');
else 
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.0/Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
