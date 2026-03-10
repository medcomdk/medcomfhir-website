# MedComDocumentPatient - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentPatient**

## Resource Profile: MedComDocumentPatient 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComDocumentPatient |

 
A profile including requirements for a MedCom Document Patient. 

### Scope and usage

The MedComDocumentPatient profile describes information about a patient or citizen used in a MedComs Document standard. The MedComDocumentPatient is inherited from the [DkCorePatient](https://hl7.dk/fhir/core/3.2.0/StructureDefinition-dk-core-patient.html) profile defined by HL7 Denmark. It does not inherit from MedComCorePatient, as more elements, than desired for this purpose, are marked with MustSupport.

#### Required information

There are certain requirements to which data **MUST** be present in a FHIR document. These requirements come from the IHE XDS metadata standard (sourcePatientInfo attribute) that requires for a Danish CPR-number (unique identifier), given and family name, birthdate and gender to be present. Therefore, this information has a cardinality of 1.

If the document source lacks data for either the patient's given name or family name, the missing field(s) **MUST** be populated with `ADRESSEBESKYTTET`. This approach ensures that unavailable name components are replaced, as the absence of a given or family name often results from name and address protection (Da: Navne- og adressebeskyttelse).

It is not allowed to add a replacement-CPR (Danish: erstatningsCPR), as this is not supported in the infrastructure.

**Usages:**

* Refer to this Profile: [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md), [MedComDocumentComposition](StructureDefinition-medcom-document-composition.md) and [MedComDocumentObservation](StructureDefinition-medcom-document-observation.md)
* Examples for this Profile: [Patient/37628912-7816-47a3-acd8-396b610be142](Patient-37628912-7816-47a3-acd8-396b610be142.md) and [Patient/379ebb53-11e3-42ac-b9db-0bad0ece46d1](Patient-379ebb53-11e3-42ac-b9db-0bad0ece46d1.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-document-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-patient.csv), [Excel](StructureDefinition-medcom-document-patient.xlsx), [Schematron](StructureDefinition-medcom-document-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-patient",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient",
  "version" : "2.0.1",
  "name" : "MedComDocumentPatient",
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
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
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
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
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
