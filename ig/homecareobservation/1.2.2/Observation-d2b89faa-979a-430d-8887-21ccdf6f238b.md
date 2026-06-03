# Monocytes observation - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Monocytes observation**

## Example Observation: Monocytes observation

Profile: [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md)

**status**: Final

**code**: B—Monocytter; antalk. = ? × 10^9/L

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md)

**effective**: 2023-09-12 10:32:08+0200

**value**: 0.7 10^9/L

**interpretation**: Not Interpreted



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "d2b89faa-979a-430d-8887-21ccdf6f238b",
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
        "code" : "NPU02840",
        "display" : "B—Monocytter; antalk. = ? × 10^9/L"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/733cef33-3626-422b-955d-d506aaa65fe1"
  },
  "effectiveDateTime" : "2023-09-12T10:32:08+02:00",
  "valueQuantity" : {
    "value" : 0.7,
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
