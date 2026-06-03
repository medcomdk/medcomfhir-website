# TOBS - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TOBS**

## Example Observation: TOBS

Profile: [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md)

**status**: Final

**code**: Pt—Tidlig Opsporing af Begyndende Sygdom (TOBS) score; antal (værdi 0-15) = ?

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.md)

**effective**: 2023-09-13 09:24:13+0200

**value**: 3 1 (Details: UCUM code1 = '1')

**interpretation**: Not Interpreted



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "f64a0a78-53cf-4a7f-9b89-4a2338a4935c",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-observation-codes",
        "code" : "MCS88125"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/bbcd4817-1c4b-4089-a712-346f65ec16f9"
  },
  "effectiveDateTime" : "2023-09-13T09:24:13+02:00",
  "valueQuantity" : {
    "value" : 3,
    "system" : "http://unitsofmeasure.org",
    "code" : "1"
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
