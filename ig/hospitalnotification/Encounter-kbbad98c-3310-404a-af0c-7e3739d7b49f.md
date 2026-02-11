# HospitalNotification Encounter - SLHJ (acute ambulant) - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification Encounter - SLHJ (acute ambulant)**

## Example Encounter: HospitalNotification Encounter - SLHJ (acute ambulant)

Profile: [MedComHospitalNotificationEncounter](StructureDefinition-medcom-hospitalNotification-encounter.md)

**status**: Finished

**class**: [ActCode: EMER](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-EMER) (emergency)

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-6c16f41e-81d1-11ed-a1eb-0242ac120002.md)

**episodeOfCare**: Identifier: `https://sor2.sum.dsdn.dk/#id=265161000016000`/bd481c38-a921-11ed-afa1-0242ac120002

**period**: 2022-12-01 10:00:04+0200 --> 2022-12-02 22:00:09+0200

**serviceProvider**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-0465ec66-81d2-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "kbbad98c-3310-404a-af0c-7e3739d7b49f",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
    ]
  },
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "EMER"
  },
  "subject" : {
    "reference" : "Patient/6c16f41e-81d1-11ed-a1eb-0242ac120002"
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
    "start" : "2022-12-01T10:00:04+02:00",
    "end" : "2022-12-02T22:00:09+02:00"
  },
  "serviceProvider" : {
    "reference" : "Organization/0465ec66-81d2-11ed-a1eb-0242ac120002"
  }
}

```
