# MedComNotesObservation - DK MedCom Notes v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComNotesObservation**

## Resource Profile: MedComNotesObservation 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-observation | *Version*:1.0.0 |
| Active as of 2026-03-10 | *Computable Name*:MedComNotesObservation |

 
Observation profile intended to be used in MedCom's Notes standard. 

# MedCom Notes Observation

This page describes how the MedComNotesObservation profile is intended to be used within the MedCom Notes standard.

This profile specifies how the Observation represents the note from the general practitioner using a dedicated extension. It also specifies how other information must be applied, such as the metadata related to the attachment, as well as coding and references to the patient and performing organization or practitioner. Read more about this in the following paragrafs.

## Consultation Note

This Observation contains a FHIR extension designed to hold the note. The note must be encoded in Base64 and the mimetype must be `text/html` to describe the content. The `valueAttachment` element is implemented as an extension as the base `value[x]` element does not support the `Attachment` type in FHIR R4. The extension also captures essential metadata for the attachment; the MIME type and the title.

The note is represented in the Observation resource in `extension:valueAttachment`, as described above. This also means that the note content is base64-encoded. The formatting of the content follows the same conventions as defined in the [MedCom FNUX standard](https://svn.medcom.dk/svn/releases/Standarder/FNUX/Dokumentation/SimplifiedHTML-specifikation.pdf). This means that line breaks, bold, italics, underline, and monospaced text are supported, and these may be combined.

## Notes date and time

The `effectiveDateTime` element is a mandatory element used to represent the date and time the note was created and **SHALL** be provided as a dateTime.

## Required code

The element `code` describes what was observed. This code is for Shared Notes fixed to code.coding:SNOMEDCT.code: `866144008` system: `http://www.snomed.org/` display: `Encounter note`.

## Author

A reference to the author of the note is included in the element `performer`. The authoring organization **MUST** be included. If information about the healthcare professional and his/her role is available this should be included in the profile MedComDocumentPractitionerRole with a reference to MedComDocumentPractitioner, holding the name of the practitioner.

## Resource references

This Observation references the `Patient` resource through the `subject` element and the author `Organization`, `Practitioner`, or `PractitionerRole` through the `performer` element.

**Usages:**

* Refer to this Profile: [MedComNotesComposition](StructureDefinition-medcom-notes-composition.md)
* Examples for this Profile: [Observation/d2c9d517-3abd-450e-a3c2-18f18da6fd88](Observation-d2c9d517-3abd-450e-a3c2-18f18da6fd88.md) and [Observation/if810168-ee7c-4f34-8012-9aff6c1d86e7](Observation-if810168-ee7c-4f34-8012-9aff6c1d86e7.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.notes|current/StructureDefinition/medcom-notes-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-notes-observation.csv), [Excel](StructureDefinition-medcom-notes-observation.xlsx), [Schematron](StructureDefinition-medcom-notes-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-notes-observation",
  "url" : "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-observation",
  "version" : "1.0.0",
  "name" : "MedComNotesObservation",
  "title" : "MedComNotesObservation",
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
  "description" : "Observation profile intended to be used in MedCom's Notes standard.",
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
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
    },
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.extension",
        "path" : "Observation.extension",
        "min" : 1
      },
      {
        "id" : "Observation.extension:valueAttachment",
        "path" : "Observation.extension",
        "sliceName" : "valueAttachment",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.extension:valueAttachment.url",
        "path" : "Observation.extension.url",
        "mustSupport" : true
      },
      {
        "id" : "Observation.extension:valueAttachment.value[x]",
        "path" : "Observation.extension.value[x]",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.extension:valueAttachment.value[x].contentType",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/notes/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.extension.value[x].contentType",
        "short" : "MIME type of the note",
        "min" : 1,
        "fixedCode" : "text/html",
        "mustSupport" : true
      },
      {
        "id" : "Observation.extension:valueAttachment.value[x].data",
        "path" : "Observation.extension.value[x].data",
        "short" : "Base64-encoded content of the note (Da: journalnotatet)",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.extension:valueAttachment.value[x].title",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
            "valueBoolean" : true
          },
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/notes/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.extension.value[x].title"
      },
      {
        "id" : "Observation.status",
        "path" : "Observation.status",
        "short" : "Status MUST be final.",
        "patternCode" : "final"
      },
      {
        "id" : "Observation.code.coding",
        "path" : "Observation.code.coding",
        "min" : 1
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT",
        "path" : "Observation.code.coding",
        "sliceName" : "SNOMEDCT",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT.system",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/notes/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.code.coding.system",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/notes/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.code.coding.code",
        "fixedCode" : "866144008",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT.display",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
            "valueBoolean" : true
          },
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/notes/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.code.coding.display",
        "min" : 1,
        "fixedString" : "Encounter note",
        "mustSupport" : true
      },
      {
        "id" : "Observation.effective[x]",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/notes/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.effective[x]",
        "short" : "Date and time the note was created (Da: Oprettelsestidspunkt for notatet)",
        "min" : 1,
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-observation"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this.resolve()"
            }
          ],
          "ordered" : false,
          "rules" : "closed"
        },
        "short" : "Who is responsible for the note (Da: journalnotatet)",
        "max" : "3",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "Observation.performer:practitionerRole",
        "path" : "Observation.performer",
        "sliceName" : "practitionerRole",
        "short" : "practitionerRole responsible for the note (Da: journalnotatet)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "Observation.performer:organization",
        "path" : "Observation.performer",
        "sliceName" : "organization",
        "short" : "organization responsible for the note (Da: journalnotatet)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization"
            ]
          }
        ]
      },
      {
        "id" : "Observation.performer:practitioner",
        "path" : "Observation.performer",
        "sliceName" : "practitioner",
        "short" : "practitioner responsible for the note (Da: journalnotatet)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner"
            ]
          }
        ]
      }
    ]
  }
}

```
