# Systolic Blood Pressure - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Systolic Blood Pressure**

## Example Observation: Systolic Blood Pressure

Profile: [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md)

**status**: Final

**code**: Arm—Blodtryk(systolisk); tryk = ? mmHg

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.md)

**effective**: 2023-09-13 09:24:10+0200

**value**: 147 mmHg

**interpretation**: Not Interpreted



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "8917f29d-269c-4bb3-8ce9-d255c351d52b",
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
        "code" : "DNK05472",
        "display" : "Arm—Blodtryk(systolisk); tryk = ? mmHg"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/bbcd4817-1c4b-4089-a712-346f65ec16f9"
  },
  "effectiveDateTime" : "2023-09-13T09:24:10+02:00",
  "valueQuantity" : {
    "value" : 147,
    "unit" : "mmHg"
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
