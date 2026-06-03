# Eosinofilocyt observation - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Eosinofilocyt observation**

## Example Observation: Eosinofilocyt observation

Profile: [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md)

**status**: Final

**code**: B—Eosinophilocytter; antalk. = ? × 10^9/L

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md)

**effective**: 2023-09-12 10:36:08+0200

**value**: 0.1 10^9/L

**interpretation**: Not Interpreted



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "b22fcbe0-4977-433e-ad1c-d6545bc8c1cb",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU01933",
        "display" : "B—Eosinophilocytter; antalk. = ? × 10^9/L"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/733cef33-3626-422b-955d-d506aaa65fe1"
  },
  "effectiveDateTime" : "2023-09-12T10:36:08+02:00",
  "valueQuantity" : {
    "value" : 0.1,
    "unit" : "10^9/L"
  },
  "interpretation" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-core-interpretation-codes",
          "code" : "NI",
          "display" : "Not Interpreted"
        }
      ]
    }
  ]
}

```
