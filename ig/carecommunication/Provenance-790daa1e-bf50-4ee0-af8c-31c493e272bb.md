# CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message**

## Example Provenance: CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message

Profile: [MedComCareCommunicationProvenance](StructureDefinition-medcom-careCommunication-provenance.md)

Provenance for [MessageHeader: event[x] = Care Communication Message (MedComMessagingEventCodes#care-communication-message); definition = http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0](MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2024-05-01 12:00:00+0200 |
| Recorded | 2024-05-01 12:00:00+0200 |
| Activity | A new message has been sent |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "790daa1e-bf50-4ee0-af8c-31c493e272bb",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/375293b8-2f91-4d08-b13a-83ea76b6d001"
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
        "reference" : "Organization/c39b114b-a9c1-46bb-ac30-e3ce71f28c3a"
      }
    }
  ],
  "entity" : [
    {
      "role" : "source",
      "what" : {
        "identifier" : {
          "value" : "urn:uuid:f9cf2547-7a1c-4639-9fd3-9f717556ad36"
        }
      }
    },
    {
      "role" : "source",
      "what" : {
        "identifier" : {
          "value" : "urn:uuid:a4f712ee-faea-48d9-9108-27aeb639e5a0"
        }
      }
    },
    {
      "role" : "source",
      "what" : {
        "identifier" : {
          "value" : "urn:uuid:eed10baa-5280-4d05-904b-3ce180a91568"
        }
      }
    }
  ]
}

```
