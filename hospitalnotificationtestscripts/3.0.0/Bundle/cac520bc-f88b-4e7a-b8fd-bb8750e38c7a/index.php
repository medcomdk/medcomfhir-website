<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-cac520bc-f88b-4e7a-b8fd-bb8750e38c7a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-cac520bc-f88b-4e7a-b8fd-bb8750e38c7a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-cac520bc-f88b-4e7a-b8fd-bb8750e38c7a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-cac520bc-f88b-4e7a-b8fd-bb8750e38c7a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-cac520bc-f88b-4e7a-b8fd-bb8750e38c7a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-cac520bc-f88b-4e7a-b8fd-bb8750e38c7a.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-cac520bc-f88b-4e7a-b8fd-bb8750e38c7a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
