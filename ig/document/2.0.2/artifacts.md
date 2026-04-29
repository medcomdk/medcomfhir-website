# Artifacts Summary - DK MedCom Document v2.0.2

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md) | A profile stating the rules, when exchanging a FHIR document in the Danish Healthcare sector using IHE MHD and IHE XDS based document sharing. |
| [MedComDocumentBundle](StructureDefinition-medcom-document-bundle.md) | The Bundle profile for a document |
| [MedComDocumentCareTeam](StructureDefinition-medcom-document-careteam.md) | Careteam participating in the care of a patient. |
| [MedComDocumentComposition](StructureDefinition-medcom-document-composition.md) | The profile of the MedCom Document Composition containing the minimum allowed content. |
| [MedComDocumentObservation](StructureDefinition-medcom-document-observation.md) | Observation profile to be used in MedCom FHIR Documents. |
| [MedComDocumentOrganization](StructureDefinition-medcom-document-organization.md) | A profile including requirements for a MedCom Document Organization resource |
| [MedComDocumentPatient](StructureDefinition-medcom-document-patient.md) | A profile including requirements for a MedCom Document Patient. |
| [MedComDocumentPractitioner](StructureDefinition-medcom-document-practitioner.md) | A profile including requirements for a MedCom Document Practitioner |
| [MedComDocumentPractitionerRole](StructureDefinition-medcom-document-practitionerrole.md) | Document PractitionerRole resource used to describe the role of a healthcare professional or another actor involved in citizen or patient care. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedCom Document HomeCommunityID](StructureDefinition-medcom-document-homecommunityid-extension.md) | Extension containing information about operational and in production home communities (XCA) in Danish Document Sharing |
| [MedCom XDS Version ID extension](StructureDefinition-medcom-document-version-id-extension.md) | Extension containing information about the version of the DocumentReference for a specific standard. The version is included in the R5 version of the resource. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [IHE ClassCode_TEMP](ValueSet-MedCom-ihe-core-classcode-VS-TEMP.md) | _TEMP Value set for the classCode attribute. classCode used in DK IHE Document sharing |
| [IHE ConfidentialityCode_TEMP](ValueSet-MedCom-ihe-core-confidentialitycode-VS-TEMP.md) | _TEMP Confidentiality code used in Danish Document sharing. |
| [IHE FormatCode_TEMP](ValueSet-MedCom-ihe-core-formatcode-VS-TEMP.md) | _TEMP ValueSet containing FormatCodes defines by MedCom. |
| [IHE HealthcareFacilityTypeCode_TEMP](ValueSet-MedCom-ihe-core-HealthcareFacilityTypeCode-VS-TEMP.md) | _TEMP Value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred. |
| [IHE LanguageCode_TEMP](ValueSet-MedCom-ihe-core-languagecode-VS-TEMP.md) | _TEMP Tags for the Identification of Languages (RFC 3066) |
| [IHE MimeType_TEMP](ValueSet-MedCom-ihe-core-mimetype-VS-TEMP.md) | _TEMP Values for the document metadata attribute mimeType |
| [IHE PracticeSettingCode_TEMP](ValueSet-MedCom-ihe-core-PracticeSettingCode-VS-TEMP.md) | _TEMP Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Kliniske specialer' (https://sor.sum.dsdn.dk/lookupdata/#clinical_speciality, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED codes. |
| [IHE TypeCode_TEMP](ValueSet-MedCom-ihe-core-typecode-VS-TEMP.md) | _TEMP ValueSet containing TypeCode. |
| [_TEMP IHE HomeCommunityId](ValueSet-MedCom-ihe-core-homeCommunityId-VS-TEMP.md) | _TEMP List of operational and in production home communities (XCA) in Danish Document Sharing |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [DK IHE ClassCode_TEMP](CodeSystem-MedCom-ihe-classcode-CS-TEMP.md) | _TEMP Danish Integrating the Healthcare Enterprise (IHE) metadata class codes |
| [DK IHE FormatCode_TEMP](CodeSystem-MedCom-ihe-formatcode-CS-TEMP.md) | _TEMP Danish Integrating the Healthcare Enterprise (IHE) metadata format codes |
| [MedCom Message Codes_TEMP](CodeSystem-MedCom-message-codes-CS-TEMP.md) | _TEMP MedCom Message Codes, which includes document type codes (Danish). |
| [_TEMP IHE XDS Affinity Domain](CodeSystem-MedCom-ihe-homeCommunityId-CS-TEMP.md) | _TEMPIHE XDS Affinity Domains who has agreed to share healthcare related documents in Denmark |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Author Organization](Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.md) | Instance of an author organization |
| [Author Person](Practitioner-42cb9200-f421-4d08-8391-7d51a2503cb4.md) | Instance of an author person |
| [Bundle instance](Bundle-0a74554f-ded3-4bc7-bef1-535699565c5b.md) | Bundle instance |
| [Elektrokardiogram-12-aflednings](Composition-384ca229-c562-4a26-a035-c0c38108e037.md) | Composition example |
| [Observation](Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.md) | Observation EKG PDF |
| [Organization](Organization-f8d0eb07-5336-4005-9081-b065f9a82663.md) | Instance of an author organization |
| [Patient](Patient-37628912-7816-47a3-acd8-396b610be142.md) | Instance of a patient |
| [Patient](Patient-379ebb53-11e3-42ac-b9db-0bad0ece46d1.md) | Instance of a patient |
| [Practitioner](Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.md) | Instance of a practitioner |
| [PractitionerRole](PractitionerRole-bb6fa4e1-f8b1-4bf4-b77e-bb03b2cc9820.md) | PractitionerRole with a role and reference to a practitioner and an organization |
| [Producer of FHIR resources](ActorDefinition-ProducerActor.md) | The system that creates the FHIR resources |

