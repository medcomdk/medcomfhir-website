# 1st message - The Provenance instance is only valid if used in a bundle (message) - new message - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1st message - The Provenance instance is only valid if used in a bundle (message) - new message**

## Example Provenance: 1st message - The Provenance instance is only valid if used in a bundle (message) - new message

Profile: [MedComCareCommunicationProvenance](StructureDefinition-medcom-careCommunication-provenance.md)

Provenance for [MessageHeader: event[x] = Care Communication Message (MedComMessagingEventCodes#care-communication-message); definition = http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0](MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2024-05-01 12:00:00+0200 |
| Recorded | 2024-05-01 12:00:00+0200 |
| Activity | A new message has been sent |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "af9b0255-1bdd-49c7-9d39-d652a587e4b2",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/42cb9200-f421-4d08-8391-7d51a2503cb4"
    }
  ],
  "occurredDateTime" : "2024-05-01T12:00:00+02:00",
  "recorded" : "2024-05-01T12:00:00+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "new-message"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/82210440-6826-44fc-9fc8-2a29bab6a5c2"
      }
    }
  ],
  "entity" : [
    {
      "role" : "source",
      "what" : {
        "identifier" : {
          "value" : "urn:uuid:24d01288-ad36-4af2-96a8-fd1432dadee1"
        }
      }
    }
  ]
}

```
