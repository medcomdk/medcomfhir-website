# HospitalNotification Encounter - STAA - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification Encounter - STAA**

## Example Encounter: HospitalNotification Encounter - STAA

Profile: [MedComHospitalNotificationEncounter](StructureDefinition-medcom-hospitalNotification-encounter.md)

**status**: In Progress

**class**: [ActCode: EMER](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-EMER) (emergency)

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-fdc1fc66-81d0-11ed-a1eb-0242ac120002.md)

**episodeOfCare**: Identifier: `https://sor2.sum.dsdn.dk/#id=265161000016000`/bd481c38-a921-11ed-afa1-0242ac120002

**period**: 2022-12-01 10:00:04+0200 --> (ongoing)

**serviceProvider**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-1f5882b4-81d1-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "h2cb16ce-af8c-46f3-be9e-89406ef3e7b5",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
    ]
  },
  "status" : "in-progress",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "EMER"
  },
  "subject" : {
    "reference" : "Patient/fdc1fc66-81d0-11ed-a1eb-0242ac120002"
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
    "start" : "2022-12-01T10:00:04+02:00"
  },
  "serviceProvider" : {
    "reference" : "Organization/1f5882b4-81d1-11ed-a1eb-0242ac120002"
  }
}

```
