# MedComDocumentPractitioner - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentPractitioner**

## Resource Profile: MedComDocumentPractitioner 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComDocumentPractitioner |

 
A profile including requirements for a MedCom Document Practitioner 

### Scope and usage

This profile describes the MedComDocumentPractitioner, which is used to describe a Practitioner in a MedCom Document standard. The MedComDocumentPractitioner is inherited from the [MedComCorePractitioner](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-practitioner.html) and requires a given and family name of the practitioner. These requirements are due to the IHE XDS metadata standard (authorPerson attribute) which requires a name.

MedComDocumentPractitioner is broardly defined, and may be used to define all the professionals involved directly or indirectly in citizen and patient care and well-being.

**Usages:**

* Refer to this Profile: [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md), [MedComDocumentComposition](StructureDefinition-medcom-document-composition.md), [MedComDocumentObservation](StructureDefinition-medcom-document-observation.md) and [MedComDocumentPractitionerRole](StructureDefinition-medcom-document-practitionerrole.md)
* Examples for this Profile: [Practitioner/42cb9200-f421-4d08-8391-7d51a2503cb4](Practitioner-42cb9200-f421-4d08-8391-7d51a2503cb4.md) and [Practitioner/48ed6310-3095-44da-9e34-d1cd6bd830c9](Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-document-practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-practitioner.csv), [Excel](StructureDefinition-medcom-document-practitioner.xlsx), [Schematron](StructureDefinition-medcom-document-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-practitioner",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner",
  "version" : "2.0.1",
  "name" : "MedComDocumentPractitioner",
  "status" : "active",
  "date" : "2026-03-10T10:51:18+00:00",
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
  "description" : "A profile including requirements for a MedCom Document Practitioner",
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner"
      },
      {
        "id" : "Practitioner.identifier",
        "path" : "Practitioner.identifier",
        "short" : "Globally unique, stable identifier for this resource. The same identifier SHALL be used when this resource is recreated from the same source data.",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.identifier.system",
        "path" : "Practitioner.identifier.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.identifier.value",
        "path" : "Practitioner.identifier.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.name",
        "path" : "Practitioner.name",
        "min" : 1
      },
      {
        "id" : "Practitioner.name.family",
        "path" : "Practitioner.name.family",
        "min" : 1
      },
      {
        "id" : "Practitioner.name.given",
        "path" : "Practitioner.name.given",
        "min" : 1
      }
    ]
  }
}

```
