# MedComReportOfAdmissionExtension - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComReportOfAdmissionExtension**

## Extension: MedComReportOfAdmissionExtension 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-messaging-reportOfAdmissionExtension | *Version*:3.0.2 |
| Active as of 2026-02-10 | *Computable Name*:MedComHospitalNotificationReportOfAdmissionExtension |

Indicates whether the recipient should send a report of admission

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md)
* Examples for this Extension: [Bundle/a5e5b880-c087-4055-b9ec-99108695f81d](Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.md), [Bundle/h1c8e4a8-6b45-4669-94ad-2a99ad96bf03](Bundle-h1c8e4a8-6b45-4669-94ad-2a99ad96bf03.md), [MessageHeader/b9b4818e-02de-4cc4-b418-d20cbc7b5404](MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.md) and [MessageHeader/i50fc5fe-2d11-4ef3-acac-2e2e5c6c0029](MessageHeader-i50fc5fe-2d11-4ef3-acac-2e2e5c6c0029.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.hospitalnotification|current/StructureDefinition/medcom-messaging-reportOfAdmissionExtension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-messaging-reportOfAdmissionExtension.csv), [Excel](StructureDefinition-medcom-messaging-reportOfAdmissionExtension.xlsx), [Schematron](StructureDefinition-medcom-messaging-reportOfAdmissionExtension.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-messaging-reportOfAdmissionExtension",
  "url" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-messaging-reportOfAdmissionExtension",
  "version" : "3.0.2",
  "name" : "MedComHospitalNotificationReportOfAdmissionExtension",
  "title" : "MedComReportOfAdmissionExtension",
  "status" : "active",
  "date" : "2026-02-10T12:55:02+00:00",
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
  "description" : "Indicates whether the recipient should send a report of admission",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Element"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "MedComReportOfAdmissionExtension",
        "definition" : "Indicates whether the recipient should send a report of admission"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-messaging-reportOfAdmissionExtension"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      }
    ]
  }
}

```
