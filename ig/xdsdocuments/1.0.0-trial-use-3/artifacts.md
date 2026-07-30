# Artifacts Summary - Danish XDS Documents profiles v1.0.0-trial-use-3

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [HomeCareObservationDocumentReference](StructureDefinition-homecare-observation-documentreference.md) | A profile stating the rules, when exchanging a document including homecare observation (DA: Kommunale Prøvesvar). |
| [MedComConditionListDocumentReference](StructureDefinition-medcom-conditionlist-documentreference.md) | A profile for the MedCom ConditionListDocumentReference resource. |
| [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md) | A profile stating the rules, when exchanging a FHIR document in the Danish Healthcare sector using IHE MHD and IHE XDS based document sharing. |
| [MedComDocumentOrganization](StructureDefinition-medcom-document-organization.md) | A profile including requirements for a MedCom Document Organization resource |
| [MedComDocumentPatient](StructureDefinition-medcom-document-patient.md) | A profile including requirements for a MedCom Document Patient. |
| [MedComDocumentPractitioner](StructureDefinition-medcom-document-practitioner.md) | A profile including requirements for a MedCom Document Practitioner |
| [MedComDocumentPractitionerRole](StructureDefinition-medcom-document-practitionerrole.md) | Document PractitionerRole resource used to describe the role of a healthcare professional or another actor involved in citizen or patient care. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedCom Document HomeCommunityID](StructureDefinition-medcom-document-homecommunityid-extension.md) | Extension containing information about operational and in production home communities (XCA) in Danish Document Sharing |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [DocumentReference instance](DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.md) | DocumentReference instance |
| [Example HomeCareObservation DocumentReference](DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.md) |  |
| [Producer of FHIR resources](ActorDefinition-ProducerActor.md) | The system that creates the FHIR resources |

