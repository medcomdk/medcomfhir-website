# DK XDS ClassCode - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK XDS ClassCode**

## CodeSystem: DK XDS ClassCode 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-classcode-CS | *Version*:1.0.0 |
| Active as of 2022-01-26 | *Computable Name*:MedCom_XDS_ClassCode_CS |
| *Other Identifiers:*1.2.208.184.100.9 | |

 
CodeSystem for ClassCode 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedCom_XDS_ClassCode](ValueSet-MedCom-xds-classcode-VS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedCom-xds-classcode-CS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-classcode-CS",
  "identifier" : [
    {
      "value" : "1.2.208.184.100.9"
    }
  ],
  "version" : "1.0.0",
  "name" : "MedCom_XDS_ClassCode_CS",
  "title" : "DK XDS ClassCode",
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
        }
      ]
    }
  ],
  "description" : "CodeSystem for ClassCode",
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
  "count" : 6,
  "concept" : [
    {
      "code" : "001",
      "display" : "Klinisk rapport"
    },
    {
      "code" : "002",
      "display" : "Summary"
    },
    {
      "code" : "003",
      "display" : "Images"
    },
    {
      "code" : "004",
      "display" : "Treatment Plan"
    },
    {
      "code" : "005",
      "display" : "Patient Preferences"
    },
    {
      "code" : "006",
      "display" : "Workflow"
    }
  ]
}

```
