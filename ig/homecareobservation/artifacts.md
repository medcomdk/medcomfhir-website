# Artifacts Summary - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md) | This profile is intended to be used in HomeCareObservation to hold information about the observation results. |
| [MedComHomeCareObservationDiagnosticReport](StructureDefinition-medcom-homecareobservation-diagnosticreport.md) | This resource is intended to be used in relation with a HomeCareObservation message |
| [MedComHomeCareObservationMessage](StructureDefinition-medcom-homecareobservation-message.md) | The HomeCareObservation Message is used in exchange of the observations results performed by the municipal acute care team to the general practitioner. |
| [MedComHomeCareObservationMessageHeader](StructureDefinition-medcom-homecareobservation-messageheader.md) | MessageHeader for HomeCareObservation |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Acute nurse](Practitioner-70f14d25-0979-4192-8da2-0c0a3950f4b1.md) | Acute nurse |
| [Acute nurse](Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.md) | Acute nurse |
| [Acute nurse](Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.md) | Acute nurse |
| [Basofilocyt observation](Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.md) | Basofilocyt observation performed on a subject by the acute care team |
| [Bruno Test Elmer](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-99f5578f-c9d3-4d8c-aa3e-21690e03e27c.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [C-reaktive protein [CRP];P](Observation-7fcb76a7-839b-4392-a2ff-f30035faca34.md) | C-reaktive protein [CRP] test performed by acute care team on the subject. |
| [Cancelled HomeCareDiagnosticReport: TOBS and ABC examination](DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.md) | Example of a cancelled HomeCareDiagnosticReport, with TOBS and ABC examination of Elmer |
| [Coagulation factor test](Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.md) | Coagulation factor on the subject |
| [Consciousness](Observation-6bf03841-8397-4a2a-9f9a-8966b0cfa571.md) | Consciousness of Elmer |
| [Eosinofilocyt observation](Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.md) | Eosinofilocyt observation performed on a subject by the acute care team |
| [Example of a reciever organization with a SOR, an EAN and Ydrenummer identifier.](Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.md) | Example of an organization with a SOR and an EAN and Ydrenummer identifier. |
| [Example of a reciever organization with a SOR, an EAN and Ydrenummer identifier.](Organization-42541447-b58c-4a1a-9514-02b80494bbd3.md) | Example of an organization with a SOR and an EAN and Ydrenummer identifier. |
| [Example of a reciever organization with a SOR, an EAN and Ydrenummer identifier.](Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.md) | Example of an organization with a SOR and an EAN and Ydrenummer identifier. |
| [Example of a sender organization with a SOR, an EAN identifier, and ProdcentID](Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.md) | Example of an organization with a SOR and an EAN identifier. |
| [Example of a sender organization with a SOR, and an EAN identifier and producentID.](Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.md) | Example of an organization with a SOR, an EAN identifier and ProducentID. |
| [Example of a sender organization with a SOR, and an EAN identifier and producentID.](Organization-a0330c62-fe29-4719-83fa-a94959084f29.md) | Example of an organization with a SOR, an EAN identifier and ProducentID. |
| [Glucose measurement](Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.md) | Glucose measurement on the subject. |
| [Heart Rate](Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.md) | HeartRate of Elmer |
| [HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - cancelled message](Provenance-babb316c-796c-4d10-b97b-45274b5a0c44.md) | HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - cancelled message |
| [HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - modified message](Provenance-8ce47645-4d69-4fa6-a51d-c2bb49d87efb.md) | HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - modified message |
| [HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message](Provenance-008e1c02-605d-458e-8cb8-3eeb16a69aac.md) | HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message |
| [HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message](Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.md) | HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message |
| [HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message](Provenance-4c845e97-04b2-40e9-ab51-4c5bf080196f.md) | HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message |
| [HomeCareDiagnosticReport: Urine dipsticks tests and refused consent](DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.md) | Urine dipstick tests performed by the acute care team on a subject, that has refused consent. |
| [HomeCareDiagnosticReport: spot test and EKG](DiagnosticReport-870333ac-3134-4ae6-8257-86e0b0537c5f.md) | Spot test and EKG performed by the acute care team on a subject. |
| [HomeCareDiagnosticReport:TOBS and ABC examination](DiagnosticReport-efb1ed12-6a5d-4342-9572-861071644e46.md) | TOBS and ABC examination of Elmer |
| [HomeCareObservation message-Spot test and EKG image](Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.md) | Example of a HomeCareObservation message-Spot Test and EKG image. |
| [HomeCareObservation message-Urine dipsticks and subject refused consent.](Bundle-faa0c104-0ebf-49cb-bad1-9e0f59436e18.md) | Example of a HomeCareObservation message-Urine dipsticks and subject refused consent. |
| [HomeCareObservation message-retracted.](Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.md) | Example of a retracted HomeCareObservation with clinical and analysis comment. |
| [HomeCareObservation with clinical and analysis comment.](Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.md) | Example of a HomeCareObservation with clinical and analysis comment. |
| [Instance of a MessageHeader resource used in a cancelled message.](MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.md) | Example of a MessageHeader in a cancelled HomeCareDiagnosticReport message. Valid only if used in a bundle (message). |
| [Instance of a MessageHeader resource used in a modified message message.](MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.md) | Example of a MessageHeader in a modified HomeCareDiagnosticReport message. Valid only if used in a bundle (message). |
| [Instance of a MessageHeader resource used in a new Homecare Observation message.](MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.md) | Example of a MessageHeader in a new HomeCareDiagnosticReport message. Valid only if used in a bundle (message). |
| [Instance of a MessageHeader resource used in a new message.](MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.md) | Example of a MessageHeader in a new HomeCareDiagnosticReport message. Valid only if used in a bundle (message). |
| [Instance of a MessageHeader resource used in a new message.](MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.md) | Example of a MessageHeader in a new HomeCareDiagnosticReport message. Valid only if used in a bundle (message). |
| [Leukocyt Observation](Observation-1b089a05-0a5f-479d-9cbd-921a13470221.md) | Test of leucocyte on the subject by acute care team |
| [Leukocyt urine test](Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.md) | Test of leucocyt using urine dipstick |
| [Lymphocyte observation](Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.md) | Lymphocyte observation on the subject by acute care team |
| [Modified HomeCareDiagnosticReport:TOBS and ABC examination](DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.md) | Example of a modified HomeCareDiagnosticReport with TOBS and ABC examination of Elmer |
| [Modified HomeCareObservation message.](Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.md) | Example of a Modified HomeCareObservation with clinical and analysis comment. |
| [Monocytes observation](Observation-d2b89faa-979a-430d-8887-21ccdf6f238b.md) | Monocytes observation performed on a subject by the acute care team |
| [Neutrophilocytes observation](Observation-f84143f7-f586-477f-af56-e50c7d152605.md) | Neutrophilocytes observation performed on o subject by the acute care team |
| [Nitrite observation](Observation-f58819ff-d727-4740-a4ef-44eefc77022e.md) | Nitrit observation on Bruno |
| [Normal EKG](Media-cb277ee2-5d96-4762-829d-d36449b2b17f.md) | An example of an EKG that can be sendt with an diagnostic repport |
| [Observation of the haemoglobin](Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.md) | Observation of the haemoglobin |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-6ff69f1c-690d-11ed-9022-0242ac120002.md) | PractitionerRole with a role and reference to a practitioner |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-80284c01-1674-45ca-98b7-d1e669bdeff6.md) | PractitionerRole with a role and reference to a practitioner |
| [ReceiveTestExample1](Bundle-ReceiveTestExample1.md) | Test Example 1 used in HomeCareObservation receive test protocol. Two observations without clinical or analysis comments and the requesting doctor's initials are known. |
| [ReceiveTestExample2](Bundle-ReceiveTestExample2.md) | Test Example 2 used in HomeCareObservation receive test protocol. With a clinical comment and requesting doctor's initials are unknown. Two observations: One with an analysis comment + an NPU code and the other without an analysis comment and a result using the MedComObservation valueset. Both observations use a comparator ('<' or '>') |
| [ReceiveTestExample3](Bundle-ReceiveTestExample3.md) | Test Example 3 used in the HomeCareObservation receive test protocol. E-cpr and no comments. |
| [ReceiveTestExample4](Bundle-ReceiveTestExample4.md) | Test Example 4 used in the HomeCareObservation receive test protocol. Many observations |
| [ReceiveTestExample5](Bundle-ReceiveTestExample5.md) | Test Example 5 used in HomeCareObservation receive test protocol. This is an invalid example with a practitioner role that does not have a code and no value for a observation result |
| [Respiration frequency](Observation-3fd3835d-1758-4d22-8547-000182752817.md) | Respiration frequency of Elmer |
| [Systolic Blood Pressure](Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.md) | Systolic Blood Pressure of Elmer |
| [TOBS](Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.md) | TOBS of Elmer |
| [Temperature](Observation-85fd1372-cf02-49c6-bd45-7205f5541a66.md) | Temperature of Elmer |
| [Urine dipstick tests](Observation-4b8f899a-df12-4301-8287-9a77d46ded3d.md) | Urine dipstick tests on Bruno |

