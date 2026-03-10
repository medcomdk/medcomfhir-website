# MedComDocumentOrganization - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentOrganization**

## Resource Profile: MedComDocumentOrganization 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComDocumentOrganization |

 
A profile including requirements for a MedCom Document Organization resource 

### Scope and usage

This profile describes the MedComDocumentOrganization. This profile is inherited from the [MedComCoreOrganization](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-organization.html) The base expectations when describing an organisation in a Danish context is to include an identifier, in terms of a Sundhundsvæsenets Organisations Register (SOR)-identifier and a name of the organization. These requirements are due to the IHE XDS metadata standard (authorInstitution attribute) which requires an identifier and a name.

**Usages:**

* Refer to this Profile: [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md), [MedComDocumentCareTeam](StructureDefinition-medcom-document-careteam.md), [MedComDocumentComposition](StructureDefinition-medcom-document-composition.md), [MedComDocumentObservation](StructureDefinition-medcom-document-observation.md) and [MedComDocumentPractitionerRole](StructureDefinition-medcom-document-practitionerrole.md)
* Examples for this Profile: [Lægerne Hasseris Bymidte](Organization-f8d0eb07-5336-4005-9081-b065f9a82663.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-document-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-organization.csv), [Excel](StructureDefinition-medcom-document-organization.xlsx), [Schematron](StructureDefinition-medcom-document-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-organization",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization",
  "version" : "2.0.1",
  "name" : "MedComDocumentOrganization",
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
  "description" : "A profile including requirements for a MedCom Document Organization resource",
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
  "type" : "Organization",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization"
      },
      {
        "id" : "Organization.name",
        "path" : "Organization.name",
        "min" : 1
      }
    ]
  }
}

```
