# IdentifierExtension - DK MedCom Core v1.0.0-test

## Extension: IdentifierExtension 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension | *Version*:1.0.0-test |
| Active as of 2026-11-10 | *Computable Name*:MedComCoreIdentifierExtension |

An extension holding a specific identifier datatype

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-identifier-extension.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-identifier-extension.csv), [Excel](StructureDefinition-medcom-core-identifier-extension.xlsx), [Schematron](StructureDefinition-medcom-core-identifier-extension.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-identifier-extension",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension",
  "version" : "1.0.0-test",
  "name" : "MedComCoreIdentifierExtension",
  "title" : "IdentifierExtension",
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
  "description" : "An extension holding a specific identifier datatype",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Element"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "IdentifierExtension",
      "definition" : "An extension holding a specific identifier datatype"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Extension.value[x]:valueIdentifier",
      "path" : "Extension.value[x]",
      "sliceName" : "valueIdentifier",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-assigned-identifier"]
      }],
      "mustSupport" : true
    }]
  }
}

```
