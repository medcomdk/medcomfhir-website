<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-9d923ef7-c817-4e41-a0c2-01c80e8bde0c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-9d923ef7-c817-4e41-a0c2-01c80e8bde0c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-9d923ef7-c817-4e41-a0c2-01c80e8bde0c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-9d923ef7-c817-4e41-a0c2-01c80e8bde0c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-9d923ef7-c817-4e41-a0c2-01c80e8bde0c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-9d923ef7-c817-4e41-a0c2-01c80e8bde0c.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-9d923ef7-c817-4e41-a0c2-01c80e8bde0c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
