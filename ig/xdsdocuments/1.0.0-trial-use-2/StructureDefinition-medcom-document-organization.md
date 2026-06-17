# MedComDocumentOrganization - Danish XDS Documents profiles v1.0.0-trial-use-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentOrganization**

## Resource Profile: MedComDocumentOrganization 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-organization | *Version*:1.0.0-trial-use-2 |
| Draft as of 2026-06-17 | *Computable Name*:MedComDocumentOrganization |

 
A profile including requirements for a MedCom Document Organization resource 

**Usages:**

* Refer to this Profile: [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md) and [MedComDocumentPractitionerRole](StructureDefinition-medcom-document-practitionerrole.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.xdsdocuments|current/StructureDefinition/medcom-document-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-organization.csv), [Excel](StructureDefinition-medcom-document-organization.xlsx), [Schematron](StructureDefinition-medcom-document-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-organization",
  "url" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-organization",
  "version" : "1.0.0-trial-use-2",
  "name" : "MedComDocumentOrganization",
  "status" : "draft",
  "date" : "2026-06-17T08:43:36+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medcom.dk/"
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
