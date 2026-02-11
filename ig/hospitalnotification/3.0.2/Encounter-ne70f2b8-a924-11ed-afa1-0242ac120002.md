# HospitalNotification Encounter - STIN (two episodeOfCare-identifiers) - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification Encounter - STIN (two episodeOfCare-identifiers)**

## Example Encounter: HospitalNotification Encounter - STIN (two episodeOfCare-identifiers)

Profile: [MedComHospitalNotificationEncounter](StructureDefinition-medcom-hospitalNotification-encounter.md)

**status**: In Progress

**class**: [ActCode: IMP](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-IMP) (inpatient encounter)

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-545fd5e6-a924-11ed-afa1-0242ac120002.md)

**episodeOfCare**: 

* Identifier: `https://www.esundhed.dk/Registre/Landspatientregisteret`/urn:uuid:fc60e762-b13b-5773-865e-67f3907bdcc7
* Identifier: `https://sor2.sum.dsdn.dk/#id=265161000016000`/urn:uuid:bd481c38-a921-11ed-afa1-0242ac120002

**period**: 2022-12-07 12:00:00+0200 --> (ongoing)

**serviceProvider**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-2565d3de-082e-4368-9160-4c719071026b.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "ne70f2b8-a924-11ed-afa1-0242ac120002",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
    ]
  },
  "status" : "in-progress",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "IMP"
  },
  "subject" : {
    "reference" : "Patient/545fd5e6-a924-11ed-afa1-0242ac120002"
  },
  "episodeOfCare" : [
    {
      "identifier" : {
        "system" : "https://www.esundhed.dk/Registre/Landspatientregisteret",
        "value" : "urn:uuid:fc60e762-b13b-5773-865e-67f3907bdcc7"
      }
    },
    {
      "identifier" : {
        "system" : "https://sor2.sum.dsdn.dk/#id=265161000016000",
        "value" : "urn:uuid:bd481c38-a921-11ed-afa1-0242ac120002"
      }
    }
  ],
  "period" : {
    "start" : "2022-12-07T12:00:00+02:00"
  },
  "serviceProvider" : {
    "reference" : "Organization/2565d3de-082e-4368-9160-4c719071026b"
  }
}

```
