# _TEMP IHE XDS Affinity Domain - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **_TEMP IHE XDS Affinity Domain**

## CodeSystem: _TEMP IHE XDS Affinity Domain 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/CodeSystem/MedCom-ihe-homeCommunityId-CS-TEMP | *Version*:2.0.1 |
| Active as of 2020-08-21 | *Computable Name*:MedComIHE_HomeCommunityId_TEMP |

 
_TEMPIHE XDS Affinity Domains who has agreed to share healthcare related documents in Denmark 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedComIHE_CoreDkHomeCommunityId_TEMP](ValueSet-MedCom-ihe-core-homeCommunityId-VS-TEMP.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedCom-ihe-homeCommunityId-CS-TEMP",
  "url" : "http://medcomfhir.dk/ig/document/CodeSystem/MedCom-ihe-homeCommunityId-CS-TEMP",
  "version" : "2.0.1",
  "name" : "MedComIHE_HomeCommunityId_TEMP",
  "title" : "_TEMP IHE XDS Affinity Domain",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-08-21",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        },
        {
          "system" : "email",
          "value" : "fhir@medcom.dk"
        }
      ]
    }
  ],
  "description" : "_TEMPIHE XDS Affinity Domains who has agreed to share healthcare related documents in Denmark",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "1.2.208.176.8.1",
      "display" : "Common Danish IHE XDS domain. Integrating the Healthcare Enterprise (IHE) cross[X]-enterprise Document Sharing (XDS) domain"
    },
    {
      "code" : "1.2.208.193.100",
      "display" : "Primary healthcare domain"
    }
  ]
}

```
