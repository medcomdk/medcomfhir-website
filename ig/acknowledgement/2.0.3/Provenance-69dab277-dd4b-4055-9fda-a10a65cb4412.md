# Provenance information for an Acknowledgement message - CareCommunication. Valid only if used in a bundle (message) - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Provenance information for an Acknowledgement message - CareCommunication. Valid only if used in a bundle (message)**

## Example Provenance: Provenance information for an Acknowledgement message - CareCommunication. Valid only if used in a bundle (message)

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Acknowledgement Message (MedComMessagingEventCodes#acknowledgement-message)](MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-09-01 12:01:20+0200 |
| Recorded | 2022-09-01 12:01:20+0000 |
| Activity | Acknowledgement message has been sent |

**Agents**

* **who**: [Organization Receiver Organization](Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "69dab277-dd4b-4055-9fda-a10a65cb4412",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/aba2d9bf-2c6c-47e8-bce4-7928bcd51019"
    }
  ],
  "occurredDateTime" : "2022-09-01T12:01:20+02:00",
  "recorded" : "2022-09-01T12:01:20Z",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "acknowledgement"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/74cdf292-abf3-4f5f-80ea-60a48013ff6d"
      }
    }
  ],
  "entity" : [
    {
      "role" : "revision",
      "what" : {
        "reference" : "MessageHeader/42cb9200-f421-4d08-8391-7d51a2503cb4"
      }
    }
  ]
}

```
