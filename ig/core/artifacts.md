# Artifacts Summary - DK MedCom Core v1.0.0-test

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComCoreCareTeam](StructureDefinition-medcom-core-careteam.md) | Careteam participating in the care of a patient |
| [MedComCoreDiagnosticReport](StructureDefinition-medcom-core-diagnosticreport.md) | Report containing all observation results. |
| [MedComCoreEncounter](StructureDefinition-medcom-core-encounter.md) | An interaction between a patient/citizen and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient/citizen. |
| [MedComCoreObservation](StructureDefinition-medcom-core-observation.md) | Observation profile. |
| [MedComCoreOrganization](StructureDefinition-medcom-core-organization.md) | A formally recognized organizations within danish healthcare, registered with a SOR identifier issued by The Danish Health Data Authority |
| [MedComCorePatient](StructureDefinition-medcom-core-patient.md) | Patient/citizen resource to use as subject in MedCom communication. |
| [MedComCorePractitioner](StructureDefinition-medcom-core-practitioner.md) | Practitioner resource is used to describe a healthcare professional or another actor involved in citizen or patient care. |
| [MedComCorePractitionerRole](StructureDefinition-medcom-core-practitionerrole.md) | PractitionerRole resource used to describe the role of a healthcare professional or another actor involved in citizen or patient care. |
| [MedComMedia](StructureDefinition-medcom-core-media.md) | Profile to capture relevant images,audio, video and document as part of the healthcare process |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [AssignedIdentifier](StructureDefinition-medcom-assigned-identifier.md) | An UUID identifier assigned by an organisation |
| [LPR3 Identifier](StructureDefinition-lpr3-Identifier.md) | Identifier holding a LPR3 identifier |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [ContactExtension](StructureDefinition-medcom-core-contact-extension.md) | Extension that contains the contact information |
| [DateTimeExtension](StructureDefinition-medcom-core-datetime-extension.md) | Date and time of this payload |
| [IdentifierExtension](StructureDefinition-medcom-core-identifier-extension.md) | An extension holding a specific identifier datatype |
| [MedCom Observation ValueAttachment Extension](StructureDefinition-medcom-observation-value-attachment-extension.md) | Generic extension for Observation value as Attachment type. |
| [PractitionerExtension](StructureDefinition-medcom-core-practitioner-extension.md) | Reference to a PractitionerRole and subsequent Practitioner |
| [SenderExtension](StructureDefinition-medcom-core-sender-extension.md) | Reference to a more specfic sender of a message. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Aros Burn Center](Organization-12ee0dde-a672-462f-820d-5efe832d73c9.md) | An organization with a SOR identifier and name. |
| [Birgit Berggren](Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.md) | Patient described with minimal information and replacement cpr-number. Valid only if used in a Bundle. |
| [Brita Test Berggren](Patient-5b72c625-0570-4111-b272-f0351344f8b6.md) | Patient described with maximum information. Valid only if used in a Bundle. |
| [Bruno Test Elmer](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md) | Patient described with minimal information. Valid only if used in a Bundle. |
| [Cæcar Test Østergård](Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.md) | Deceased patient described with maximum information. Valid only if used in a Bundle. |
| [Example of a Practitioner](Practitioner-e9eacb62-666b-11ed-9022-0242ac120002.md) | Example of a practitioner with a name |
| [Example of a PractitionerRole](PractitionerRole-6057686e-666c-11ed-9022-0242ac120002.md) | Example of a practitioner role with a code and reference to a practitioner |
| [Example of a careteam](CareTeam-fb1d34fe-6672-11ed-9022-0242ac120002.md) | Example of a careteam with a name and a reference to an organization |
| [MedCom Core Encounter](Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.md) | Example of a simple MedCom Core Encounter |
| [Normal EKG](Media-cb277ee2-5d96-4762-829d-d36449b2b17f.md) | An example of an EKG that can be sendt with an diagnostic repport |
| [Practitioner Clinic](Organization-bca68510-fe3b-4161-aba0-908a693eb54f.md) | An organization with a SOR identifier, without name. |
| [PractitionerRole with a role and reference to a practitioner](PractitionerRole-6ff69f1c-690d-11ed-9022-0242ac120002.md) | PractitionerRole with a role and reference to a practitioner |
| [Producer of FHIR resources](ActorDefinition-ProducerActor.md) | The system that creates the FHIR resources |

