# Heart Rate - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Heart Rate**

## Example Observation: Heart Rate

Profile: [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md)

**status**: Final

**code**: Hjerte—Systole; frekv. = ? × 1/min

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.md)

**effective**: 2023-09-13 09:24:09+0200

**value**: 92 1/min

**interpretation**: Not Interpreted

**note**: 

> 

Patienten har været ud og går lige inden målingen.




## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1",
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
        "code" : "NPU21692",
        "display" : "Hjerte—Systole; frekv. = ? × 1/min"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/bbcd4817-1c4b-4089-a712-346f65ec16f9"
  },
  "effectiveDateTime" : "2023-09-13T09:24:09+02:00",
  "valueQuantity" : {
    "value" : 92,
    "unit" : "1/min"
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
  ],
  "note" : [
    {
      "text" : "Patienten har været ud og går lige inden målingen."
    }
  ]
}

```
