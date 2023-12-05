<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-fe1c34a3-460a-431d-a0e3-a2b59fa93a9f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-fe1c34a3-460a-431d-a0e3-a2b59fa93a9f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-fe1c34a3-460a-431d-a0e3-a2b59fa93a9f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-fe1c34a3-460a-431d-a0e3-a2b59fa93a9f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-fe1c34a3-460a-431d-a0e3-a2b59fa93a9f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-fe1c34a3-460a-431d-a0e3-a2b59fa93a9f.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/1.0.0/Bundle-fe1c34a3-460a-431d-a0e3-a2b59fa93a9f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
