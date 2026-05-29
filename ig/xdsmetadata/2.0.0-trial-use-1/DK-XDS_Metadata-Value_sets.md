# DK XDS Metadata Value Sets - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* **DK XDS Metadata Value Sets**

## DK XDS Metadata Value Sets

# Core Terminology

## Terminology: Value Sets

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedCom XDS ClassCode](ValueSet-MedCom-xds-classcode-VS.md) | Value set for the classCode attribute. classCode used in DK IHE Document sharing |
| [MedCom XDS ConfidentialityCode](ValueSet-MedCom-xds-confidentialitycode-VS.md) | Confidentiality code used in Danish Document sharing. |
| [MedCom XDS EventCodeLists](ValueSet-MedCom-xds-eventcodelist-VS.md) | ValueSet containing EventCodeLists. |
| [MedCom XDS FormatCode](ValueSet-MedCom-xds-formatcode-VS.md) | ValueSet containing FormatCode. |
| [MedCom XDS HealthcareFacilityTypeCode](ValueSet-MedCom-xds-HealthcareFacilityTypeCode-VS.md) | Value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred. |
| [MedCom XDS HomeCommunityId](ValueSet-MedCom-xds-homeCommunityId-VS.md) | List of operational and in production home communities (XCA) in Danish Document Sharing |
| [MedCom XDS LanguageCode](ValueSet-MedCom-xds-languagecode-VS.md) | Tags for the Identification of Languages (RFC 3066) |
| [MedCom XDS MimeType for FHIR documents](ValueSet-MedCom-xds-mimetype-fhir-VS.md) | Values for the document metadata attribute mimeType |
| [MedCom XDS MimeType for non-FHIR XML documents](ValueSet-MedCom-xds-mimetype-xml-VS.md) | Values for the document metadata attribute mimeType |
| [MedCom XDS PracticeSettingCode](ValueSet-MedCom-xds-PracticeSettingCode-VS.md) | Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Kliniske specialer' (https://sor.sum.dsdn.dk/lookupdata/#clinical_speciality, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED codes. |
| [MedCom XDS TypeCode ValueSet](ValueSet-MedCom-xds-typecode-VS.md) | ValueSet containing TypeCode. |

## Terminology: Code Systems

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [DK MedCom analysis codes](CodeSystem-MedCom-xds-analysis-codes-CS.md) | CodeSystem for MedCom analysis codes |
| [MedCom Message Codes](CodeSystem-MedCom-xds-typecode-CS.md) | MedCom document type codes (Danish) |
| [MedCom XDS Affinity Domain](CodeSystem-MedCom-xds-homeCommunityId-CS.md) | IHE XDS Affinity Domains who has agreed to share healthcare related documents in Denmark |
| [MedCom XDS ClassCode](CodeSystem-MedCom-xds-classcode-CS.md) | CodeSystem for ClassCode |
| [MedCom XDS FormatCode](CodeSystem-MedCom-xds-formatcode-CS.md) | CodeSystem for FormatCode |

