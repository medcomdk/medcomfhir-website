# New to Fhir - DK MedCom Core v1.0.0-test

### New to FHIR?

The purpose of this section is to give an introduction to MedCom's FHIR standards to stakeholders with no or limited knowledge about FHIR. On this page, you will find a brief introduction to the most frequently used terms and guidance to more information about FHIR and MedComs FHIR standards.

#### FHIR Glossary

[Fast Healthcare Interoperability Resources (FHIR®©)](https://www.hl7.org/fhir/) is developed by the international organization Health Level 7 (HL7) and is an open-source standard developed to exchange healthcare-related information. FHIR defines several resources, often referred to as ‘building blocks’, each describing a delimited area within healthcare, e.g. a Patient or an Encounter. These resources are generic and can therefore be used across the world. However, when using the resources in a specific context, such as communication between Danish healthcare parties, the resources need to be profiled to accommodate the use. The profiling could be to require the last name of a Patient. In some cases, it is necessary to extend the generic resources to fit the context, e.g. to add a civil registration number (Danish: CPR-nummer) as a patient identifier.

When creating a MedCom FHIR standard, multiple profiles are assembled to include the information necessary to support the business requirements. Under the auspices of MedCom, these profiles will most often come from multiple Implementation Guides (IG). This decision is further addressed in section "[Why are there Multiple Implementation Guides?](faq.md#why-are-there-multiple-implementation-guides)" that can be founded in the Frequently asked questions page.

Some of the benefits of FHIR is reuseability between data paradigms, i.e. reusing blocks of data for both document and messaging based data paradigms.

In [Table 1](#Tab1) you will find the most common terms and associated descriptions and examples. These terms all describe a fundamental feature in FHIR, and they make the foundation for understanding FHIR, and why they are presented initially.

> Note: the [Table 1](#Tab1) uses FHIR-paths to describe exactly which element is referred to e.g. Patient.name refers to the nameelement in the Patient resource.

| | | |
| :--- | :--- | :--- |
| Implementation Guide (IG) | The technical specification of a MedCom FHIR standard. A set of rules and associated documentation describing, how FHIR profiles should be implemented to accommodate a given standard and its requirements. | You are reading an IG right now. Others can be found[here](https://medcomfhir.dk/ig). |
| Standard | Interchangable with the word "Specification" or "IG". It is all the rules governing the use of a dataformat. | All of our Standards can be found[here](https://medcomfhir.dk/ig). |
| Element | A resource consists of multiple elements each describing a specific part of the content. | Patient.name or Patient.address. |
| Cardinality | Each element is described with a minimum and maximum cardinality, determining how many times an element may or shall appear:*  If the minimum cardinality is 0, the element may appear
*  If the minimum cardinality is 1, or more the element shall at least appear the number of times stated.
*  If the maximum cardinality is 0, the element must not appear
*  If the maximum cardinality is 1, the element may not appear more than once
*  If the maximum cardinality is *, the element may appear several times 
 | In the generic resource*Patient.name*has the cardinality 0..*, meaning a patient may have zero or more names.In the generic resource*Encounter.status*has the cardinality 1..1, meaning that a status always shall appear, and in may only appear once. |
| Resources | FHIR consists of generic resources, each describing a clinically delimited area. Resources are 'building blocks' defined by HL7. | A Patient resource, an Allergy resource, an Observation resource, an Encounter resource ect. |
| Profile | FHIR profile is a set of specified constrains and/or extensions on the base resource | [MedComMessaging profiles ](https://medcomfhir.dk/ig/messaging/profiles.html),[MedComCore profiles](https://medcomfhir.dk/ig/core/profiles.html) |
| Profiling | Profiling allows us to fit a resource to a given context, by defining constrains and/or by define extensions. It is widely recognised that when exchanging data it is impossible to make a one size fits all within the healthcare worldwide.To accommodate this condition, the resources are made generic with the possibility of being profiled to fit a specific context, such as exchanging a CareCommunication message between Danish healthcare parties. | Profiling could be to require a lastname and an identifier of a patient or citizen when exchanging information about the person. |
| Extensions | To extend a resource to include additional information than defined by HL7. | Extending the MedCom MessageHeader with a reportOfAdmissionFlag. |
| CodeSystem | A collection of codes, which can be predetermined by HL7, from a international terminology or defined by the developer of the IG. | Predetermined by HL7 e.g.[gender](http://hl7.org/fhir/valueset-administrative-gender.html), from an international terminology e.g.[SNOMED CT](https://browser.ihtsdotools.org/), or defined by the developer of the IG e.g.[categories ](https://medcomfhir.dk/ig/terminology/CodeSystem-medcom-careCommunication-categoryCodes.html)categories in a CareCommunication message. |
| ValueSet | A collection of codes from one or more CodeSystems. ValueSets can either include all codes from a CodeSystem or only some codes. | [MedComMessagingMessageTypes](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-messaging-messageTypes.html)is a ValueSet that includes all codes from the[MedComMessagingEvents](https://medcomfhir.dk/ig/terminology/CodeSystem-medcom-messaging-eventCodes.html)CodeSystem. The ValueSet includes the codes for MedComs FHIR standards |
| MustSupport | Indicates which information which shall be included in a MedCom standard if available in the sender systemer and which information the receiver system shall be able to handle. MustSupport is defined during profiling of the resource. | The elements Patient.identifier, Patient.name and Patient.address does all have the flag MustSupport in the[ MedComCorePatient](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-patient.html)profile. |
| Modifier | An element which modifies or changes the understanding of the resource. '!?' indicates in the IG that the element is a modifier element, which is often defined in the generic resource or in developed extensions | Patient.deceased is a modifier element since it modifies the way the content of the profile should be understood, if the patient is deceased. |
| Narrative | A textual summary of the information in a message which can be used to display information if the structured data cannot be displayed. All information in a message shall be included in the summary. | All content from a message, including the patients name or CPR-number and the written correspondence in a CareCommunication message. |

#### How to read a MedCom Implementation Guide

Use **Guide tour** in the lower-right corner for a step-by-step introduction to this IG's menu, profiles, dependencies, and downloads.

#### More information

##### Webinars

In 2022 MedCom held two webinars concerning the modernization of MedCom standards. Both webinars are free and available in Danish:

* [FHIR-introductionswebinar (17. may 2022)](https://www.youtube.com/watch?v=8doBKskz3J8)
* [FHIR demo-webinar with MedCom, Mjølner and Trifork (10 . february 2022)](https://www.youtube.com/watch?v=bfzx7U2Suug)

##### HL7 FHIR Documentation

All FHIR documentation can be found at [www.hl7.org/fhir/](https://www.hl7.org/fhir/). Here you will find detailed descriptions of basic principles, presentations to all resources and much more.

