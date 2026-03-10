# MedCom Message Codes_TEMP - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedCom Message Codes_TEMP**

## CodeSystem: MedCom Message Codes_TEMP 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/CodeSystem/MedCom-message-codes-CS-TEMP | *Version*:2.0.1 |
| Active as of 2026-01-01 | *Computable Name*:MedCom_Message_Codes_TEMP |
| *Other Identifiers:*urn:oid:1.2.208.184.100.1 | |

 
_TEMP MedCom Message Codes, which includes document type codes (Danish). 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedComIHE_CoreTypeCode_TEMP](ValueSet-MedCom-ihe-core-typecode-VS-TEMP.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedCom-message-codes-CS-TEMP",
  "url" : "http://medcomfhir.dk/ig/document/CodeSystem/MedCom-message-codes-CS-TEMP",
  "identifier" : [
    {
      "value" : "urn:oid:1.2.208.184.100.1"
    }
  ],
  "version" : "2.0.1",
  "name" : "MedCom_Message_Codes_TEMP",
  "title" : "MedCom Message Codes_TEMP",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-01",
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
  "description" : "_TEMP MedCom Message Codes, which includes document type codes (Danish).",
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
  "count" : 7,
  "property" : [
    {
      "code" : "deprecationDate",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecationDate",
      "description" : "The date from which the concept is considered deprecated.",
      "type" : "dateTime"
    }
  ],
  "concept" : [
    {
      "code" : "CMR",
      "display" : "Clinical Mesurement Report"
    },
    {
      "code" : "PDC",
      "display" : "Stamkort"
    },
    {
      "code" : "MADC",
      "display" : "MADC",
      "property" : [
        {
          "code" : "deprecationDate",
          "valueDateTime" : "2022-12-31"
        }
      ]
    },
    {
      "code" : "PRF",
      "display" : "Pregnancy Referral Form"
    },
    {
      "code" : "PSCR",
      "display" : "Pregnancy Shared Care Report"
    },
    {
      "code" : "PMR",
      "display" : "Pregnancy Measurement Report"
    },
    {
      "code" : "CON",
      "display" : "Consultation Note"
    }
  ]
}

```
