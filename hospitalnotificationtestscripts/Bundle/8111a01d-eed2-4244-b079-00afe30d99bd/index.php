<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8111a01d-eed2-4244-b079-00afe30d99bd.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8111a01d-eed2-4244-b079-00afe30d99bd.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8111a01d-eed2-4244-b079-00afe30d99bd.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8111a01d-eed2-4244-b079-00afe30d99bd.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8111a01d-eed2-4244-b079-00afe30d99bd.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8111a01d-eed2-4244-b079-00afe30d99bd.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8111a01d-eed2-4244-b079-00afe30d99bd.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
