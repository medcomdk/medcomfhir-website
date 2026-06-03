# HomeCareDiagnosticReport: Urine dipsticks tests and refused consent - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HomeCareDiagnosticReport: Urine dipsticks tests and refused consent**

## Example DiagnosticReport: HomeCareDiagnosticReport: Urine dipsticks tests and refused consent

Profile: [MedComHomeCareObservationDiagnosticReport](StructureDefinition-medcom-homecareobservation-diagnosticreport.md)

Security Label: Restricted (Details: Confidentiality code R = 'Restricted')

## HomeCareDiagnosticReport 

| | |
| :--- | :--- |
| Subject | Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989) |
| Reported | 2023-09-12 12:24:08+0200 |
| Performers | [Organization Pleje og Rehabilitering](Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.md)[PractitionerRole Sygeplejerske](PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.md) |

**Report Details**

* **Code**: [U—Protein; arb.k.(proc.) = ?](Observation-4b8f899a-df12-4301-8287-9a77d46ded3d.md)
  * **Value**: 1 +
  * **Flags**: Final,Not Interpreted
  * **When For**: 2023-09-13 12:24:08+0200
* **Code**: [U—Nitrit; arb.k.(proc.) = ?](Observation-f58819ff-d727-4740-a4ef-44eefc77022e.md)
  * **Value**: Negative
  * **Flags**: Final,Not Interpreted
  * **When For**: 2023-09-13 12:24:08+0200
* **Code**: [U—Leukocytter; arb.k.(proc.) = ?](Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.md)
  * **Value**: 2 +
  * **Flags**: Final,Not Interpreted
  * **When For**: 2023-09-13 12:24:08+0200



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "6d08f000-33cc-41f3-a7c2-c086d53d31a7",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
    ],
    "security" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-Confidentiality",
        "code" : "R",
        "display" : "Restricted"
      }
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
    "reference" : "Patient/733cef33-3626-422b-955d-d506aaa65fe1"
  },
  "issued" : "2023-09-12T12:24:08+02:00",
  "performer" : [
    {
      "reference" : "Organization/72cc3a2c-1dda-4b95-b50a-0f7ac19640f4"
    },
    {
      "reference" : "PractitionerRole/4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf"
    }
  ],
  "result" : [
    {
      "reference" : "Observation/4b8f899a-df12-4301-8287-9a77d46ded3d"
    },
    {
      "reference" : "Observation/f58819ff-d727-4740-a4ef-44eefc77022e"
    },
    {
      "reference" : "Observation/2fc2c078-825b-491d-9f8e-34926eb4f06f"
    }
  ]
}

```
