# DK XDS Affinity Domain - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK XDS Affinity Domain**

## CodeSystem: DK XDS Affinity Domain 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-homeCommunityId-CS | *Version*:1.0.0 |
| Active as of 2020-08-21 | *Computable Name*:MedCom_XDS_HomeCommunityId |
| *Other Identifiers:*urn:oid:1.2.208.176.8.1 | |

 
DK XDS Affinity Domains who has agreed to share healthcare related documents in Denmark 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedCom_XDS_DkHomeCommunityId](ValueSet-MedCom-xds-homeCommunityId-VS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedCom-xds-homeCommunityId-CS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-homeCommunityId-CS",
  "identifier" : [
    {
      "value" : "urn:oid:1.2.208.176.8.1"
    }
  ],
  "version" : "1.0.0",
  "name" : "MedCom_XDS_HomeCommunityId",
  "title" : "DK XDS Affinity Domain",
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
        }
      ]
    }
  ],
  "description" : "DK XDS Affinity Domains who has agreed to share healthcare related documents in Denmark",
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
