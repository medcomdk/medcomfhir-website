# AssignedIdentifier - DK MedCom Core v1.0.0-test

## Data Type Profile: AssignedIdentifier 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-assigned-identifier | *Version*:1.0.0-test |
| Active as of 2026-11-10 | *Computable Name*:MedComAssignedIdentifier |

 
An UUID identifier assigned by an organisation 

**Usages:**

* Use this DataType Profile: [IdentifierExtension](StructureDefinition-medcom-core-identifier-extension.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-assigned-identifier.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-assigned-identifier.csv), [Excel](StructureDefinition-medcom-assigned-identifier.xlsx), [Schematron](StructureDefinition-medcom-assigned-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-assigned-identifier",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-assigned-identifier",
  "version" : "1.0.0-test",
  "name" : "MedComAssignedIdentifier",
  "title" : "AssignedIdentifier",
  "status" : "active",
  "date" : "2026-11-10T08:16:44+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "An UUID identifier assigned by an organisation",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Identifier",
      "path" : "Identifier"
    },
    {
      "id" : "Identifier.value",
      "path" : "Identifier.value",
      "short" : "The value is a UUID identifier version 4.",
      "min" : 1,
      "constraint" : [{
        "key" : "medcom-uuidv4",
        "severity" : "error",
        "human" : "The value shall correspond to the structure of an UUID version 4",
        "expression" : "matches('urn:uuid:[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}')",
        "source" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-assigned-identifier"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Identifier.assigner",
      "path" : "Identifier.assigner",
      "short" : "A reference to the organization that initially added the identifier.",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization"]
      }],
      "mustSupport" : true
    }]
  }
}

```
