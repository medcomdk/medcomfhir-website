# Urine dipstick tests - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Urine dipstick tests**

## Example Observation: Urine dipstick tests

Profile: [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md)

**status**: Final

**code**: U—Protein; arb.k.(proc.) = ?

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md)

**effective**: 2023-09-13 12:24:08+0200

**value**: 1 +

**interpretation**: Not Interpreted



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "4b8f899a-df12-4301-8287-9a77d46ded3d",
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
        "code" : "NPU04206",
        "display" : "U—Protein; arb.k.(proc.) = ?"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/733cef33-3626-422b-955d-d506aaa65fe1"
  },
  "effectiveDateTime" : "2023-09-13T12:24:08+02:00",
  "valueQuantity" : {
    "value" : 1,
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
