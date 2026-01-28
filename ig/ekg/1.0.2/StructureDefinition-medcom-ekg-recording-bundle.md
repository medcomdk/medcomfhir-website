# MedComEkgRecordingBundle - DK MedCom EKG v1.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComEkgRecordingBundle**

## Resource Profile: MedComEkgRecordingBundle 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-bundle | *Version*:1.0.2 |
| Active as of 2026-01-28 | *Computable Name*:MedComEkgRecordingBundle |

 
A profile for the MedCom ConditionList Bundle resource. 

# MedCom EKG Recording Bundle

This page describes how the **MedCom Ekg Recording Bundle** profile is used within the MedCom EKG Recording standard. It inherits from the [MedComDocumentBundle](https://medcomfhir.dk/ig/document/StructureDefinition-medcom-document-bundle.html). Please note that the version of the Document Implementation Guide referenced by this link may change over time. For the correct inherited version, refer to the dependency list for this Implementation Guide.

The first entry in the Bundle **MUST** be a MedComEkgRecordingComposition resource.

The `Bundle.timestamp` **MUST** be the time of the assemblement of the Bundle.

**Usages:**

* Examples for this Profile: [Bundle/0a74554f-ded3-4bc7-bef1-535699565c5a](Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.ekg|current/StructureDefinition/medcom-ekg-recording-bundle)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-ekg-recording-bundle.csv), [Excel](StructureDefinition-medcom-ekg-recording-bundle.xlsx), [Schematron](StructureDefinition-medcom-ekg-recording-bundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-ekg-recording-bundle",
  "url" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-bundle",
  "version" : "1.0.2",
  "name" : "MedComEkgRecordingBundle",
  "status" : "active",
  "date" : "2026-01-28T10:06:10+00:00",
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
  "description" : "A profile for the MedCom ConditionList Bundle resource.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this.resource"
            }
          ],
          "description" : "Slicing based on the resource type",
          "rules" : "open"
        }
      },
      {
        "id" : "Bundle.entry:medcom-ekg-recording-composition",
        "path" : "Bundle.entry",
        "sliceName" : "medcom-ekg-recording-composition",
        "short" : "First entry is a composition",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:medcom-ekg-recording-composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-composition"
            ]
          }
        ]
      }
    ]
  }
}

```
