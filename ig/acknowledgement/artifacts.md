# Artifacts Summary - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComAcknowledgementMessage](StructureDefinition-medcom-messaging-acknowledgement.md) | Base resource for all MedCom Acknowledgement messages. |
| [MedComAcknowledgementMessageHeader](StructureDefinition-medcom-messaging-acknowledgementHeader.md) | A resource that describes a reponse to a message that is exchanged as a MedCom messgage within Danish healthcare |
| [MedComAcknowledgementOperationOutcome](StructureDefinition-medcom-acknowledgement-operationoutcome.md) | This profile provides detailed information about the outcome of an attempted system operation, such as delivering a message. It shall only be used when the attempt fails. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Acknowledgement MessageHeader - ok message](MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.md) | Acknowledgement MessageHeader - ok message. Valid only if used in a Bundle (message). |
| [Acknowledgement MessageHeader - fatal-error message](MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.md) | Acknowledgement MessageHeader - fatal-error message. Valid only if used in a Bundle (message). |
| [Acknowledgement MessageHeader - transient-error message](MessageHeader-c9a0b728-0807-11ed-861d-0242ac120002.md) | Acknowledgement MessageHeader - transient-error message. Valid only if used in a Bundle (message). |
| [Bruno Test Elmer](Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message](Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.md) | CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message |
| [Example Acknowledgement message - Fatal error](Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.md) | Example Acknowledgement message - Fatal error |
| [Example Acknowledgement message - Ok](Bundle-a8c041b8-c65a-4fde-a90f-962076918834.md) | Example Acknowledgement message - Ok |
| [Example Acknowledgement message - Transient error](Bundle-c9c2b2f6-0807-11ed-861d-0242ac120002.md) | Example Acknowledgement message - Transient error |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-d7056980-a8b2-42aa-8a0e-c1fc85d1f40d.md) | Example of an organization with a SOR and an EAN identifier. |
| [MedComAcknowledgementOperationOutcome - Severity is 'error'](OperationOutcome-becb2a8e-3a68-4083-910e-811296affd43.md) | Example of an error operationOutcome. Valid only if used in a Bundle (message). |
| [MedComAcknowledgementOperationOutcome - Severity is 'error'](OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.md) | Example of an error operationOutcome. Valid only if used in a Bundle (message). |
| [MedComAcknowledgementOperationOutcome - Severity is 'information'](OperationOutcome-a87bc9d4-f876-4b6f-8585-40b26dc1e369.md) | Example of an error operationOutcome. Valid only if used in a Bundle (message). |
| [Message Header for an empty message. Valid only if used in a bundle (message)](MessageHeader-3881874e-2042-4a00-aee8-23512799f512.md) | Message Header for an empty message. Valid only if used in a bundle (message). |
| [Message header for care communication message. Valid only if used in a bundle (message).](MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.md) | Message header for care communication message. Valid only if used in a bundle (message). |
| [Provenance information for an Acknowledgement message - CareCommunication. Valid only if used in a bundle (message)](Provenance-69dab277-dd4b-4055-9fda-a10a65cb4412.md) | Provenance information for an Acknowledgementmessage - CareCommunication. Valid only if used in a bundle (message). |
| [Provenance information for an Acknowledgement message - CareCommunication. Valid only if used in a bundle (message)](Provenance-9b56aa88-9745-12ec-b919-0242ac122002.md) | Provenance information for an Acknowledgementmessage - CareCommunication. Valid only if used in a bundle (message). |
| [Provenance information for an Acknowledgement message - CareCommunication. Valid only if used in a bundle (message)](Provenance-9c56ba88-9645-11ec-b909-0242ac120002.md) | Provenance information for an Acknowledgementmessage - CareCommunication. Valid only if used in a bundle (message). |
| [eb26be85-fdb7-454d-a980-95cba6d1745b](Bundle-eb26be85-fdb7-454d-a980-95cba6d1745b.md) | Example of an emty message. |

