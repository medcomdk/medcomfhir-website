# MedComCorePatient - DK MedCom Core v4.0.1

## Resource Profile: MedComCorePatient 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient | *Version*:4.0.1 |
| Active as of 2026-11-11 | *Computable Name*:MedComCorePatient |

 
Patient/citizen resource to use as subject in MedCom communication. 

### Scope and usage

MedComCorePatient profile describes information about a patient or citizen in a MedCom standard. The MedComCorePatient is inherited from the [DkCorePatient](https://hl7.dk/fhir/core/2.0.0/StructureDefinition-dk-core-patient.html) profile defined by HL7 Denmark. An identifier and the patients official family name ('efternavn' in Danish) **SHALL** both be present, when exchanging patient related information.

Please refer to the tab "Snapshot Table" below for the definition of the required content of a MedComCorePatient.

#### Patient identifiers

A MedComCorePatient **SHALL** include an identifier, containing a value which is the actual id and a system which is used to identify a set of unique values.

When a patient has an official civil person register (CPR)-number this **SHALL** be used. To represent a CPR-number, the identifier [DkCoreCprIdentifier](https://hl7.dk/fhir/core/2.0.0/StructureDefinition-dk-core-cpr-identifier.html) **SHALL** be used. In the identifier the system is used to describes that value is an official CPR-number, as described on [cpr.dk](https://cpr.dk/).

Only in cases where the patient does not have an official CPR-number, a replacement person identifier (Danish: Erstatningspersonnummer) (eCPR)-number **SHALL** be used. More information concerning the use of eCPR-numbers can be found on [DkCorePatient](https://hl7.dk/fhir/core/StructureDefinition-dk-core-patient.html#ecpr-identifier).

**Usages:**

* Refer to this Profile: [MedComCoreDiagnosticReport](StructureDefinition-medcom-core-diagnosticreport.md), [MedComCoreEncounter](StructureDefinition-medcom-core-encounter.md), [MedComMedia](StructureDefinition-medcom-core-media.md) and [MedComCoreObservation](StructureDefinition-medcom-core-observation.md)
* Examples for this Profile: [Patient/382fb8a3-6725-41e2-a615-2b1cfcfe9931](Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.md), [Patient/5b72c625-0570-4111-b272-f0351344f8b6](Patient-5b72c625-0570-4111-b272-f0351344f8b6.md), [Patient/733cef33-3626-422b-955d-d506aaa65fe1](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md) and [Patient/ded1fc9a-aa93-4162-aaec-7145a8ac951f](Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-patient.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-patient.csv), [Excel](StructureDefinition-medcom-core-patient.xlsx), [Schematron](StructureDefinition-medcom-core-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-patient",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient",
  "version" : "4.0.1",
  "name" : "MedComCorePatient",
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
  "description" : "Patient/citizen resource to use as subject in MedCom communication.",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Patient",
      "path" : "Patient"
    },
    {
      "id" : "Patient.id",
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
      "path" : "Patient.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Patient.text",
      "path" : "Patient.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Patient.text.status",
      "path" : "Patient.text.status",
      "mustSupport" : true
    },
    {
      "id" : "Patient.text.div",
      "path" : "Patient.text.div",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier",
      "path" : "Patient.identifier",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:cpr",
      "path" : "Patient.identifier",
      "sliceName" : "cpr",
      "short" : "Unique identification number for all citizens in Denmark, called civil person register (CPR-number).",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:cpr.system",
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
      "path" : "Patient.identifier.system",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:cpr.value",
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
      "path" : "Patient.identifier.value",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:x-ecpr",
      "path" : "Patient.identifier",
      "sliceName" : "x-ecpr",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:x-ecpr.system",
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
      "path" : "Patient.identifier.system",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:x-ecpr.value",
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
      "path" : "Patient.identifier.value",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:d-ecpr",
      "path" : "Patient.identifier",
      "sliceName" : "d-ecpr",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:d-ecpr.system",
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
      "path" : "Patient.identifier.system",
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier:d-ecpr.value",
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
      "path" : "Patient.identifier.value",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name",
      "path" : "Patient.name",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Patient.name:official",
      "path" : "Patient.name",
      "sliceName" : "official",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Patient.name:official.use",
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
      "path" : "Patient.name.use",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name:official.family",
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
      "path" : "Patient.name.family",
      "definition" : "Shall always be present, danish \"efternavn\". ",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name:official.given",
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
      "path" : "Patient.name.given",
      "definition" : "Shall be present if the official given name of the patient is known, danish \"fornavn\". ",
      "mustSupport" : true
    },
    {
      "id" : "Patient.telecom",
      "path" : "Patient.telecom",
      "definition" : "Shall contain value, system and use if these information are known."
    },
    {
      "id" : "Patient.address",
      "path" : "Patient.address",
      "definition" : "Shall contain all known, relevant addresses of the patient"
    },
    {
      "id" : "Patient.address.line",
      "path" : "Patient.address.line",
      "definition" : "Shall contain the known information about the street name, number etc. to provide an exact address"
    },
    {
      "id" : "Patient.address.city",
      "path" : "Patient.address.city",
      "definition" : "Shall be present if the city is known"
    },
    {
      "id" : "Patient.address.postalCode",
      "path" : "Patient.address.postalCode",
      "definition" : "Shall be present if the postal code is known"
    },
    {
      "id" : "Patient.managingOrganization",
      "path" : "Patient.managingOrganization",
      "definition" : "Organization that is the custodian of the patient record. This can e.g. be the sender of a message or responsable for the patients treatment. One of these organizations will always be included in the bundle, why this element is not mandatory to include.",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization"],
        "aggregation" : ["bundled"]
      }]
    }]
  }
}

```
