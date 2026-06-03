# Cancelled HomeCareDiagnosticReport: TOBS and ABC examination - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cancelled HomeCareDiagnosticReport: TOBS and ABC examination**

## Example DiagnosticReport: Cancelled HomeCareDiagnosticReport: TOBS and ABC examination

Profile: [MedComHomeCareObservationDiagnosticReport](StructureDefinition-medcom-homecareobservation-diagnosticreport.md)

## HomeCareDiagnosticReport 

| | |
| :--- | :--- |
| Subject | Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989) |
| Reported | 2023-09-12 13:00:00+0200 |
| Performers | [Organization Pleje og Rehabilitering](Organization-a0330c62-fe29-4719-83fa-a94959084f29.md)[PractitionerRole Sygeplejerske](PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.md) |

**Report Details**

* **Code**: [Pt—Respiration; frekvens = ? X 1/min](Observation-3fd3835d-1758-4d22-8547-000182752817.md)
  * **Value**: 19 1/min
  * **Flags**: Final,Not Interpreted
  * **Note**: 
  * **When For**: 2023-09-13 09:24:08+0200
* **Code**: [Hjerte—Systole; frekv. = ? × 1/min](Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.md)
  * **Value**: 92 1/min
  * **Flags**: Final,Not Interpreted
  * **Note**: > Patienten har været ud og går lige inden målingen.
  * **When For**: 2023-09-13 09:24:09+0200
* **Code**: [Arm—Blodtryk(systolisk); tryk = ? mmHg](Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.md)
  * **Value**: 147 mmHg
  * **Flags**: Final,Not Interpreted
  * **Note**: 
  * **When For**: 2023-09-13 09:24:10+0200
* **Code**: [Pt—Bevidsthedsniveau; arb.antal(værdi 0-3) = ?](Observation-6bf03841-8397-4a2a-9f9a-8966b0cfa571.md)
  * **Value**: 0 1 (Details: UCUM code1 = '1')
  * **Flags**: Final,Not Interpreted
  * **Note**: 
  * **When For**: 2023-09-13 09:24:11+0200
* **Code**: [Pt—Legeme; temp. = ? °C](Observation-85fd1372-cf02-49c6-bd45-7205f5541a66.md)
  * **Value**: 38.7 °C
  * **Flags**: Final,Not Interpreted
  * **Note**: 
  * **When For**: 2023-09-13 09:24:12+0200
* **Code**: [Pt—Tidlig Opsporing af Begyndende Sygdom (TOBS) score; antal (værdi 0-15) = ?](Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.md)
  * **Value**: 3 1 (Details: UCUM code1 = '1')
  * **Flags**: Final,Not Interpreted
  * **Note**: 
  * **When For**: 2023-09-13 09:24:13+0200

Cancellation due to incorrect CPR-number



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "4f013d3a-575c-447d-83e1-7a5fb7f7b0de",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/MedComDiagnosticReportCodes",
        "code" : "HomeCareReport"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/bbcd4817-1c4b-4089-a712-346f65ec16f9"
  },
  "issued" : "2023-09-12T13:00:00+02:00",
  "performer" : [
    {
      "reference" : "Organization/a0330c62-fe29-4719-83fa-a94959084f29"
    },
    {
      "reference" : "PractitionerRole/4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf"
    }
  ],
  "result" : [
    {
      "reference" : "Observation/3fd3835d-1758-4d22-8547-000182752817"
    },
    {
      "reference" : "Observation/ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1"
    },
    {
      "reference" : "Observation/8917f29d-269c-4bb3-8ce9-d255c351d52b"
    },
    {
      "reference" : "Observation/6bf03841-8397-4a2a-9f9a-8966b0cfa571"
    },
    {
      "reference" : "Observation/85fd1372-cf02-49c6-bd45-7205f5541a66"
    },
    {
      "reference" : "Observation/f64a0a78-53cf-4a7f-9b89-4a2338a4935c"
    }
  ],
  "conclusion" : "Cancellation due to incorrect CPR-number"
}

```
