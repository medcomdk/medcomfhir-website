# Journalnotat for 3001749995 - DK MedCom Notes v1.0.0-trial-use

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Journalnotat for 3001749995**

## Example Composition: Journalnotat for 3001749995

Language: da

Profile: [MedComNotesCompositionversion: null1.0.0-trial-use)](StructureDefinition-medcom-notes-composition.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.0.0/NamingSystem-uri.html)/urn:uuid:47ef2e1b-5f14-42ca-bd8f-feafb4154240

**status**: Final

**type**: Encounter note

**category**: Klinisk rapport

**date**: 2026-12-12 14:50:00+0100

**author**: 

* [Organization Lægerne Hasseris Bymidte](Organization-f8d0eb07-5336-4005-9081-b065f9a82663.md)
* [Practitioner Sidsel Andersen ](Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.md)

**title**: Journalnotat for 3001749995

**confidentiality**: normal

### Events

| | |
| :--- | :--- |
| - | **Period** |
| * | 2026-12-12 09:05:00+0100 --> (ongoing) |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "cff723a9-fae7-4fc6-8db2-6e49cbbc928a",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-composition|1.0.0"
    ]
  },
  "language" : "da",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:47ef2e1b-5f14-42ca-bd8f-feafb4154240"
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
    "reference" : "Patient/d65cd8db-4520-4264-87be-a5fd01fb9762"
  },
  "date" : "2026-12-12T14:50:00+01:00",
  "author" : [
    {
      "reference" : "Organization/f8d0eb07-5336-4005-9081-b065f9a82663"
    },
    {
      "reference" : "Practitioner/48ed6310-3095-44da-9e34-d1cd6bd830c9"
    }
  ],
  "title" : "Journalnotat for 3001749995",
  "confidentiality" : "N",
  "event" : [
    {
      "period" : {
        "start" : "2026-12-12T09:05:00+01:00"
      }
    }
  ],
  "section" : [
    {
      "entry" : [
        {
          "reference" : "Observation/if810168-ee7c-4f34-8012-9aff6c1d86e7"
        }
      ]
    }
  ]
}

```
