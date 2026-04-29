# DK IHE ClassCode_TEMP - DK MedCom Document v2.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK IHE ClassCode_TEMP**

## CodeSystem: DK IHE ClassCode_TEMP 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/CodeSystem/MedCom-ihe-classcode-CS-TEMP | *Version*:2.0.2 |
| Active as of 2022-01-26 | *Computable Name*:MedComIHE_ClassCode_TEMP |
| *Other Identifiers:*1.2.208.184.100.9 | |

 
_TEMP Danish Integrating the Healthcare Enterprise (IHE) metadata class codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedComIHE_CoreClassCode_TEMP](ValueSet-MedCom-ihe-core-classcode-VS-TEMP.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedCom-ihe-classcode-CS-TEMP",
  "url" : "http://medcomfhir.dk/ig/document/CodeSystem/MedCom-ihe-classcode-CS-TEMP",
  "identifier" : [
    {
      "value" : "1.2.208.184.100.9"
    }
  ],
  "version" : "2.0.2",
  "name" : "MedComIHE_ClassCode_TEMP",
  "title" : "DK IHE ClassCode_TEMP",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-01-26",
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
  "description" : "_TEMP Danish Integrating the Healthcare Enterprise (IHE) metadata class codes",
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
  "count" : 1,
  "concept" : [
    {
      "code" : "001",
      "display" : "Klinisk rapport"
    }
  ]
}

```
