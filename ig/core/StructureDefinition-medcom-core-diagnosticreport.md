# MedComCoreDiagnosticReport - DK MedCom Core v4.0.1

## Resource Profile: MedComCoreDiagnosticReport 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-diagnosticreport | *Version*:4.0.1 |
| Active as of 2026-11-11 | *Computable Name*:MedComCoreDiagnosticReport |

 
Report containing all observation results. 

#### Scope and usage

This profile is intended to be uses as a diagnostic report in MedCom standards.

#### Attachments

In MedComCoreDiagnosticReport it is allowed to include attachments. When sending an attachment diagnosticReport.media shall be used. The DiagnosticReport.media.link reference to MedComCoreMedia resource where the atachment shall be added. It is up to the user to assess when it is relevant to send an attachment. Only an attachment of the permitted formats must be included. [Click here to see the permitted formats of an attachment](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-core-attachmentMimeTypes.html)

#### Use of security labet on patient consent

If a patient gives a negative consent to sharing the observation results with other than the general practitioner a security labe shall be used. This mean that the meta.security.code shall be R, and in the user interface, it shall be clearly stated that consent has been refused.

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-diagnosticreport.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-diagnosticreport.csv), [Excel](StructureDefinition-medcom-core-diagnosticreport.xlsx), [Schematron](StructureDefinition-medcom-core-diagnosticreport.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-diagnosticreport",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-diagnosticreport",
  "version" : "4.0.1",
  "name" : "MedComCoreDiagnosticReport",
  "title" : "MedComCoreDiagnosticReport",
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
  "description" : "Report containing all observation results.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DiagnosticReport",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DiagnosticReport",
      "path" : "DiagnosticReport"
    },
    {
      "id" : "DiagnosticReport.id",
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
      "path" : "DiagnosticReport.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.text",
      "path" : "DiagnosticReport.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.text.status",
      "path" : "DiagnosticReport.text.status",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.text.div",
      "path" : "DiagnosticReport.text.div",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.status",
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
      "path" : "DiagnosticReport.status",
      "short" : "registered | partial | preliminary | final | corrected | cancelled | entered-in-error",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-corediagnosticreport-status"
      }
    },
    {
      "id" : "DiagnosticReport.code",
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
      "path" : "DiagnosticReport.code",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/MedComDiagnosticReportCodesValueset"
      }
    },
    {
      "id" : "DiagnosticReport.subject",
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
      "path" : "DiagnosticReport.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient"],
        "aggregation" : ["bundled"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.performer",
      "path" : "DiagnosticReport.performer",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-careteam"]
      }]
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-careteam"]
      }]
    },
    {
      "id" : "DiagnosticReport.result",
      "path" : "DiagnosticReport.result",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-observation"],
        "aggregation" : ["bundled"]
      }]
    },
    {
      "id" : "DiagnosticReport.media",
      "path" : "DiagnosticReport.media",
      "short" : "Attachments that are relevant for assessment of the patient's condition."
    },
    {
      "id" : "DiagnosticReport.media.link",
      "path" : "DiagnosticReport.media.link",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-media"]
      }]
    }]
  }
}

```
