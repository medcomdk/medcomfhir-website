# Observation - DK MedCom Notes v1.0.0-trial-use

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation**

## Example Observation: Observation

Profile: [MedComNotesObservationversion: null1.0.0-trial-use)](StructureDefinition-medcom-notes-observation.md)

**MedCom Observation ValueAttachment Extension**: text/html: IDxwPlBhdGllbnRlbiBzZXMgdGlsIDxiPsOlcnNrb250cm9sIGFmIGRpYWJldGVzPC9iPi4gQmVoYW5kbGluZyBmw7hsZ2VzLCBvZyBwdC4gYW5naXZlciBpbmdlbiBoeXBvZ2x5a8OmbWlza2UgZXBpc29kZXIuPC9wPgoKPHA+T2JqZWt0aXZ0Ojxici8+CkJUIDEzOC84MiBtbUhnLiBCTUkgPGk+MjcsMzwvaT4uIEZvZHN0YXR1cyB1LmEuPC9wPgoKPHA+UGFyYWtsaW5pazo8YnIvPgpIYkExYyA1OCBtbW9sL21vbCAoPGVtPm92ZXIgbcOlbDwvZW0+KS48L3A+Cgo8cD5WdXJkZXJpbmcvcGxhbjogPGI+VHlwZSAyIGRpYWJldGVzPC9iPiBtZWQgZGVsdmlzIHJlZ3VsZXJpbmcuIEp1c3RlcmluZyBhZiBtZXRmb3JtaW4gb2cgcsOlZGdpdm5pbmcgb20gbGl2c3N0aWwuIEtvbnRyb2wgb20gNiBtZHIuPC9wPgoKPHA+VW5kZXJza3JpZnQ6IERyLiA8dHQ+QW5kZXJzZW48L3R0PjwvcD4=

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.0.0/NamingSystem-uri.html)/urn:uuid:3e4907e4-a5f9-4403-b0a0-9b3201a97074

**status**: Final

**code**: Encounter note

**subject**: [Niels Test Vendelboe (official) Mand, DoB: 1974-01-30 ( urn:oid:1.2.208.176.1.2#3001749995)](Patient-d65cd8db-4520-4264-87be-a5fd01fb9762.md)

**effective**: 2026-12-12 09:05:00+0000

**performer**: 

* [Organization Lægerne Hasseris Bymidte](Organization-f8d0eb07-5336-4005-9081-b065f9a82663.md)
* [PractitionerRole Speciallæge i praksis](PractitionerRole-bb6fa4e1-f8b1-4bf4-b77e-bb03b2cc9820.md)
* [Practitioner Sidsel Andersen ](Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "if810168-ee7c-4f34-8012-9aff6c1d86e7",
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
        "data" : "IDxwPlBhdGllbnRlbiBzZXMgdGlsIDxiPsOlcnNrb250cm9sIGFmIGRpYWJldGVzPC9iPi4gQmVoYW5kbGluZyBmw7hsZ2VzLCBvZyBwdC4gYW5naXZlciBpbmdlbiBoeXBvZ2x5a8OmbWlza2UgZXBpc29kZXIuPC9wPgoKPHA+T2JqZWt0aXZ0Ojxici8+CkJUIDEzOC84MiBtbUhnLiBCTUkgPGk+MjcsMzwvaT4uIEZvZHN0YXR1cyB1LmEuPC9wPgoKPHA+UGFyYWtsaW5pazo8YnIvPgpIYkExYyA1OCBtbW9sL21vbCAoPGVtPm92ZXIgbcOlbDwvZW0+KS48L3A+Cgo8cD5WdXJkZXJpbmcvcGxhbjogPGI+VHlwZSAyIGRpYWJldGVzPC9iPiBtZWQgZGVsdmlzIHJlZ3VsZXJpbmcuIEp1c3RlcmluZyBhZiBtZXRmb3JtaW4gb2cgcsOlZGdpdm5pbmcgb20gbGl2c3N0aWwuIEtvbnRyb2wgb20gNiBtZHIuPC9wPgoKPHA+VW5kZXJza3JpZnQ6IERyLiA8dHQ+QW5kZXJzZW48L3R0PjwvcD4="
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
    "reference" : "Patient/d65cd8db-4520-4264-87be-a5fd01fb9762"
  },
  "effectiveDateTime" : "2026-12-12T09:05:00Z",
  "performer" : [
    {
      "reference" : "Organization/f8d0eb07-5336-4005-9081-b065f9a82663"
    },
    {
      "reference" : "PractitionerRole/bb6fa4e1-f8b1-4bf4-b77e-bb03b2cc9820"
    },
    {
      "reference" : "Practitioner/48ed6310-3095-44da-9e34-d1cd6bd830c9"
    }
  ]
}

```
