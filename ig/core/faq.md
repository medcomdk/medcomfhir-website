# Faq - DK MedCom Core v4.0.1

### Frequently asked qustions

On this page you will finde the answears to the most asked questions.

#### Why are there Multiple Implementation Guides?

FHIR allows for a great deal of reuse. When creating a MedCom FHIR message, profiles from the MedComCore and MedComMessaging IG are used to create a complete understanding.

Keeping the IG's seperate allows us to version them individually, meaning that updates in the MedComHospitalNotification IG will not affect the version of the MedComCareCommunication IG. An update to the MedComMessaging IG will affect all standard that use profiles or inherit profiles from this IG. Additionally, it makes it possible to reuse the profiles from the Core IG in different MedCom standard and in different exchange formats.

[ Figure 1](#Fig1) illustrates that the messaging standard uses multiple profiles from the Core and Messaging IG and uses some profiles that are specific to the given standard.

**Figure 1: Overview of the MedCom Messaging Standard **
#### How does Inheritance Work and What is DKCore?

In Denmark, we have a national HL7 affiliate, called [HL7-DK](https://hl7.dk/). The affiliate works on the development of international HL7 standards that supports healthcare. HL7-DK has focuses on profiling the international standard in a Danish context to provide a common foundation in Denmark. HL7-DK develops DK-core which are generic FHIR profiles that can be used freely for FHIR projects in Denmark. The profile [MedComCorePatient](StructureDefinition-medcom-core-patient.md) inherits from [DKCorePatient](https://hl7.dk/fhir/core/1.1.0/StructureDefinition-dk-core-patient.html). This means that when a MedCom standard uses a civil registration number (Danish: CPR-nummer) from DKCorePatient, it is defined in the same way as when other projects inherit from DK-core and use a civil registration number, securing consistency across projects. DKCorePatient is the foundation of MedComCorePatient, which is why MedComCorePatient is said to inherit from DKCorePatient.

**Figre 2: The inheritance of profiles **
[Figure 2 ](#Fig2) also illustrates that there is a dependency between the IGs and the FHIR resources defined by HL7.

[You can read more about the work of HL7-DK here](https://hl7.dk/).

