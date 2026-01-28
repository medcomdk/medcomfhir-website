# MedComEkgRecordingObservation - DK MedCom EKG v1.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComEkgRecordingObservation**

## Resource Profile: MedComEkgRecordingObservation 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-observation | *Version*:1.0.2 |
| Active as of 2026-01-28 | *Computable Name*:MedComEkgRecordingObservation |

 
Observation profile intended to be used in MedCom's Ekg Recording standard. 

# MedCom EKG Recording Observation

This page describes how the **MedCom Ekg Recording Observation** profile is intended to be used within the MedCom EKG Recording standard.

## Purpose of the Profile

This profile specifies how the Observation represents the PDF/A-encoded EKG recording using a dedicated extension. It also specifies how the related attachment metadata, acquisition note, and timing information must be captured, and how the required LOINC coding and references to the patient and performing organization must be applied. Read more about this in the following paragrafs.

### Use of the valueAttachment Extension

This Observation contains a FHIR extension designed to hold an EKG recording as a PDF/A file encoded in Base64. The `valueAttachment` element is implemented as an extension because the base `value[x]` element does not support the `Attachment` type in FHIR R4. The extension also captures essential metadata for the attachment - the MIME type and the title.

### EKG Recording note

This Observation includes a free-text note related to the EKG acquisition, intended for documenting brief, measurement-related remarks. To ensure consistency and concise usage, the note is limited to a maximum length of 1024 characters and allows line breaks.

#### Line breaks and special characters in the note

Implementations must preserve the logical string value, including line breaks and Unicode characters, across both XML and JSON. Line breaks in FHIR string values must follow the underlying format:

* In JSON, line breaks **SHALL** be written as the escaped newline sequence `\n` inside the string.
* In XML, line breaks **SHALL** be represented either as a literal newline in the element text or as the character reference `&#xA;`. Escaping of characters in XML **SHALL** preserve the logical value of the FHIR string. XML-reserved characters `&`, `<`, `>`, and `"` **SHALL** be escaped.

Unicode characters (e.g. ÆØÅ, ë, ð, ý) **SHALL** be supported without restriction in both XML and JSON.

### EKG Recording date and time

The `effective[x]` element is a mandatory element used to represent the timing of the EKG recording and **SHALL** be provided either as a period or alternatively as a dateTime.

* `effectivePeriod.start` – Represents the exact start time of the EKG recording and is required if known.
* `effectivePeriod.end` – Represents the exact end time of the EKG recording and is required if known in combination with `effectivePeriod.start`.
* `effectiveDateTime` – Used only when the exact start time is unknown.

## Required LOINC coding

This Observation contains the fixed code:

* code.coding:LOINC: code: `11524-6` system: `http://loinc.org` display: `EKG study`.

## Resource references

This Observation references the `Patient` resource through the `subject` element and the author `Organization` through the `performer` element.

**Usages:**

* Refer to this Profile: [MedComEkgRecordingComposition](StructureDefinition-medcom-ekg-recording-composition.md)
* Examples for this Profile: [Observation/ef810168-ee8c-4f14-9012-6aff6c1d86e7](Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.ekg|current/StructureDefinition/medcom-ekg-recording-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-ekg-recording-observation.csv), [Excel](StructureDefinition-medcom-ekg-recording-observation.xlsx), [Schematron](StructureDefinition-medcom-ekg-recording-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-ekg-recording-observation",
  "url" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-observation",
  "version" : "1.0.2",
  "name" : "MedComEkgRecordingObservation",
  "title" : "MedComEkgRecordingObservation",
  "status" : "active",
  "date" : "2026-01-28T10:08:45+00:00",
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
  "description" : "Observation profile intended to be used in MedCom's Ekg Recording standard.",
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
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.extension.value[x].contentType",
        "short" : "MIME type of the attached EKG recording.",
        "min" : 1,
        "fixedCode" : "application/pdf",
        "mustSupport" : true
      },
      {
        "id" : "Observation.extension:valueAttachment.value[x].data",
        "path" : "Observation.extension.value[x].data",
        "short" : "Base64-encoded content of the EKG recording PDF/A document.",
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
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.extension.value[x].title",
        "min" : 1,
        "patternString" : "Elektrokardiogram-12-aflednings",
        "mustSupport" : true
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
        "id" : "Observation.code.coding:LOINC",
        "path" : "Observation.code.coding",
        "sliceName" : "LOINC",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:LOINC.system",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.code.coding.system",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:LOINC.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.code.coding.code",
        "fixedCode" : "11524-6",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:LOINC.display",
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
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.code.coding.display",
        "min" : 1,
        "fixedString" : "EKG study",
        "mustSupport" : true
      },
      {
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "short" : "The time or time period of the EKG recording.",
        "min" : 1,
        "type" : [
          {
            "code" : "dateTime"
          },
          {
            "code" : "Period"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.effective[x]:effectiveDateTime",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.effective[x]",
        "sliceName" : "effectiveDateTime",
        "short" : "The time of the EKG recording. Use this if effectivePeriod.start is unknown.",
        "min" : 0,
        "max" : "1",
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
            "source" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-observation"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.effective[x]:effectivePeriod",
        "path" : "Observation.effective[x]",
        "sliceName" : "effectivePeriod",
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
        "id" : "Observation.effective[x]:effectivePeriod.start",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.effective[x].start",
        "short" : "The start time of the EKG recording",
        "min" : 1,
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-observation"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.effective[x]:effectivePeriod.end",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.effective[x].end",
        "short" : "The end time of the EKG recording",
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-observation"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
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
        "id" : "Observation.note",
        "path" : "Observation.note",
        "short" : "Free-text note, used to document relevant measurement-related remarks. Line breaks in FHIR string values must be represented as escaped newline characters \\n in JSON and either as a literal newline in the element text or as the character reference &#xA; in XML.",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.note.text",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/ekg/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Observation.note.text",
        "maxLength" : 1024,
        "mustSupport" : true
      }
    ]
  }
}

```
