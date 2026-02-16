# Artifacts Summary - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComCareCommunication](StructureDefinition-medcom-careCommunication-communication.md) | Care related communication between two or more parties in Danish healthcare |
| [MedComCareCommunicationMessage](StructureDefinition-medcom-careCommunication-message.md) | The CareCommunication is used to ensure secure electronic communication of personally identifiable information and is most often used for ad hoc communication between parties in Danish Healthcare. However, the CareCommunication shall only be used in areas where no other MedCom standard is available, and it must not be used for cases with an acute nature. |
| [MedComCareCommunicationMessageHeader](StructureDefinition-medcom-careCommunication-messageHeader.md) | Message header for CareCommunication message |
| [MedComCareCommunicationProvenance](StructureDefinition-medcom-careCommunication-provenance.md) | Provenance information about the current and preceeding message. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [1st message - Bruno Test Elmer](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md) | 1st message - Patient described with minimal information. Valid only if used in a Bundle. |
| [1st message - Example of a reciever organization with a SOR and an EAN identifier.](Organization-487ac745-fd11-4879-9b59-c08c7d47260e.md) | 1st message - Example of an organization with a SOR and an EAN identifier. |
| [1st message - Example of a sender organization with a SOR and an EAN identifier.](Organization-b581c63c-181f-46f6-990d-b9942c576724.md) | 1st message - Example of an organization with a SOR and an EAN identifier. |
| [1st message - Instance of Communication resource used in a new message.](Communication-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.md) | 1st message - Content of care communication message. Valid only if used in a bundle (message) - new message |
| [1st message - Instance of a MessageHeader resource used in a new message.](MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.md) | 1st message - Example of a MessageHeader in a new CareCommunication message. Valid only if used in a bundle (message). |
| [1st message - New CareCommunication message.](Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.md) | 1st message - Example of a CareCommunication new message. |
| [1st message - The Provenance instance is only valid if used in a bundle (message) - new message](Provenance-af9b0255-1bdd-49c7-9d39-d652a587e4b2.md) | 1st message - The Provenance instance is only valid if used in a bundle (message) - new message |
| [2nd message - Instance of Communication resource used in a reply message.](Communication-4c712bdc-1558-4125-a854-fa8b3a11f6ed.md) | 2nd message - Content of care communication message. Valid only if used in a bundle (message) - reply message |
| [2nd message - Instance of a MessageHeader resource used in a reply message.](MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.md) | 2nd message - Example of a MessageHeader in a reply CareCommunication message. Valid only if used in a bundle (message). |
| [2nd message - Reply CareCommunication message](Bundle-b56549f7-ed10-422d-8088-f7222b686e46.md) | 2nd message - Example of a reply to a CareCommunication message. |
| [2nd message - The Provenance instance is only valid if used in a bundle (message) - reply to new message](Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.md) | 2nd message - The Provenance instance is only valid if used in a bundle (message) - reply to new message |
| [3rd message - Bruno Test Elmer](Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.md) | 3rd message - Patient described with minimal information. Valid only if used in a Bundle. |
| [3rd message - Example of a reciever organization with a SOR and an EAN identifier.](Organization-f20f31cd-5dd2-4a80-ab00-97f7109864a7.md) | 3rd message - Example of an organization with a SOR and an EAN identifier. |
| [3rd message - Example of a sender organization with a SOR and an EAN identifier.](Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.md) | 3rd message - Example of an organization with a SOR and an EAN identifier. |
| [3rd message - Instance of Communication resource used in a reply message.](Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.md) | 3rd message - Content of care communication message. Valid only if used in a bundle (message) - reply message |
| [3rd message - Instance of a MessageHeader resource used in a reply message.](MessageHeader-4dff3695-218d-4878-838a-5f23cbba6f82.md) | 3rd message - Example of a MessageHeader in a reply CareCommunication message. Valid only if used in a bundle (message). |
| [3rd message - Reply CareCommunication message](Bundle-3dcb5618-3055-406a-9034-1b8fc8de0fea.md) | 3rd message - Example of a reply to a CareCommunication message. |
| [3rd message - The Provenance instance is only valid if used in a bundle (message) - new message being forwarded](Provenance-73232102-649c-4c63-88f5-94ce189b94a7.md) | 3rd message - The Provenance instance is only valid if used in a bundle (message) - new message being forwarded |
| [4th message - Forward CareCommunication message](Bundle-c0426e3e-978f-46e8-a366-a30f27854b0a.md) | 4th message - Example of a forward CareCommunication message. |
| [4th message - Instance of Communication resource used in a forward message.](Communication-5485bde0-8246-4f46-b1a1-1f14e0a7a856.md) | 4th message - Content of care communication message. Valid only if used in a bundle (message) - forward message |
| [4th message - Instance of a MessageHeader resource used in a forward message.](MessageHeader-aac67161-d0de-4933-a78c-060beafb4814.md) | 4th message - Example of a MessageHeader in a forward CareCommunication message. Valid only if used in a bundle (message). |
| [4th message - The Provenance instance is only valid if used in a bundle (message) - new message being forwarded](Provenance-5c689ef2-c6d7-4c74-adb8-303b772532e2.md) | 4th message - The Provenance instance is only valid if used in a bundle (message) - new message being forwarded |
| [5th message - Instance of Communication resource used in a reply message.](Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.md) | 5th message - Content of CareCommunication message. Valid only if used in a bundle (message) - reply message |
| [5th message - Instance of a MessageHeader resource used in a reply message.](MessageHeader-2654e182-cfee-4537-b744-e36231ebe2f3.md) | 5th message - Example of a MessageHeader in a reply CareCommunication message. Valid only if used in a bundle (message). |
| [5th message - Reply CareCommunication message](Bundle-d11968f5-4bdf-4b50-b146-a8e1cc890fc3.md) | 5th message - Example of a reply CareCommunication message. |
| [Bruno Test Elmer](Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-50c51ef0-00b0-429a-b212-35ee0773fd5a.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-79fc4a5c-5fca-4389-8740-89607ce07f2d.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-833cef33-3726-433b-855d-e566aaa65fe1.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-b8e3000b-3b95-43e2-8e5b-fc347d0a2411.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-e0c57a9f-9b04-43b4-9355-76f3564a1f10.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-e8dd504e-551f-11ed-bdc3-0242ac120002.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message](Provenance-790daa1e-bf50-4ee0-af8c-31c493e272bb.md) | CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message |
| [CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - reply to OIOXML-message](Provenance-6de0806d-7050-4db8-8003-0c72aee52948.md) | CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - reply to OIOXML-message |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-0e0e7f78-5520-11ed-bdc3-0242ac120002.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-33153a8a-97c8-4f55-b7ad-bbedee8bd0e1.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-4e03a9cd-4d75-4e01-9420-7f0b4ecff305.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-ae899cbd-933b-4581-9a16-bd2da73f06a0.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-b2f762be-6994-44da-a214-72c765655b3e.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-b75abdfa-5519-11ed-bdc3-0242ac120002.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-bf24f51c-a99b-47db-a785-8c5ef22ebc27.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a reciever organization with a SOR and an EAN identifier.](Organization-f98ed410-54fe-11ed-bdc3-0242ac120002.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a recipient in terms of a careteam.](CareTeam-fb1d34fe-6672-11ed-9022-0242ac120002.md) | Example of a recipient in terms of a careteam. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-85669d18-2bb3-4c6e-80d2-e039a63a521c.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-c5c393ee-5519-11ed-bdc3-0242ac120002.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-e17d03b8-e7fd-4654-bc9c-cb2eb5dda71f.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-fae4c8cf-e5d6-404d-867d-97ffa49a1c58.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR and an EAN identifier.](Organization-fd0666dc-551f-11ed-bdc3-0242ac120002.md) | Example of an organization with a SOR and an EAN identifier. |
| [Instance of Communication resource used in a new message.](Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.md) | Content of care communication message. Valid only if used in a bundle (message) - new message |
| [Instance of Communication resource used in a new message. The message includes a journal note and author information in the messagetext.](Communication-c34e8284-b353-468f-a2ea-f6ef6330292c.md) | Content of care communication message. Valid only if used in a bundle (message) - new message with attachment |
| [Instance of Communication resource used in a reply message. A reply to an OIOXML message](Communication-f54efd18-5520-11ed-bdc3-0242ac120002.md) | Content of care communication message. Valid only if used in a bundle (message). |
| [Instance of a MessageHeader resource used in a new message with journal note in message text.](MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.md) | Example of a MessageHeader in a new CareCommunication message. Valid only if used in a bundle (message). |
| [Instance of a MessageHeader resource used in a new message.](MessageHeader-025bdfdd-397b-43e2-9e8c-272664a6e471.md) | Example of a MessageHeader in a new CareCommunication message. Valid only if used in a bundle (message). |
| [Instance of a MessageHeader resource used in a reply to an OIOXML message.](MessageHeader-3076d9b0-5521-11ed-bdc3-0242ac120002.md) | MessageHeader for CareCommunication reply to an OIOXML message. Valid only if used in a bundle (message). |
| [MedCom Core Encounter](Encounter-2a5b01e4-8c2c-481b-ab12-e383d8e00629.md) | Example of a simple MedCom Core Encounter |
| [MedCom Core Encounter](Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.md) | Example of a simple MedCom Core Encounter |
| [New CareCommunication message.](Bundle-0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c.md) | Example of a CareCommunication new message. |
| [New CareCommunication message. Including journal note in the message text.](Bundle-gfd00bc2-9c26-4174-934e-f6e4360845de.md) | Example of a CareCommunication new message with journal note in the message text. |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-2b80d2b8-5520-11ed-bdc3-0242ac120002.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-2e8c8e54-388c-4547-954c-1917652986da.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-35bb99e4-551a-11ed-bdc3-0242ac120002.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-3b1f7d8c-540e-474c-b079-89284c2de621.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-7cae09e0-5501-11ed-bdc3-0242ac120002.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-7f3c3dbb-1b40-41f7-8acc-fb82eb3d4dd3.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-8adda490-63ef-4d97-86f0-14553628e53a.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-8bf63050-5504-11ed-bdc3-0242ac120002.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-ac1dfd45-a135-47b8-acd7-db0405e21dd0.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-e0aca758-487a-4536-b750-35753cbef090.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-eda90bde-54f9-11ed-bdc3-0242ac120002.md) | PractitionerRole with a role and reference to a practitioner |
| [Producer of FHIR resources](ActorDefinition-ProducerActor.md) | The system that creates the FHIR resources |
| [Reply CareCommunication message. Reply to OIOXML Message](Bundle-k7bfbc0c-553d-11ed-bdc3-0242ac120002.md) | Example of a reply to an OIOXML message. |
| [Simple practitioner with a name](Practitioner-1e2d6388-5520-11ed-bdc3-0242ac120002.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-20eac382-551a-11ed-bdc3-0242ac120002.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-5d37f9e1-2beb-4528-81bf-d521d108c738.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-7ffff970-5504-11ed-bdc3-0242ac120002.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-97511212-12e6-4182-a42b-cf232c0c117c.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-ad055a3d-16b6-41f9-891a-7dd73eecaf03.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df.md) | Simple practitioner with a name |
| [Simple practitioner with a name](Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.md) | Simple practitioner with a name |

