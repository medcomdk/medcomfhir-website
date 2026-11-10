# ContactExtension - DK MedCom Core v1.0.0-test

## Extension: ContactExtension 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension | *Version*:1.0.0-test |
| Active as of 2026-11-10 | *Computable Name*:MedComCoreContactExtension |

Extension that contains the contact information

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-contact-extension.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-contact-extension.csv), [Excel](StructureDefinition-medcom-core-contact-extension.xlsx), [Schematron](StructureDefinition-medcom-core-contact-extension.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-contact-extension",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension",
  "version" : "1.0.0-test",
  "name" : "MedComCoreContactExtension",
  "title" : "ContactExtension",
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
  "description" : "Extension that contains the contact information",
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
      "short" : "ContactExtension",
      "definition" : "Extension that contains the contact information"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension"
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
      "id" : "Extension.value[x]:valueContactPoint",
      "path" : "Extension.value[x]",
      "sliceName" : "valueContactPoint",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "Extension.value[x]:valueContactPoint.system",
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
      "path" : "Extension.value[x].system",
      "patternCode" : "phone",
      "mustSupport" : true
    },
    {
      "id" : "Extension.value[x]:valueContactPoint.value",
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
      "path" : "Extension.value[x].value",
      "short" : "Shall contain a relevant telephone number.",
      "min" : 1,
      "constraint" : [{
        "key" : "medcom-core-contact",
        "severity" : "error",
        "human" : "The telephone number may include + and numbers from 0-9",
        "expression" : "matches('[+]?[-0-9]')",
        "source" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Extension.value[x]:valueContactPoint.use",
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
      "path" : "Extension.value[x].use"
    }]
  }
}

```
