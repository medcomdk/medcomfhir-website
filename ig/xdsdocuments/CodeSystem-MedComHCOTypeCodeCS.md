# MedComHCOTypeCodeCS - Danish XDS Documents profiles v0.1.0-homecareobservation-draft-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComHCOTypeCodeCS**

## CodeSystem: MedComHCOTypeCodeCS 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:1.2.208.184.100.1 | *Version*:0.1.0-homecareobservation-draft-2 |
| Active as of 2026-04-30 | *Computable Name*:MedComHCOTypeCodeCS |
| *Other Identifiers:*1.2.208.184.100.1 | |

 
Codesystem containing the type codes for HomeCareObservation documents (DA: Kommunale Prøvesvar). 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedComHCOTypeCodeVS](ValueSet-MedComHCOTypeCodeVS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedComHCOTypeCodeCS",
  "url" : "urn:oid:1.2.208.184.100.1",
  "identifier" : [
    {
      "value" : "1.2.208.184.100.1"
    }
  ],
  "version" : "0.1.0-homecareobservation-draft-2",
  "name" : "MedComHCOTypeCodeCS",
  "title" : "MedComHCOTypeCodeCS",
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
  "description" : "Codesystem containing the type codes for HomeCareObservation documents (DA: Kommunale Prøvesvar).",
  "content" : "complete",
  "count" : 1,
  "concept" : [
    {
      "code" : "HCOM",
      "display" : "HomeCareObservation message"
    }
  ]
}

```
