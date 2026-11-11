# MedCom Observation ValueAttachment Extension - DK MedCom Core v4.0.1

## Extension: MedCom Observation ValueAttachment Extension 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-observation-value-attachment-extension | *Version*:4.0.1 |
| Active as of 2026-11-11 | *Computable Name*:MedComObservationValueAttachmentExtension |

Generic extension for Observation value as Attachment type.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [MedComCoreObservation](StructureDefinition-medcom-core-observation.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-observation-value-attachment-extension.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-observation-value-attachment-extension.csv), [Excel](StructureDefinition-medcom-observation-value-attachment-extension.xlsx), [Schematron](StructureDefinition-medcom-observation-value-attachment-extension.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-observation-value-attachment-extension",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-observation-value-attachment-extension",
  "version" : "4.0.1",
  "name" : "MedComObservationValueAttachmentExtension",
  "title" : "MedCom Observation ValueAttachment Extension",
  "status" : "active",
  "date" : "2026-11-11T07:42:01+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "Generic extension for Observation value as Attachment type.",
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
    "expression" : "Observation"
  },
  {
    "type" : "element",
    "expression" : "Observation.extension"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Observation value as attachment."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-observation-value-attachment-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "Attachment"
      }]
    }]
  }
}

```
