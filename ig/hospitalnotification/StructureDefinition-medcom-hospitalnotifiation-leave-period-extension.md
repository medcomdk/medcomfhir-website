# MedComHospitalNotificationLeavePeriodExtension - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComHospitalNotificationLeavePeriodExtension**

## Extension: MedComHospitalNotificationLeavePeriodExtension 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalnotifiation-leave-period-extension | *Version*:3.0.2 |
| Active as of 2026-02-10 | *Computable Name*:MedComHospitalNotificationLeavePeriodExtension |

Includes timestamps for start and end of leave of a hospitalization.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [MedComHospitalNotificationEncounter](StructureDefinition-medcom-hospitalNotification-encounter.md)
* Examples for this Extension: [Bundle/d3128d9b-cede-4c7f-8904-809eab322d7d](Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.md), [Bundle/e94de8ee-bd94-475e-b454-b8fbbef8a685](Bundle-e94de8ee-bd94-475e-b454-b8fbbef8a685.md), [Encounter/d56e9c54-23d2-43a4-816e-951d2a6e3281](Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.md) and [Encounter/e07c4bd4-cfad-4c4d-9c4b-e4ba3424a65b](Encounter-e07c4bd4-cfad-4c4d-9c4b-e4ba3424a65b.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.hospitalnotification|current/StructureDefinition/medcom-hospitalnotifiation-leave-period-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-hospitalnotifiation-leave-period-extension.csv), [Excel](StructureDefinition-medcom-hospitalnotifiation-leave-period-extension.xlsx), [Schematron](StructureDefinition-medcom-hospitalnotifiation-leave-period-extension.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-hospitalnotifiation-leave-period-extension",
  "url" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalnotifiation-leave-period-extension",
  "version" : "3.0.2",
  "name" : "MedComHospitalNotificationLeavePeriodExtension",
  "title" : "MedComHospitalNotificationLeavePeriodExtension",
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
  "description" : "Includes timestamps for start and end of leave of a hospitalization.",
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
        "short" : "MedComHospitalNotificationLeavePeriodExtension",
        "definition" : "Includes timestamps for start and end of leave of a hospitalization."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalnotifiation-leave-period-extension"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Extension.value[x]:valuePeriod",
        "path" : "Extension.value[x]",
        "sliceName" : "valuePeriod",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Period"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Extension.value[x]:valuePeriod.start",
        "path" : "Extension.value[x].start",
        "short" : "Describes the beginning of a period of leave.",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Extension.value[x]:valuePeriod.end",
        "path" : "Extension.value[x].end",
        "short" : "Describes the end of a period of leave.",
        "mustSupport" : true
      }
    ]
  }
}

```
