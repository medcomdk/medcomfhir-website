# Observation - DK MedCom Notes v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation**

## Example Observation: Observation

Profile: [MedComNotesObservationversion: null1.0.0)](StructureDefinition-medcom-notes-observation.md)

**MedCom Observation ValueAttachment Extension**: text/html: w6Vyc2tvbnRyb2w6IEJUIDEzOC84MiBtbUhn

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.0.0/NamingSystem-uri.html)/urn:uuid:3e4907e4-a5f9-4403-b0a0-9b3201a97074

**status**: Final

**code**: Encounter note

**subject**: [Niels Test Vendelboe (official) Mand, DoB: 1974-01-30 ( urn:oid:1.2.208.176.1.2#3001749995)](Patient-b3b07166-24d7-462b-acb3-1a29269c4740.md)

**effective**: 2026-12-10 10:00:00+0100

**performer**: [Organization Lægerne Hasseris Bymidte](Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "d2c9d517-3abd-450e-a3c2-18f18da6fd88",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/notes/StructureDefinition/medcom-notes-observation|1.0.0"
    ]
  },
  "extension" : [
    {
      "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-observation-value-attachment-extension",
      "valueAttachment" : {
        "contentType" : "text/html",
        "data" : "w6Vyc2tvbnRyb2w6IEJUIDEzOC84MiBtbUhn"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:3e4907e4-a5f9-4403-b0a0-9b3201a97074"
    }
  ],
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "866144008",
        "display" : "Encounter note"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/b3b07166-24d7-462b-acb3-1a29269c4740"
  },
  "effectiveDateTime" : "2026-12-10T10:00:00+01:00",
  "performer" : [
    {
      "reference" : "Organization/b3860fb8-4b1d-4be5-8290-e6a026d10555"
    }
  ]
}

```
