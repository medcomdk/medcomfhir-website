# MedComEkgRecordingComposition - DK MedCom EKG v1.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComEkgRecordingComposition**

## Resource Profile: MedComEkgRecordingComposition 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-composition | *Version*:1.0.2 |
| Active as of 2026-01-28 | *Computable Name*:MedComEkgRecordingComposition |

 
A profile for the MedCom Ekg Recording Composition resource. 

# MedCom EKG Recording Composition

This page describes how the **MedCom Ekg Recording Composition** profile is used within the MedCom EKG Recording standard.

The MedComDocumentComposition profile defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document. Rather, the Composition must be the first entry in a Bundle where Bundle.type is 'document', and any other resources referenced from Composition must be included as subsequent entries in the Bundle.entry element.

## Purpose of the Profile

This resource links the various resources used for sharing EKG recordings. The specific resources are:

* `Observation` (MedComEkgRecordingObservation)​
* `Patient` (MedComDocumentPatient)​
* `Organization` (MedComDocumentOrganization)​
* `PractitionerRole` (MedComDocumentPractitionerRole) and/or Practitioner (MedComDocumentPractitioner) (both optional)

The `section.entry` element **MUST** reference the MedComEkgRecordingObservation that contains the EKG PDF-A attachment.

It is required to use the profiles `MedComEkgRecordingObservation` (representing the EKG PDF-A file and an optional note), `MedComDocumentPatient` (the patient of the EKG recording) and `MedComDocumentOrganization` (the author organization of the EKG recording), whereas it is optional to include a `MedComDocumentPractitionerRole` and/or `MedComDocumentPractitioner` (representing the author person).

### Profile identification and versioning (meta.profile)

The meta.profile element identifies the applied FHIR Composition profile, including the major and minor version of the MedCom document standard. Systems **SHALL** be able to receive and process documents where the minor version differs in this element, as long as the major version remains unchanged.

#### Mapping between XDS formatCode and FHIR Composition profile

The XDS `formatCode` `urn:ad:dk:medcom:ekg-v[major].[minor]:full`
 maps to the FHIR `Composition.meta.profile` `http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-composition|[major].[minor]`.

The `[major].[minor]` version components are versioned in lockstep. Any change to either the major or minor version SHALL be reflected in both to maintain semantic alignment between the MedCom XDS Metadata and the FHIR representation.

**Example (v1.0):**

* **XDS `formatCode`:**
 `urn:ad:dk:medcom:ekg-v1.0:full`
* **FHIR `Composition.meta.profile`:**
 `http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-composition|1.0`

#### Timestamps

`Composition.event.period.start` and `Composition.event.period.end` is used to represent the time interval of the EKG recording.

If `Observation.effectivePeriod.start` is known, this **MUST** be inserted as `Composition.event.period.start`.

If `Observation.effectivePeriod.start` is **NOT** known, `Observation.effectiveDateTime` **MUST** be inserted as `Composition.event.period.start` instead.

If `Observation.effectivePeriod.end` is known, this **MUST** be inserted as `Composition.event.period.end`. If this is **NOT** known, this can be left empty, as it is optional.

**Usages:**

* Use this Profile: [MedComEkgRecordingBundle](StructureDefinition-medcom-ekg-recording-bundle.md)
* Examples for this Profile: [Composition/384ca229-c562-4a26-a035-c0c38108e036](Composition-384ca229-c562-4a26-a035-c0c38108e036.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.ekg|current/StructureDefinition/medcom-ekg-recording-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-ekg-recording-composition.csv), [Excel](StructureDefinition-medcom-ekg-recording-composition.xlsx), [Schematron](StructureDefinition-medcom-ekg-recording-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-ekg-recording-composition",
  "url" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-composition",
  "version" : "1.0.2",
  "name" : "MedComEkgRecordingComposition",
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
  "description" : "A profile for the MedCom Ekg Recording Composition resource.",
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
            "source" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-composition"
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
        "fixedUri" : "http://loinc.org"
      },
      {
        "id" : "Composition.type.coding.code",
        "path" : "Composition.type.coding.code",
        "fixedCode" : "11524-6"
      },
      {
        "id" : "Composition.type.coding.display",
        "path" : "Composition.type.coding.display",
        "fixedString" : "EKG study"
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
        "short" : "The clinical date and time when the clinical report represented by this Composition was finalized, typically equal to the event.period.end of the recorded EKG. If event.period.end is not available, use event.period.start or Observation.effectiveDateTime."
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole"
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
        "id" : "Composition.title",
        "path" : "Composition.title",
        "short" : "Title MUST be 'Elektrokardiogram-12-aflednings'",
        "fixedString" : "Elektrokardiogram-12-aflednings"
      },
      {
        "id" : "Composition.confidentiality",
        "path" : "Composition.confidentiality",
        "fixedCode" : "N"
      },
      {
        "id" : "Composition.event.period.start",
        "path" : "Composition.event.period.start",
        "short" : "The end time of the EKG recording",
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-composition"
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
            "source" : "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-composition"
          }
        ]
      },
      {
        "id" : "Composition.section.entry",
        "path" : "Composition.section.entry",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/ekg/StructureDefinition/medcom-ekg-recording-observation"
            ]
          }
        ]
      }
    ]
  }
}

```
