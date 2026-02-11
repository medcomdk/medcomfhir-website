# HospitalNotification Encounter - SLHJ (inpatient) - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification Encounter - SLHJ (inpatient)**

## Example Encounter: HospitalNotification Encounter - SLHJ (inpatient)

Profile: [MedComHospitalNotificationEncounter](StructureDefinition-medcom-hospitalNotification-encounter.md)

**status**: Finished

**class**: [ActCode: IMP](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-IMP) (inpatient encounter)

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-6841b54e-81cd-11ed-a1eb-0242ac120002.md)

**episodeOfCare**: Identifier: `https://sor2.sum.dsdn.dk/#id=265161000016000`/bd481c38-a921-11ed-afa1-0242ac120002

**period**: 2022-12-07 12:00:00+0200 --> 2022-12-18 09:45:30+0200

**serviceProvider**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-8d813af0-81cd-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "f405ba2d-467a-4e92-9acc-9dc2a629760f",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
    ]
  },
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "IMP"
  },
  "subject" : {
    "reference" : "Patient/6841b54e-81cd-11ed-a1eb-0242ac120002"
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
    "start" : "2022-12-07T12:00:00+02:00",
    "end" : "2022-12-18T09:45:30+02:00"
  },
  "serviceProvider" : {
    "reference" : "Organization/8d813af0-81cd-11ed-a1eb-0242ac120002"
  }
}

```
