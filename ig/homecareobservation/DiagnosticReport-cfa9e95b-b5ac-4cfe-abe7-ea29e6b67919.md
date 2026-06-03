# Modified HomeCareDiagnosticReport:TOBS and ABC examination - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modified HomeCareDiagnosticReport:TOBS and ABC examination**

## Example DiagnosticReport: Modified HomeCareDiagnosticReport:TOBS and ABC examination

Profile: [MedComHomeCareObservationDiagnosticReport](StructureDefinition-medcom-homecareobservation-diagnosticreport.md)

## HomeCareDiagnosticReport 

| | |
| :--- | :--- |
| Subject | Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989) |
| Reported | 2023-09-12 12:34:00+0200 |
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

ABCDE SeFølLyt-Princippet A. RF 19 - påskyndet men regelmæssig, fri respiration. SAT 93% B. Puls 92 palperet på venstre håndled. Fyldig regelmæssig. Fin kapilærrespons C. BT 147/83 - klamtsvedende. Kolde ekstremiteter. D. Reagerer habituelt. Pupilreaktion i.a. VAS 7. Bl.s. 6,8 E. Temperatur 38,7 Målt rektalt Patienten har nægtet at spise og drikke i løbet af dagen.



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919",
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
  "issued" : "2023-09-12T12:34:00+02:00",
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
  "conclusion" : "ABCDE\nSeFølLyt-Princippet\nA.\tRF 19 - påskyndet men regelmæssig, fri respiration. SAT 93%\nB.\tPuls 92 palperet på venstre håndled. Fyldig regelmæssig. Fin kapilærrespons\nC.\tBT 147/83 - klamtsvedende. Kolde ekstremiteter. \nD.\tReagerer habituelt. Pupilreaktion i.a. VAS 7. Bl.s. 6,8\nE.\tTemperatur 38,7 Målt rektalt\n\n\nPatienten har nægtet at spise og drikke i løbet af dagen."
}

```
