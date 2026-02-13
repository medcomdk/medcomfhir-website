# Artifacts Summary - DK MedCom Messaging v4.0.2

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComCoreProducerOrganization](StructureDefinition-medcom-producer-organization.md) | This profile is intended to be used to represent the producer of the observations. |
| [MedComMessagingMessage](StructureDefinition-medcom-messaging-message.md) | Base resource for all MedCom messages. |
| [MedComMessagingMessageHeader](StructureDefinition-medcom-messaging-messageHeader.md) | MessageHeader for MedCom messages |
| [MedComMessagingOrganization](StructureDefinition-medcom-messaging-organization.md) | A formally recognized organizations registered for exchanging messages within Danish healthcare, registered with a SOR identifier issued by The Danish Health Data Authority |
| [MedComMessagingProvenance](StructureDefinition-medcom-messaging-provenance.md) | Provenance information about the messages preceeding the current message |
| [MedComMessagingRequesterOrganization](StructureDefinition-medcom-requesterorganization.md) | This profile is intended to be used to represent the requester organization of the observations. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComDestinationUseExtension](StructureDefinition-medcom-messaging-destinationUseExtension.md) | Indicates whether the use of a destination in a MedCom message header is as a primary or a carbon copy recipient of the message |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Aros Burn Center](Organization-12ee0dde-a672-462f-820d-5efe832d73c9.md) | A core organization with a SOR identifier. |
| [Bundle used in an empty message.](Bundle-eb26be85-fdb7-454d-a980-95cba6d1745b.md) | Example of an empty message. |
| [Eric Flame](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md) | Patient with a managing organization. Valid only if used in a bundle (message). |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a reciever organization with a SOR, an EAN and Ydrenummer identifier.](Organization-42541447-b58c-4a1a-9514-02b80494bbd3.md) | Example of an organization with a SOR and an EAN and Ydrenummer identifier. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-d7056980-a8b2-42aa-8a0e-c1fc85d1f40d.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR, an EAN identifier, and ProdcentID](Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a service provider organization with a SOR and an EAN identifier.](Organization-bf839e87-4e44-4977-b38e-92b5a6f187b5.md) | Example of an organization with a SOR and an EAN identifier. |
| [MedComMessagingProvenance example. The Provenance instance is only valid if used in a bundle (message) - new message](Provenance-9c284936-5454-4116-95fc-3c8eeeed2400.md) | MedComMessagingProvenance example. The Provenance instance is only valid if used in a bundle (message) - new message |
| [MessageHeader for a Acknowledgement message. Valid only if used in a bundle (message)](MessageHeader-d28b9cb4-8feb-11ec-b909-0242ac120002.md) | MessageHeader for a Acknowledgement message. Valid only if used in a bundle (message). NB: An Acknowledgement message shall use an AcknowledgementMessageHeader, as some elements and invariants are missing. |
| [MessageHeader for a CareCommunication message. Valid only if used in a bundle (message)](MessageHeader-42c01434-8feb-11ec-b909-0242ac120002.md) | MessageHeader for a CareCommunication message. Valid only if used in a bundle (message). NB: A CareCommunication message shall use a CareCommunicationMessageHeader, as some elements and invariants are missing. |
| [MessageHeader for a HospitalNotification message. Valid only if used in a bundle (message)](MessageHeader-cb0b2ef0-8feb-11ec-b909-0242ac120002.md) | MessageHeader for a HospitalNotification message. Valid only if used in a bundle (message). NB: A HospitalNotification message shall use a HospitalNotificationMessageHeader, as some elements and invariants are missing. |
| [MessageHeader for an empty message. Valid only if used in a bundle (message)](MessageHeader-3881874e-2042-4a00-aee8-23512799f512.md) | MessageHeader for an empty message. Valid only if used in a bundle (message). |
| [Producer of FHIR resources](ActorDefinition-ProducerActor.md) | The system that creates the FHIR resources |
| [Simple practitioner with a name](Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.md) | Simple practitioner with a name |

