# General Governance - DK MedCom Core v1.0.0-test

# General Governance for MedCom FHIR Standards

# Introduction to General Governance for MedCom FHIR Standards

On this page, you can find information about how MedCom has profiled FHIR standards to work in a Danish context. Governance for MedCom HL7 FHIR describes the basic ruleset of how MedCom standards must be implemented in the Danish Healthcare System.

These general MedCom FHIR Governance rules are intended to clarify the use of MedCom’s FHIR standards for the health and social area.

It is the intention that the general MedCom FHIR Governance rules together with MedCom’s individual FHIR standards form the full and sufficient basis for implementing MedCom’s healthcare FHIR standards. Thus, the governance rules must be able to function as “a chief judge”, where there is doubt about the practical application of MedCom’s FHIR standards.

## Special terms used in the general Governance for MedCom FHIR Standards

MedCom adopts the normative words defined in IETF Best Current Practice 14: Key words for use in RFCs to Indicate Requirement Levels (BCP-14) (currently RFC 2119 and RFC 8174), certain words indicate whether a specific content of the Technical Framework is normative: either required (e.g., “must”, “required”, “shall”) or optional (e.g., “may”, “recommended”). Informative content does not contain these key words.

[RFC 2119](https://www.rfc-editor.org/info/rfc2119) specifies common key words that may be used in protocol specifications, where [RFC 8174](https://www.rfc-editor.org/info/rfc8174) aims to reduce the ambiguity by clarifying that only UPPERCASE usage of the key words have the defined special meanings.

This specification uses the conformance verbs SHALL, SHOULD, and MAY as defined in RFC 2119. Unlike RFC 2119, however, this specification allows that different applications might not be able to interoperate because of how they use optional features. In particular:

* **SHALL**: an absolute requirement for all implementations
* **SHALL NOT**: an absolute prohibition against inclusion for all implementations
* **SHOULD/SHOULD NOT**: A best practice or recommendation to be considered by implementers within the context of their particular implementation; there may be valid reasons to ignore an item, but the full implications must be understood and carefully weighed before choosing a different course
* **MAY**: This is truly optional language for an implementation; can be included or omitted as the implementer decides with no implications

This convention is in compliance with HL7 FHIR use of the terms, which is described by [HL7 FHIR under conformance language](http://www.hl7.org/fhir/conformance-rules.html#conflang).

## MedCom FHIR standards

An implementer of a MedCom FHIR Standard **SHALL** be compliant with all parts of the documentation (both the standard documentation and the relevant governance).

## MustSupport

Unless otherwise stated, the following criteria apply to elements marked as “Must Support” in MedCom's Implementation Guides:

Labeling an element MustSupport ('S' red marking) means that implementations that produce or consume resources **SHALL** provide "support" for the element in a meaningful way, and is therefore a part of a standard.

#### Systems receiving or consuming a resource instance:

**SHALL** be able to process the field’s content when it is present. **SHALL** process the content according to the rules defined for the profile. **SHALL NOT** fail when the value is not present.

#### Systems sending or creating a resource instance:

**SHOULD** populate the element when the information is available. **SHALL** populate the element according to the rules defined for the profile.

#### For Logical Models:

Functional Analysis **SHALL** consider the data element as defined.

“Must Support” elements that are used in an implementation **SHALL** inherit the behaviour and constraints defined for the data element. “Must Support” elements not needed in a particular implementation **MAY** be excluded from implementation but such exclusion **SHALL** be described. Derived implementations **SHOULD** inherit the field’s “Must Support” flag.

#### MustSupport Links

| |
| :--- |
| [Detailed specification for MustSupport in FHIR R4](https://www.hl7.org/FHIR/conformance-rules.html#mustSupport) |

## Implementation Requirements for Narrative Texts

**OBS:** MedCom is currently transitioning between two approaches for defining narrative text in its profiles. If a profile includes Obligations, the Governance on this page must be followed. If a profile has not yet implemented Obligations, use the governance described on [this page instead](narrative-legacy.md).

This section is aimed at vendors/implementers and describes the concrete requirements for how to implement and represent narrative text in MedCom FHIR resources.

#### The Importance of Narrative Text in MedCom’s FHIR Standards

In MedCom’s FHIR standards, it is required that all FHIR resources include a narrative text. The narrative serves an essential purpose: It ensures that the clinical or administrative content of the resource can be understood by healthcare professionals without the need for specialized technical tools. While the structured elements of a FHIR resource are designed for system-to-system communication, the narrative provides a human-readable summary that makes the information accessible to human interpretation in a simple XHTML view.

The narrative text plays a critical role in supporting robustness and patient safety across the healthcare system. First, it allows the content of a message to be read even if the recipient system fails to process the structured data. Second, when narrative text is displayed across multiple versions of a standard, it increases patient safety by ensuring that as much information as possible remains visible, and it enables healthcare professionals to review historical messages in the future. Third, it makes additional elements beyond those defined in the MedCom standard transparent, since FHIR allows resources to include more data than the standard strictly requires. Fourth, including a narrative is considered best practice in FHIR and aligns MedCom’s work with international recommendations. Finally, the presence of a narrative ensures that even if a system receives a FHIR Bundle it is not fully equipped to handle, the content can still be displayed and understood when necessary.

#### Requirements for the Narratives

The narrative text **SHALL** include a human-readable representation of every data element marked with the Obligation code `O` representing the obligation **SHALL:in-narrative**.

Obligations ('O' red marking) in FHIR define actor-specific requirements in an Implementation Guide to express conformance expectations. The code “SHALL:in-narrative” indicates that the referenced data element must be represented in the human-readable narrative of the resource. An Actor represents a defined role in an exchange, and obligations are applied to actors to indicate their specific responsibilities. The narrative **SHALL** provide a human-readable summary of the essential elements and **SHALL NOT** replicate the full structured content.

All MedCom FHIR resources **SHALL** include a narrative in the `[resource].text`-element (even though it is not marked with 1..1 cardinality in the Implementation Guide), except the Bundle resources. Since the Bundle itself does not carry clinical meaning, its content must be understood by reviewing the individual resources inside the Bundle.

Narratives contain two sub elements, text.status and text.div.

##### The status element

In MedCom FHIR resources the text.status element **SHALL** always use the code "generated" or "extensions". The status "generated" **SHALL** be used when the resource contains only generated content. The status "extensions" **SHALL** be used when the resource includes additional elements provided through extensions.

A narrative in MedCom FHIR resources **SHALL NEVER** be of code: empty.

##### The div element

The contents of the text.div element are XHTML fragments that **SHALL** contain only the basic HTML formatting elements described in chapters 7-11 (except section 4 of chapter 9) and 15 of the HTML 4.0 standard, <a> elements (either name or href), images and internally contained style attributes.

The XHTML content **SHALL NOT** contain a head, a body element, external stylesheet references, deprecated elements, scripts, forms, base/link/xlink, frames, iframes, objects or event related attributes (e.g. onClick).

If a resource includes a base-64-encoded attachment, this **SHALL NOT** be included in the narrative text, as it will cause the size of the message to increase rapidly.

##### General Narrative Text Rules

* All resources **SHALL** contain a narrative text defined by the `[resource].text` element (Except Bundles) that includes narratives for all elements marked with the Obligation code `O`.
* The Narrative Text **SHALL** have a status with value "generated" or "extensions".
* The Narrative Text **SHALL** include the ID for each resource (Resource.id).
* The Narrative Text **SHALL** include references to other resources as the ID for each resource (Resource.id).
* The Narrative Text **SHALL** include elements marked with the Obligation code **SHALL:in-narrative**.
* The Narrative Text **SHALL NOT** include base-64-encoded attachments.
* If a resource contains extra information beyond the MedCom standard, this **SHALL** be included in the narrative.
* The narrative **SHALL** use Danish clinical terminology or recognized Danish display texts if such exist, and it **SHALL** also include the corresponding English text to ensure international readability.

#### Links for Narrative Text

| |
| :--- |
| [Narrative Text description in FHIR R4](http://hl7.org/fhir/R4/narrative.html#Narrative) |
| [NarrativeStatus in FHIR R4](http://hl7.org/fhir/R4/codesystem-narrative-status.html#4.3.14.424.2) |
| [Styling the XHTML in FHIR R4](http://hl7.org/fhir/R4/narrative.html#css) |

#### Implementing Narrative Text

For implementers coding in java, the [HAPI FHIR SDK describes the narrative generation here](https://hapifhir.io/hapi-fhir/docs/model/narrative_generation.html). Unfortunately, Firely's .Net SDK does not currently have a similar support for generating narratives. For inspiration on how the narrative can be structured, this [Narrative Generator FHIR toolbox](https://fhirtoolbox.com/narrative-generator) can be used, however MedCom cannot control that all rules mentioned in [General Narrative Text Rules](#general-narrative-text-rules) are supported.

### Governance for narrative content in MedCom FHIR standards

This section serves as background information for vendors to understand the rationale behind the setup of the requirements.

This governance is applied by MedCom to define which elements **SHALL** be included in the narrative and assigned the Obligation code **SHALL:in-narrative** found in the MedCom FHIR standard profiles. The purpose of this governance is to ensure a consistent use of narrative texts across MedCom’s FHIR profiles. The governance defines which types of elements that **SHALL** be included in the human-readable narrative and which should be excluded, based on best practice and patient safety considerations. The same type of element **SHOULD** always be treated consistently across MedCom profiles to support predictable implementation.

##### Elements that must be included in the narrative text

Clinically and administratively relevant information, including diagnoses, observations, procedures, and other content directly relevant to patient care or administration **SHALL** be included in the narrative text.

Clinically and administratively relevant information includes:

* Elements representing relevant person and organization information (e.g., Patient, Practitioner, Organization), including e.g. name, role, CPR-number, birthdate, and contact information.
* Codes and corresponding systems with human meaning. When coded values are used (e.g., LOINC, SNOMED CT, MedCom codes), their display text (the human-readable term) must appear in the narrative.
* Relevant values (e.g., observation results, medication names and dosages, diagnostic conclusions).
* Relevant elements from extension.
* Identifiers when they have human relevance (e.g., SOR-ID, municipality codes, episode-of-care identifiers).
* References to other resources.
* Relevant dates and times.

##### Elements that shall not be included in the narrative text

Elements that are NOT clinically or administratively relevant and that do not contribute to human readability **SHALL NOT** be included in the narrative text.

Elements that shall not be included are:

* Machine-oriented content and technical or system-specific identifiers without clinical or administrative relevance (except resource.id).
* Base-64-encoded content, including documents or binary attachments.
* System metadata or technical extensions not relevant to clinical or administrative use.

