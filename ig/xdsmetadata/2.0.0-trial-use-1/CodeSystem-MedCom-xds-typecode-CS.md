# DK MedCom Message Codes - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK MedCom Message Codes**

## CodeSystem: DK MedCom Message Codes 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-typecode-CS | *Version*:1.0.0 |
| Active as of 2015-01-01 | *Computable Name*:MedCom_XDS_TypeCode_CS |
| *Other Identifiers:*1.2.208.184.100.1 | |

 
MedCom document type codes (Danish) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedCom_XDS_TypeCode](ValueSet-MedCom-xds-typecode-VS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedCom-xds-typecode-CS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-typecode-CS",
  "identifier" : [
    {
      "value" : "1.2.208.184.100.1"
    }
  ],
  "version" : "1.0.0",
  "name" : "MedCom_XDS_TypeCode_CS",
  "title" : "DK MedCom Message Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2015-01-01",
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
  "description" : "MedCom document type codes (Danish)",
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
      "code" : "HCOM",
      "display" : "HomeCareObservation message"
    }
  ]
}

```
