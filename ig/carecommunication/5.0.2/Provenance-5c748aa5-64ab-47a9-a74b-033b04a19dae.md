# 2nd message - The Provenance instance is only valid if used in a bundle (message) - reply to new message - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2nd message - The Provenance instance is only valid if used in a bundle (message) - reply to new message**

## Example Provenance: 2nd message - The Provenance instance is only valid if used in a bundle (message) - reply to new message

Profile: [MedComCareCommunicationProvenance](StructureDefinition-medcom-careCommunication-provenance.md)

Provenance for [MessageHeader: event[x] = Care Communication Message (MedComMessagingEventCodes#care-communication-message); definition = http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0](MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2024-05-02 11:30:00+0200 |
| Recorded | 2024-05-02 11:30:00+0200 |
| Activity | A message has been replied to |

**Agents**

* **who**: [Organization Plejecenter Herlev](Organization-f20f31cd-5dd2-4a80-ab00-97f7109864a7.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "5c748aa5-64ab-47a9-a74b-033b04a19dae",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/d5bd2111-2576-48d3-84d4-8be0297a038d"
    }
  ],
  "occurredDateTime" : "2024-05-02T11:30:00+02:00",
  "recorded" : "2024-05-02T11:30:00+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "reply-message"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/f20f31cd-5dd2-4a80-ab00-97f7109864a7"
      }
    }
  ],
  "entity" : [
    {
      "role" : "source",
      "what" : {
        "identifier" : {
          "value" : "urn:uuid:cd422e42-5bad-11ed-9b6a-0242ac120002"
        }
      }
    },
    {
      "role" : "revision",
      "what" : {
        "reference" : "MessageHeader/42cb9200-f421-4d08-8391-7d51a2503cb4"
      }
    },
    {
      "role" : "source",
      "what" : {
        "identifier" : {
          "value" : "urn:uuid:a9becf76-fc4c-49aa-8a68-6a0584871fcd"
        }
      }
    }
  ]
}

```
