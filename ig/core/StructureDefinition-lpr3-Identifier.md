# LPR3 Identifier - DK MedCom Core v4.0.1

## Data Type Profile: LPR3 Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/lpr3-Identifier | *Version*:4.0.1 |
| Active as of 2026-11-11 | *Computable Name*:Lpr3Identifier |

 
Identifier holding a LPR3 identifier 

**Usages:**

* Use this DataType Profile: [MedComCoreEncounter](StructureDefinition-medcom-core-encounter.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-lpr3-Identifier.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-lpr3-Identifier.csv), [Excel](StructureDefinition-lpr3-Identifier.xlsx), [Schematron](StructureDefinition-lpr3-Identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lpr3-Identifier",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/lpr3-Identifier",
  "version" : "4.0.1",
  "name" : "Lpr3Identifier",
  "title" : "LPR3 Identifier",
  "status" : "active",
  "date" : "2026-11-11T07:45:06+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "Identifier holding a LPR3 identifier",
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
      "id" : "Identifier.system",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Identifier.system",
      "min" : 1,
      "fixedUri" : "https://www.esundhed.dk/Registre/Landspatientregisteret",
      "mustSupport" : true
    },
    {
      "id" : "Identifier.value",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Identifier.value",
      "min" : 1,
      "constraint" : [{
        "key" : "uuidv5",
        "severity" : "error",
        "human" : "LPR3 episodeOfCare identifiers must conform to a UUIDv5",
        "expression" : "matches('urn:uuid:[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[5][a-fA-F0-9]{3}-[89aAbB][a-fA-F0-9]{3}-[a-fA-F0-9]{12}')",
        "source" : "http://medcomfhir.dk/ig/core/StructureDefinition/lpr3-Identifier"
      }],
      "mustSupport" : true
    }]
  }
}

```
