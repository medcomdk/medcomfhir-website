# Unstructuredclinicalcontent - DK MedCom Document v2.0.2

* [**Table of Contents**](toc.md)
* **Unstructuredclinicalcontent**

## Unstructuredclinicalcontent

# Profiling Unstructured Clinical Content in MedCom FHIR Standards

This page provides **inspiration and guidance** for stakeholders who are exploring the idea of sharing files or other base64-encoded content as part of a MedCom FHIR standard.

The content is intended to support early discussions and considerations around how unstructured clinical information can be exchanged in a consistent and standards-based way within the healthcare sector.

The intention is to illustrate a **general and reusable modelling approach**. The described pattern can be applied when there is a need to establish a new MedCom standard for sharing document-based or otherwise unstructured information.

## When to apply this pattern

This pattern is relevant when there is a need to share clinical content that:

* Is primarily document- or file-based.
* Cannot be represented meaningfully as structured data alone.

The described approach serves as a foundation that can be further constrained and profiled to form a concrete MedCom standard for a specific use case.

## Conceptual approach

Unstructured content can be exchanged by using a **FHIR Document Bundle** as the overall container for the document.

Within this document structure, the **MedComDocumentObservation** resource can be used to represent the attachment as a clinical artefact. The Observation provides the clinical context, while the actual content is carried using standard FHIR attachment mechanisms.

This approach makes it possible to represent a wide range of attachment types within the same overall document pattern.

## What is considered an attachment?

In this context, an attachment may include, but is not limited to:

* Files such as PDF documents or images.
* Base64-encoded content in general.

The examples above are intentionally broad and are meant to illustrate possible types of unstructured.

## Why profile documents this way?

Using a Document Bundle combined with MedComDocumentObservation-based profiling allows MedCom to:

* Reuse established and widely supported FHIR patterns
* Support multiple attachment types within a consistent document structure
* Enable fast standardisation when new needs arise

This makes the approach particularly suitable as a starting point when considering new use cases for sharing unstructured data.

