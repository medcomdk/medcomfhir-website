# MedComDocumentPatient - Danish XDS Documents profiles v1.0.0-trial-use-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentPatient**

## Resource Profile: MedComDocumentPatient 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-patient | *Version*:1.0.0-trial-use-2 |
| Draft as of 2026-06-17 | *Computable Name*:MedComDocumentPatient |

 
A profile including requirements for a MedCom Document Patient. 

**Usages:**

* Refer to this Profile: [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.xdsdocuments|current/StructureDefinition/medcom-document-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-patient.csv), [Excel](StructureDefinition-medcom-document-patient.xlsx), [Schematron](StructureDefinition-medcom-document-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-patient",
  "url" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-patient",
  "version" : "1.0.0-trial-use-2",
  "name" : "MedComDocumentPatient",
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
  "description" : "A profile including requirements for a MedCom Document Patient.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "max" : "1"
      },
      {
        "id" : "Patient.identifier:cpr",
        "path" : "Patient.identifier",
        "sliceName" : "cpr",
        "min" : 1
      },
      {
        "id" : "Patient.identifier:x-ecpr",
        "path" : "Patient.identifier",
        "sliceName" : "x-ecpr",
        "max" : "0"
      },
      {
        "id" : "Patient.identifier:d-ecpr",
        "path" : "Patient.identifier",
        "sliceName" : "d-ecpr",
        "max" : "0"
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "max" : "1"
      },
      {
        "id" : "Patient.name:official",
        "path" : "Patient.name",
        "sliceName" : "official"
      },
      {
        "id" : "Patient.name:official.given",
        "path" : "Patient.name.given",
        "min" : 1
      },
      {
        "id" : "Patient.gender",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/xdsdocuments/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Patient.gender",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Patient.birthDate",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/xdsdocuments/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Patient.birthDate",
        "min" : 1,
        "mustSupport" : true
      }
    ]
  }
}

```
