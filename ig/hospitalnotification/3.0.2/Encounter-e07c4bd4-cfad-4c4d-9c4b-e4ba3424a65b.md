# HospitalNotification Encounter - SLOR - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification Encounter - SLOR**

## Example Encounter: HospitalNotification Encounter - SLOR

Profile: [MedComHospitalNotificationEncounter](StructureDefinition-medcom-hospitalNotification-encounter.md)

**MedComHospitalNotificationLeavePeriodExtension**: 2022-12-13 14:00:10+0200 --> 2022-12-14 15:30:00+0200

**status**: In Progress

**class**: [ActCode: IMP](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-IMP) (inpatient encounter)

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-519d5170-81ca-11ed-a1eb-0242ac120002.md)

**episodeOfCare**: Identifier: `https://sor2.sum.dsdn.dk/#id=265161000016000`/bd481c38-a921-11ed-afa1-0242ac120002

**period**: 2022-12-07 12:00:00+0200 --> (ongoing)

**serviceProvider**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-5961ade8-81ca-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "e07c4bd4-cfad-4c4d-9c4b-e4ba3424a65b",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
    ]
  },
  "extension" : [
    {
      "url" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalnotifiation-leave-period-extension",
      "valuePeriod" : {
        "start" : "2022-12-13T14:00:10+02:00",
        "end" : "2022-12-14T15:30:00+02:00"
      }
    }
  ],
  "status" : "in-progress",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "IMP"
  },
  "subject" : {
    "reference" : "Patient/519d5170-81ca-11ed-a1eb-0242ac120002"
  },
  "episodeOfCare" : [
    {
      "identifier" : {
        "system" : "https://sor2.sum.dsdn.dk/#id=265161000016000",
        "value" : "bd481c38-a921-11ed-afa1-0242ac120002"
      }
    }
  ],
  "period" : {
    "start" : "2022-12-07T12:00:00+02:00"
  },
  "serviceProvider" : {
    "reference" : "Organization/5961ade8-81ca-11ed-a1eb-0242ac120002"
  }
}

```
