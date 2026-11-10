# PractitionerExtension - DK MedCom Core v1.0.0-test

## Extension: PractitionerExtension 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension | *Version*:1.0.0-test |
| Active as of 2026-11-10 | *Computable Name*:MedComCorePractitionerExtension |

Reference to a PractitionerRole and subsequent Practitioner

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-practitioner-extension.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-practitioner-extension.csv), [Excel](StructureDefinition-medcom-core-practitioner-extension.xlsx), [Schematron](StructureDefinition-medcom-core-practitioner-extension.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-practitioner-extension",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension",
  "version" : "1.0.0-test",
  "name" : "MedComCorePractitionerExtension",
  "title" : "PractitionerExtension",
  "status" : "active",
  "date" : "2026-11-10T08:19:20+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "Reference to a PractitionerRole and subsequent Practitioner",
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
      "short" : "PractitionerExtension",
      "definition" : "Reference to a PractitionerRole and subsequent Practitioner"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"],
        "aggregation" : ["bundled"]
      }]
    }]
  }
}

```
