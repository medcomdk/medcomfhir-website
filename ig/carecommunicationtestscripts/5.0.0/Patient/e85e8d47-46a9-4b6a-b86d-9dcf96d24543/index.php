<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-e85e8d47-46a9-4b6a-b86d-9dcf96d24543.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-e85e8d47-46a9-4b6a-b86d-9dcf96d24543.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-e85e8d47-46a9-4b6a-b86d-9dcf96d24543.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-e85e8d47-46a9-4b6a-b86d-9dcf96d24543.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-e85e8d47-46a9-4b6a-b86d-9dcf96d24543.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-e85e8d47-46a9-4b6a-b86d-9dcf96d24543.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-e85e8d47-46a9-4b6a-b86d-9dcf96d24543.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
