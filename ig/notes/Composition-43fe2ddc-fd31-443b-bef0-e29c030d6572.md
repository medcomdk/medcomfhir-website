# Journalnotat for 3001749995 - DK MedCom Notes v1.0.0-trial-use

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Journalnotat for 3001749995**

## Example Composition: Journalnotat for 3001749995

Language: da

Profile: [MedComNotesCompositionversion: null1.0.0-trial-use)](StructureDefinition-medcom-notes-composition.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.0.0/NamingSystem-uri.html)/urn:uuid:07585abe-9862-489d-8fa6-0a64e2eaccb0

**status**: Final

**type**: Encounter note

**category**: Klinisk rapport

**date**: 2026-12-10 10:00:00+0100

**author**: [Organization Lægerne Hasseris Bymidte](Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.md)

**title**: Journalnotat for 3001749995

**confidentiality**: normal

### Events

| | |
| :--- | :--- |
| - | **Period** |
| * | 2026-12-10 10:00:00+0100 --> (ongoing) |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "43fe2ddc-fd31-443b-bef0-e29c030d6572",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-composition|1.0.0"
    ]
  },
  "language" : "da",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:07585abe-9862-489d-8fa6-0a64e2eaccb0"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "866144008",
        "display" : "Encounter note"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-ihe-classcode-CS",
          "code" : "001",
          "display" : "Klinisk rapport"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/b3b07166-24d7-462b-acb3-1a29269c4740"
  },
  "date" : "2026-12-10T10:00:00+01:00",
  "author" : [
    {
      "reference" : "Organization/b3860fb8-4b1d-4be5-8290-e6a026d10555"
    }
  ],
  "title" : "Journalnotat for 3001749995",
  "confidentiality" : "N",
  "event" : [
    {
      "period" : {
        "start" : "2026-12-10T10:00:00+01:00"
      }
    }
  ],
  "section" : [
    {
      "entry" : [
        {
          "reference" : "Observation/d2c9d517-3abd-450e-a3c2-18f18da6fd88"
        }
      ]
    }
  ]
}

```
