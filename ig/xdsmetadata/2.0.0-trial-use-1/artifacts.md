# Artifacts Summary - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [DK XDS ClassCode](ValueSet-MedCom-xds-classcode-VS.md) | Value set for the classCode attribute. classCode used in DK IHE Document sharing |
| [DK XDS ConfidentialityCode](ValueSet-MedCom-xds-confidentialitycode-VS.md) | Confidentiality code used in Danish Document sharing. |
| [DK XDS EventCodeLists](ValueSet-MedCom-xds-eventcodelist-VS.md) | ValueSet containing EventCodeLists. |
| [DK XDS FormatCode](ValueSet-MedCom-xds-formatcode-VS.md) | ValueSet containing FormatCode. |
| [DK XDS HealthcareFacilityTypeCode](ValueSet-MedCom-xds-HealthcareFacilityTypeCode-VS.md) | Value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred. |
| [DK XDS HomeCommunityId](ValueSet-MedCom-xds-homeCommunityId-VS.md) | List of operational and in production home communities (XCA) in Danish Document Sharing |
| [DK XDS LanguageCode](ValueSet-MedCom-xds-languagecode-VS.md) | Tags for the Identification of Languages (RFC 3066) |
| [DK XDS MimeType for FHIR documents](ValueSet-MedCom-xds-mimetype-fhir-VS.md) | Values for the document metadata attribute mimeType |
| [DK XDS MimeType for non-FHIR XML documents](ValueSet-MedCom-xds-mimetype-xml-VS.md) | Values for the document metadata attribute mimeType |
| [DK XDS PracticeSettingCode](ValueSet-MedCom-xds-PracticeSettingCode-VS.md) | Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Kliniske specialer' (https://sor.sum.dsdn.dk/lookupdata/#clinical_speciality, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED codes. |
| [DK XDS TypeCode ValueSet](ValueSet-MedCom-xds-typecode-VS.md) | ValueSet containing TypeCode. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [DK MedCom Message Codes](CodeSystem-MedCom-xds-typecode-CS.md) | MedCom document type codes (Danish) |
| [DK MedCom analysis codes](CodeSystem-MedCom-xds-analysis-codes-CS.md) | CodeSystem for MedCom analysis codes |
| [DK XDS Affinity Domain](CodeSystem-MedCom-xds-homeCommunityId-CS.md) | DK XDS Affinity Domains who has agreed to share healthcare related documents in Denmark |
| [DK XDS ClassCode](CodeSystem-MedCom-xds-classcode-CS.md) | CodeSystem for ClassCode |
| [DK XDS FormatCode](CodeSystem-MedCom-xds-formatcode-CS.md) | CodeSystem for FormatCode |

### Terminology: Concept Maps 

These define transformations to convert between codes by systems conforming with this implementation guide.

| | |
| :--- | :--- |
| [OID to CodeSystem Reference ConceptMap](ConceptMap-MedComConceptMapOIDToCodeSystemReference.md) | ConceptMap comparing OIDs from the OID registry with corresponding FHIR CodeSystem references. |

