# Leukocyt urine test - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Leukocyt urine test**

## Example Observation: Leukocyt urine test

Profile: [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md)

**status**: Final

**code**: U—Leukocytter; arb.k.(proc.) = ?

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md)

**effective**: 2023-09-13 12:24:08+0200

**value**: 2 +

**interpretation**: Not Interpreted



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2fc2c078-825b-491d-9f8e-34926eb4f06f",
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
        "code" : "NPU03987",
        "display" : "U—Leukocytter; arb.k.(proc.) = ?"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/733cef33-3626-422b-955d-d506aaa65fe1"
  },
  "effectiveDateTime" : "2023-09-13T12:24:08+02:00",
  "valueQuantity" : {
    "value" : 2,
    "unit" : "+"
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
