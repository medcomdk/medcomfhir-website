# MedComNotesBundle - DK MedCom Notes v1.0.0-trial-use

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComNotesBundle**

## Resource Profile: MedComNotesBundle 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-bundle | *Version*:1.0.0-trial-use |
| Active as of 2026-03-10 | *Computable Name*:MedComNotesBundle |

 
A profile for a MedCom Notes Document Bundle. 

# MedCom Notes Bundle

The MedComNotesBundle profile describes the Bundle resource that shall be used in all documents exchanged as Shared Notes. MedComNotesBundle inherits from [MedComDocumentBundle](https://medcomfhir.dk/ig/document/2.0.0/StructureDefinition-medcom-document-bundle.html), and is the container for the content in a document.

As this profile is the used in a document, the element type shall always be ‘document’. This entails that the first resource in the entry element shall be a MedComNotesComposition, which can be found in the slicing on Bundle.entry.

The `Bundle.timestamp` **MUST** be the time of the assemblement of the Bundle.

**Usages:**

* Examples for this Profile: [Bundle/9521a7f0-bad4-4a46-8c51-cd8378b24106](Bundle-9521a7f0-bad4-4a46-8c51-cd8378b24106.md) and [Bundle/ba7d908a-0134-4f28-b5f5-0fcaf088e60b](Bundle-ba7d908a-0134-4f28-b5f5-0fcaf088e60b.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.notes|current/StructureDefinition/medcom-notes-bundle)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-notes-bundle.csv), [Excel](StructureDefinition-medcom-notes-bundle.xlsx), [Schematron](StructureDefinition-medcom-notes-bundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-notes-bundle",
  "url" : "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-bundle",
  "version" : "1.0.0-trial-use",
  "name" : "MedComNotesBundle",
  "status" : "active",
  "date" : "2026-03-10T13:54:36+00:00",
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
  "description" : "A profile for a MedCom Notes Document Bundle.",
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
        "id" : "Bundle.entry:medcom-notes-composition",
        "path" : "Bundle.entry",
        "sliceName" : "medcom-notes-composition",
        "short" : "The first entry is the MedCom Notes Composition resource",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:medcom-notes-composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-composition"
            ]
          }
        ]
      }
    ]
  }
}

```
