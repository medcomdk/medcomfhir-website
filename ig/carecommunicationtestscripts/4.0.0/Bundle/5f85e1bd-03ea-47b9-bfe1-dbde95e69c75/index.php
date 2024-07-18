<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-5f85e1bd-03ea-47b9-bfe1-dbde95e69c75.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-5f85e1bd-03ea-47b9-bfe1-dbde95e69c75.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-5f85e1bd-03ea-47b9-bfe1-dbde95e69c75.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-5f85e1bd-03ea-47b9-bfe1-dbde95e69c75.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-5f85e1bd-03ea-47b9-bfe1-dbde95e69c75.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-5f85e1bd-03ea-47b9-bfe1-dbde95e69c75.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-5f85e1bd-03ea-47b9-bfe1-dbde95e69c75.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
