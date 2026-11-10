# Validation - DK MedCom Core v1.0.0-test

### Governance for FHIR Validation Using MedCom FHIR Standards

**Note:**

1) For sharing MedCom FHIR messages via the messaging infrastructure, this governance is mandatory.

2) For sharing MedCom FHIR documents via DDS (the National Document Sharing Service), this governance is currently advisory, as both the governance framework and infrastructure are still being developed and adapted to FHIR. MedCom strongly recommends early implementation, as FHIR’s built-in tools improve document quality and will support readiness when this governance becomes mandatory.

#### Introduction

To ensure interoperability and robustness in FHIR-based exchanges within the Danish healthcare domain, MedCom defines the following governance for validation. The governance ensures that exchanged FHIR content is syntactically valid, semantically conformant, and fully compliant with the relevant profiles.

Notice that the governance principles for MedCom FHIR Messaging differ from those for MedCom FHIR Documents, and vendors **SHALL** ensure that the appropriate rules are applied depending on the communication method. You can read more about FHIR validation in general on HL7 FHIR’s official web page: [Validating Resources](https://hl7.org/fhir/R4/validation.html).

#### Validation in Vendor Systems

Vendors **SHALL** implement FHIR validation as part of their own solutions and apply it in production environments to ensure continuous conformance with MedCom’s FHIR standards.

Vendors **SHALL** use a FHIR validator that is based on an officially maintained HL7 FHIR implementation. The selected validator **SHALL** be capable of validating resources against all required Implementation Guides, including profiles, extensions, and terminology bindings. MedCom does not recommend a specific solution.

The list below shows examples of FHIR validators commonly used in the international community. The list is provided for guidance only, to help vendors identify tools suitable for their own technical environment. MedCom has not tested these validators and cannot guarantee their behaviour. MedCom encourages vendors to contact FHIR@medcom.dk with comments or suggestions regarding the list.

Notice that the validation behaviour may show minor variations between different validator implementations and programming languages - for example between C# and Java. In case of disagreement about validation results, MedCom **SHALL** be contacted via email (FHIR@medcom.dk) to clarify.

Vendors **SHALL** maintain logs for troubleshooting.

**Examples overview of Potential FHIR Validator Options**

* [Firely](https://www.nuget.org/packages/Firely.Fhir.Validation.R4)
* For .NET [Firely](https://www.nuget.org/packages/Firely.Fhir.Validation.R4) with docs [here](https://docs.fire.ly/projects/Firely-NET-SDK/en/latest/validation/profile-validation.html) and a MedCom example [here](https://github.com/medcomdk/ValidationCodeExamples/tree/main)
* [HL7 International – FHIR Validator](https://confluence.hl7.org/spaces/FHIR/pages/35718580/Using+the+FHIR+Validator). This can be setup as an HTTP service.
* [HAPI FHIR – Instance Validator](https://hapifhir.io/hapi-fhir/docs/validation/instance_validator.html)
* [SMILE Digital Health](https://smilecdr.com/docs/smileutil/validate.html)
* [LinuxForHealth](https://linuxforhealth.github.io/FHIR/guides/FHIRValidationGuide/)
* [AidBox – FHIR Schema Validator](https://www.health-samurai.io/docs/aidbox/modules/profiling-and-validation/fhir-schema-validator)

#### FHIR Messaging - Validation Governance

Please see [MedCom Messaging IG](https://medcomfhir.dk/ig/messaging/validation-governance.html).

#### FHIR Documents - Validation Governance

This governance applies to MedCom FHIR Documents exchanged through the current national document-sharing infrastructure, which is based on IHE XDS. The existing infrastructure does not perform FHIR validation today. Until the infrastructure is updated to support FHIR-native operations in the future, vendors **SHALL** ensure that all FHIR documents are valid.

##### Document source validation

* The document source SHALL provide valid FHIR documents according to the relevant FHIR Implementation Guide(s) (IG) to the national infrastructure.
* Documents that are not valid **SHALL NOT** be submitted. 
* In cases where the document source is unable to produce a conformant FHIR document, the document source **SHALL** prevent transmission, **SHALL** log the validation failure, **SHALL** perform internal escalation and troubleshooting, and can seek guidance from MedCom if the issue cannot be resolved locally.
* On-demand documents: If the document source is unable to produce a conformant document, the document source **SHALL** return an error response. In the current IHE XDS-based infrastructure, the document source **SHALL** return an IHE-compliant error response structured in accordance with ITI-43 Retrieve Document Set (IHE ITI Technical Framework, Volume 3).
 

##### Document consumer validation

* The document consumer **SHALL** ensure the validity of the received document according to the relevant FHIR Implementation Guide(s) (IG) prior to presenting it to the user.
* The document consumer **SHOULD**, as far as possible, display documents that contain validation errors. In such cases, the document consumer **SHALL** present a disclaimer indicating that the document contains error(s). The document consumer **MAY** present a clear, user-friendly explanation of the document’s contained error(s) understandable to non-technical users.
* If the document cannot be processed, the document consumer **SHALL** provide an error message to the user. The document consumer **MAY** still display the narrative content to ensure that essential clinical information remains accessible to the user if possible.
* If identifiable, the relevant document source organization **SHALL** be notified, and MedCom **MAY** be notified.

##### Transition to future FHIR-based infrastructure

The national infrastructure is expected to transition to a more FHIR-based architecture in the future. Work on this architecture is ongoing, and the specific design— including whether the infrastructure will perform central validation of metadata and document content, and how validation responsibilities will be shared between participants—has not yet been decided.

Until a future governance model is formally established, document source and document consumer validation remains required.

Regardless of the final architectural decisions, experiences from international FHIR implementations show that vendors will continue to need local validation capabilities for development, testing, debugging, and quality assurance. For this reason, implementing validation now is not a redundant investment, even in a scenario where future infrastructure-level validation is introduced.

##### More information

[Patientindeks domæneregler for dokumentdeling / Patient indexing rule for documentsharing](https://sundhedsdatastyrelsen.dk/digitale-loesninger/referencearkitektur-og-standarder/domaeneregler-patientindeks)

#### Validation in MedCom FHIR test validation tool

You can use the validator at [itb.medcom.dk](https://test.itb.medcom.dk/). In this IG you can find a [guide](itb-getting-started.md).

#### Extras

There are many different ways to FHIR validate. You could validate in your terminal with something like [Firely Terminal](https://fire.ly/products/firely-terminal/). Or using a validator jar file - more information can be found [here](https://confluence.hl7.org/spaces/FHIR/pages/35718580/Using+the+FHIR+Validator).

