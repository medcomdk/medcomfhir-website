# Artifacts Summary - DK MedCom EKG v1.0.2

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComEkgRecordingBundle](StructureDefinition-medcom-ekg-recording-bundle.md) | A profile for the MedCom ConditionList Bundle resource. |
| [MedComEkgRecordingComposition](StructureDefinition-medcom-ekg-recording-composition.md) | A profile for the MedCom Ekg Recording Composition resource. |
| [MedComEkgRecordingObservation](StructureDefinition-medcom-ekg-recording-observation.md) | Observation profile intended to be used in MedCom's Ekg Recording standard. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Bundle instance](Bundle-0a74554f-ded3-4bc7-bef1-535699565c5a.md) | Bundle instance |
| [Elektrokardiogram-12-aflednings](Composition-384ca229-c562-4a26-a035-c0c38108e036.md) | Composition example for EKG |
| [Observation](Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.md) | Observation EKG PDF |
| [Organization](Organization-f8d0eb07-5336-4005-9081-b065f9a82663.md) | Instance of an author organization |
| [Patient](Patient-379ebb53-11e3-42ac-b9db-0bad0ece46d1.md) | Instance of a patient |
| [Practitioner](Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.md) | Instance of a practitioner |
| [PractitionerRole](PractitionerRole-bb6fa4e1-f8b1-4bf4-b77e-bb03b2cc9820.md) | PractitionerRole with a role and reference to a practitioner and an organization |
| [Producer of FHIR resources](ActorDefinition-ProducerActor.md) | The system that creates the FHIR resources |

