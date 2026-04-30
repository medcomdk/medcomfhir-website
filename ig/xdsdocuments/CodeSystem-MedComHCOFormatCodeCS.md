# MedComHCOFormatCodeCS - Danish XDS Documents profiles v0.1.0-homecareobservation-draft-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComHCOFormatCodeCS**

## CodeSystem: MedComHCOFormatCodeCS 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsdocuments/CodeSystem/MedComHCOFormatCodeCS | *Version*:0.1.0-homecareobservation-draft-2 |
| Active as of 2026-04-30 | *Computable Name*:MedComHCOFormatCodeCS |

 
Codesystem containing the format codes for HomeCareObservation documents (DA: Kommunale Prøvesvar). 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedComHCOFormatCodeVS](ValueSet-MedComHCOFormatCodeVS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedComHCOFormatCodeCS",
  "url" : "http://medcomfhir.dk/ig/xdsdocuments/CodeSystem/MedComHCOFormatCodeCS",
  "version" : "0.1.0-homecareobservation-draft-2",
  "name" : "MedComHCOFormatCodeCS",
  "title" : "MedComHCOFormatCodeCS",
  "status" : "active",
  "date" : "2026-04-30T11:35:54+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medcom.dk/"
        }
      ]
    }
  ],
  "description" : "Codesystem containing the format codes for HomeCareObservation documents (DA: Kommunale Prøvesvar).",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "urn:ad:dk:medcom:msg:hco-v1.1:full",
      "display" : "DK HomeCareObservation message v1.1"
    },
    {
      "code" : "urn:ad:dk:medcom:msg:hco-v1.2:full",
      "display" : "DK HomeCareObservation message v1.2"
    }
  ]
}

```
