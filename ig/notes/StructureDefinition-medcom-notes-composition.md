# MedComNotesComposition - DK MedCom Notes v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComNotesComposition**

## Resource Profile: MedComNotesComposition 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-composition | *Version*:1.0.0 |
| Active as of 2026-03-10 | *Computable Name*:MedComNotesComposition |

 
A profile for the MedCom Notes Composition resource. 

# MedCom Notes Composition

This page describes how the **MedCom Notes Composition** profile is intended to be used within the MedCom Notes standard.

The MedComNotesComposition profile defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type is 'document', and any other resources referenced from Composition must be included as subsequent entries in the Bundle.entry element. The Composition resource organizes clinical and administrative content into sections, each of which contains a narrative, and references other resources.

The `Composition.section.entry` element **MUST** reference the MedComNotesObservation that contains the note from the healtcare provider e.g. general practitioner. As there is only supposed to be one note in each document, it is only allowed to reference one MedComNotesObservation.

The `Composition.title` **MUST** be (in Danish) "Journalnotat for '**CPR-nummer**'", where 'CPR-nummer' is the actual identifier for the patient (Patient.identifier.value).

The `Composition.type` is fixed to the SNOMED CT code "866144008 Encounter note", as it represents the content of the document on a high level.

## Timestamps

The `Composition.date` **MUST** be the last update date of the note performed by the patient's healthcare provider e.g. general practitioner must be included (Da: dato og tid for seneste opdatering af notatet).

The `Composition.event.period.start` **MUST** be the date and time the note originally was created and is used to represent servicestart time in metadata. The `Composition.event.period.end` is the end of creation of the note. This timestamp should be included if known.

**Usages:**

* Use this Profile: [MedComNotesBundle](StructureDefinition-medcom-notes-bundle.md)
* Examples for this Profile: [Composition/43fe2ddc-fd31-443b-bef0-e29c030d6572](Composition-43fe2ddc-fd31-443b-bef0-e29c030d6572.md) and [Composition/cff723a9-fae7-4fc6-8db2-6e49cbbc928a](Composition-cff723a9-fae7-4fc6-8db2-6e49cbbc928a.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.notes|current/StructureDefinition/medcom-notes-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-notes-composition.csv), [Excel](StructureDefinition-medcom-notes-composition.xlsx), [Schematron](StructureDefinition-medcom-notes-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-notes-composition",
  "url" : "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-composition",
  "version" : "1.0.0",
  "name" : "MedComNotesComposition",
  "status" : "active",
  "date" : "2026-03-10T13:33:55+00:00",
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
  "description" : "A profile for the MedCom Notes Composition resource.",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
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
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition.meta.profile",
        "path" : "Composition.meta.profile",
        "short" : "[DocumentEntry.formatCode] The profile canonical SHALL include the major and minor version of the standard in the form `|x.y`.",
        "constraint" : [
          {
            "key" : "medcom-canonical-fixed-major",
            "severity" : "error",
            "human" : "If a version is present in the canonical, MAJOR SHALL be a fixed value.",
            "expression" : "matches('^.*[|]1[.].*$')",
            "source" : "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-composition"
          }
        ]
      },
      {
        "id" : "Composition.language",
        "path" : "Composition.language",
        "fixedCode" : "da"
      },
      {
        "id" : "Composition.type.coding.system",
        "path" : "Composition.type.coding.system",
        "fixedUri" : "http://snomed.info/sct"
      },
      {
        "id" : "Composition.type.coding.code",
        "path" : "Composition.type.coding.code",
        "fixedCode" : "866144008"
      },
      {
        "id" : "Composition.type.coding.display",
        "path" : "Composition.type.coding.display",
        "fixedString" : "Encounter note"
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "min" : 1
      },
      {
        "id" : "Composition.category.coding.system",
        "path" : "Composition.category.coding.system",
        "patternUri" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-ihe-classcode-CS"
      },
      {
        "id" : "Composition.category.coding.code",
        "path" : "Composition.category.coding.code",
        "patternCode" : "001"
      },
      {
        "id" : "Composition.category.coding.display",
        "path" : "Composition.category.coding.display",
        "patternString" : "Klinisk rapport"
      },
      {
        "id" : "Composition.date",
        "path" : "Composition.date",
        "short" : "Last update of the note (Da: Seneste opdatering af notatet)"
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner"
            ],
            "aggregation" : ["bundled"]
          }
        ]
      },
      {
        "id" : "Composition.author:institution",
        "path" : "Composition.author",
        "sliceName" : "institution",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization"
            ],
            "aggregation" : ["bundled"]
          }
        ]
      },
      {
        "id" : "Composition.author:person",
        "path" : "Composition.author",
        "sliceName" : "person",
        "short" : "The practitioner who authored the document.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner"
            ],
            "aggregation" : ["bundled"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.title",
        "path" : "Composition.title",
        "short" : "Title MUST be 'Journalnotat for **CPR-nummer**'"
      },
      {
        "id" : "Composition.confidentiality",
        "path" : "Composition.confidentiality",
        "fixedCode" : "N"
      },
      {
        "id" : "Composition.event.period.start",
        "path" : "Composition.event.period.start",
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-composition"
          }
        ]
      },
      {
        "id" : "Composition.event.period.end",
        "path" : "Composition.event.period.end",
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-composition"
          }
        ]
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "max" : "1"
      },
      {
        "id" : "Composition.section.entry",
        "path" : "Composition.section.entry",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-observation"
            ]
          }
        ]
      }
    ]
  }
}

```
