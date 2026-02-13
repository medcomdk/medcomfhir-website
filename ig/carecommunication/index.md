# Home - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/carecommunication/ImplementationGuide/medcom.fhir.dk.carecommunication | *Version*:5.0.2 |
| Active as of 2026-02-13 | *Computable Name*:MedComCarecommunication |

### Introduction

This implementation guide (IG) is provided by MedCom to describe the use of FHIR ®© CareCommunication (Danish: Korrespondancemeddelelse) in message based exchange of data in Danish healthcare.

This IG contains profiles for MedCom CareCommunication. The purpose of a CareCommunication is to support digital communication between parties within healthcare, including amongst others the psychiatric and social area. The CareCommunication is used to ensure secure electronic communication of personally identifiable information and is most often used for ad hoc communication. However, the CareCommunication shall only be used in areas where no other MedCom standard is available, and it must not be used for cases with an acute nature. The CareCommunication supports:

* Exchange of digital files, also called attachments (Danish: Vedhæftede filer)
* Automatic sorting when receiving a CareCommunication based on nationally agreed categories (Danish: Kategori)
* Possibility for adding a topic (Danish: Emne)
* Clarify the sender of the message by requiring a signature, including name and role of the author, and relevant phone number.
* Enables showing the communication history and activity of the message based on the technical content.

More information about the [clinical guidelines for applications](https://medcomdk.github.io/dk-medcom-carecommunication/#11-clinical-guidelines-for-application) can be found here.

#### CareCommunication

The structure of a CareCommunication is depicted on the following diagram:

**Figure 1: Overview of the references between profiles in a MedCom CareCommunication standard **

 

CareCommunication follows the general MedCom FHIR messaging model, except that retract-message, modified-message and the carbon-copy destination is not allowed to be used. The following sections describe the overall purpose of each profile.

##### MedComCareCommunicationMessage

The [MedComCareCommunicationMessage](StructureDefinition-medcom-careCommunication-message.md) is a constraint of [MedComMessagingMessage](https://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-message.html) further to use the [MedComCareCommunicationMessageHeader](StructureDefinition-medcom-careCommunication-messageHeader.md) and to require exactly one [MedComCorePatient](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-patient.html) resource in the message. Furthermore, it contains rules that constrains the ValueSet of activities in the [MedComCareCommunicationProvenance](StructureDefinition-medcom-careCommunication-provenance.md) profile to only contain activities from the [MedComCareCommunicationMessageActivities ValueSet](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-careCommunication-messagingActivities.html), which contains the activities new-message, reply-message and forward-message.

All referenced resources within the message shall be contained in the entry list in MedCom CareCommunication.

##### MedComCareCommunicationMessageHeader

The [MedComCareCommunicationMessageHeader](StructureDefinition-medcom-careCommunication-messageHeader.md) constrains the [MedComMessagingMessageHeader](https://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-messageHeader.html) further to specify the fixed coding for this message and require a focus reference to a MedComCareCommunication profile.

##### MedComCareCommunication

The [MedComCareCommunication](StructureDefinition-medcom-careCommunication-communication.md) profile contains the main content of the message. It based on the Communication resource. MedComCareCommunication profile shall include a category code as defined in the [MedComCareCommunicationCategories ValueSet](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-careCommunication-categories.html) and it is allowed to add a topic of the message which may be in free text or from a regionally agreed list of topics that supports and elaborates the category.

The profile also includes one or more message segment that consists of a message text and associated signature or an attachment. In MedComCareCommunication profile message segments can be found under the element Communication.payload. A CareCommunication shall always include a message segment with a message text and associated signature. A CareCommunication may include zero or more message segments with an attachment. [Click here for more information about message segments](StructureDefinition-medcom-careCommunication-communication.md#message-segments)

Further, It is possible to add a more specific receiver, called recipient, and a more specific sender of a message. These can be found in the MedComCareCommunication profile. This may be used to include a more specific group of professionals or practitioner related to the care and wellbeing of the patient or citizen. An example could be to address a specific general practitioner by name, a specific hospital department or eventually a specific social unit within the social care sector in a municipality. [Click here for more information about sender and recipient.](StructureDefinition-medcom-careCommunication-communication.md#recipient-and-sender)

##### MedComCorePatient

The [MedComCorePatient](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-patient.html) profile is used in a CareCommunication. It is preferred that a CareCommunication is being sent for a patient with an official Danish civil registration number (CPR)-number. In cases where a CPR-number is not known, a replacement CPR-number (Danish: Erstatnings-CPR) shall be included.

##### MedComCorePractitionerRole and MedComCorePractitioner

The [MedComCorePractitionerRole](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-practitionerrole.html) and [MedComCorePractitioner](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-practitioner.html) profiles are used to describe the author in the signature of a message text by name and role (Danish: Stillingsbetegnelse). The MedComCorePractitionerRole is referenced from the MedComCareCommunication profile and MedComCorePractitionerRole includes a reference to the MedComCorePractitioner, why both profiles are shown on [Figure 1](#Fig1).

##### MedComMessagingOrganization

The [MedComMessagingOrganization](https://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-organization.html) profile is used in a CareCommunication to describe the sender and primary receiver of the notification. Please notice, that carbon-copy receiver is not allowed in a CareCommunication. Both the sender and receiver shall be identified using a SOR- and EAN-identifier.

##### MedComCareCommunicationProvenance

The [MedComCareCommunicationProvenance](https://medcomfhir.dk/ig/carecommunication/StructureDefinition-medcom-careCommunication-provenance.html) profile is used to track information about the activity of the communication, e.g. if the message describes a 'new-message' or 'reply-message'. Activity codes can be found in [MedComCareCommunicationMessageActivityCodes ValueSet](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-careCommunication-messagingActivities.html) on the Terminology IG. Note that all not activity codes are allowed for a CareCommunication. The allowed activity codes are: new-message, reply-message and forward-message.

In cases of a previously sent CareCommunications, MedComCareCommunicationProvenance references the metadata of the latest message which makes it possible to create a historic overview of the admission.

#### Timestamps

A CareCommunication includes several timestamps. These timestamps are present in the profiles [MedComCareCommunication](StructureDefinition-medcom-careCommunication-communication.md), [MedComCareCommunicationMessage](StructureDefinition-medcom-careCommunication-message.md), and [MedComCareCommunicationProvenance](StructureDefinition-medcom-careCommunication-provenance.md) and have different purposes. Most often, the timestamps will be identical, as the Bundle is typically created and sent in the same workflow. However, the Bundle.timestamp must differ from the other timestamps if the message is not sent in the same workflow in which the Bundle was created. The timestamps are as follows:

* Communication.payload.extension:date represents real world event, where the user presses "send" to send the CareCommunication. Each message segment, both string and attachment, will be registered with a date and time for this event.
* Bundle.timestamp represents the time bundle is generated.
* Provenance.occuredDateTime[x] represents the time the CareCommunication is sent, in a human-readable time
* Provenance.recorded represents the time the CareCommunication is sent, in a machine-readable time

It is assumed that in most cases, the above mentioned timestamps will be equal, as the events happpens instantly after eachother. However, there might be systems where the sending is delayed compared to the real world-event and bundle generation, hence will the Provenance timestamps differentiate from the Communication and Bundle timestamp.

It is optional to include the timestamp: Communication.payload:attachment.content[x]:contentAttachment.creation, which represents the date and time the attachment was created. [Click here for more information about this timestamp.](./StructureDefinition-medcom-careCommunication-communication.md#signature-and-relevant-information)

#### Narrative text

For guidance on how the narrative text should be structured, please refer to the general guide available [here.](https://medcomdk.github.io/MedComLandingPage/assets/documents/GeneralGovernanceFHIRStandards.html)

#### Examples

The [examples page](examples.md) illustrates a flow of CareCommunications sent between healthcare parties. This includes new message, replies and forwarded messages.

Additionally, does the page references new messages containing different type of content such as attachments, sender and recipient, priority, deceased patient and more.

#### Terminology

On [MedCom Terminology IG](https://medcomfhir.dk/ig/terminology/) all referenced CodeSystem and ValueSets developed by MedCom can be found.

#### Dependencies

This IG has a dependency to the [MedCom Core IG](https://medcomfhir.dk/ig/core/), [MedCom Messaging IG](https://medcomfhir.dk/ig/messaging/) and [DK-core v. 2.0.0](https://hl7.dk/fhir/core/), where the latter is defined by [HL7 Denmark](https://hl7.dk/). These dependencies are currently reflected in MedComCareCommunicationMessage, and MedComCareCommunicationMessageHeader which both inherits from profiles defined MedComMessaging IG. Further, it is reflected in references to MedComCorePatient, MedComCoreEncounter, MedComCoreOrganization and MedComMessagingOrganization.

### Download

Content in this IG can be downloaded in npm format under [Download](https://medcomfhir.dk/ig/carecommunication/downloads.html). This can be used to validate locale FHIR profiles against.

### Documentation

#### Non-technical guidelines

On the [introduction page for CareCommunication](https://medcomdk.github.io/dk-medcom-carecommunication/) the following documentation can be found:

* Clinical guidelines
* Use cases
* Mapping document from the previous OIOXML standard (XDIS91) to CareCommunication

### Governance

MedComs FHIR profiles and extension are managed in GitHub under MedCom: [Source code](https://github.com/medcomdk/dk-medcom-carecommunication)

A description of [governance concerning change management and versioning](https://medcomdk.github.io/MedComLandingPage/#4-change-management-and-versioning) of MedComs FHIR artefacts, can be found on the link.

#### Quality Assurance Report

In the Quality Assurance report (QA-report) for this IG, there is an error with the following description: **Reference is remote which isn’t supported by the specified aggregation mode(s) for the reference (bundled)**. The error occurs when creating instances of the profiles and is due to some elements having a Bundled flag {b}, however the referenced profile is not included in a Bundle in an instance, since the instance only represents a part of the entire message. This should not influence the implementation by IT-vendors.

### Contact

[MedCom](https://www.medcom.dk/) is responsible for this IG.

If you have any questions, please contact [fhir@medcom.dk](mailto:fhir@medcom.dk) or write to MedCom's stream in [Zulip](https://chat.fhir.org/#narrow/stream/315677-denmark.2Fmedcom.2FFHIRimplementationErfaGroup).



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "medcom.fhir.dk.carecommunication",
  "url" : "http://medcomfhir.dk/ig/carecommunication/ImplementationGuide/medcom.fhir.dk.carecommunication",
  "version" : "5.0.2",
  "name" : "MedComCarecommunication",
  "title" : "DK MedCom Carecommunication",
  "status" : "active",
  "date" : "2026-02-13T11:55:29+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        }
      ]
    }
  ],
  "description" : "The DK MedCom Carecommunication IG",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "packageId" : "medcom.fhir.dk.carecommunication",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7tx",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
        }
      ],
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "hl7_fhir_dk_core",
      "uri" : "http://hl7.dk/fhir/core/ImplementationGuide/hl7.fhir.dk.core",
      "packageId" : "hl7.fhir.dk.core",
      "version" : "3.4.0"
    },
    {
      "id" : "medcom_fhir_dk_core",
      "uri" : "http://medcomfhir.dk/ig/core/ImplementationGuide/medcom.fhir.dk.core",
      "packageId" : "medcom.fhir.dk.core",
      "version" : "3.0.1"
    },
    {
      "id" : "medcom_fhir_dk_messaging",
      "uri" : "http://medcomfhir.dk/ig/messaging/ImplementationGuide/medcom.fhir.dk.messaging",
      "packageId" : "medcom.fhir.dk.messaging",
      "version" : "4.0.2"
    },
    {
      "id" : "medcom_fhir_dk_terminology",
      "uri" : "http://medcomfhir.dk/ig/terminology/ImplementationGuide/medcom.fhir.dk.terminology",
      "packageId" : "medcom.fhir.dk.terminology",
      "version" : "2.0.1"
    },
    {
      "id" : "medcom_fhir_dk_messagedefinitions",
      "uri" : "http://medcomfhir.dk/ig/messagedefinitions/ImplementationGuide/medcom.fhir.dk.messagedefinitions",
      "packageId" : "medcom.fhir.dk.messagedefinitions",
      "version" : "1.0.0"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2025+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "false"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "default-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://medcomfhir.dk/ig/carecommunication/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.9.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2025+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "false"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "default-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://medcomfhir.dk/ig/carecommunication/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/733cef33-3626-422b-955d-d506aaa65fe1"
        },
        "name" : "1st message - Bruno Test Elmer",
        "description" : "1st message - Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/487ac745-fd11-4879-9b59-c08c7d47260e"
        },
        "name" : "1st message - Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "1st message - Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/b581c63c-181f-46f6-990d-b9942c576724"
        },
        "name" : "1st message - Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "1st message - Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/42cb9200-f421-4d08-8391-7d51a2503cb4"
        },
        "name" : "1st message - Instance of a MessageHeader resource used in a new message.",
        "description" : "1st message - Example of a MessageHeader in a new CareCommunication message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/94e65db8-2f0c-4a2c-a7c9-06a160d59a12"
        },
        "name" : "1st message - Instance of Communication resource used in a new message.",
        "description" : "1st message - Content of care communication message. Valid only if used in a bundle (message) - new message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c"
        },
        "name" : "1st message - New CareCommunication message.",
        "description" : "1st message - Example of a CareCommunication new message.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/af9b0255-1bdd-49c7-9d39-d652a587e4b2"
        },
        "name" : "1st message - The Provenance instance is only valid if used in a bundle (message) - new message",
        "description" : "1st message - The Provenance instance is only valid if used in a bundle (message) - new message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/d5bd2111-2576-48d3-84d4-8be0297a038d"
        },
        "name" : "2nd message - Instance of a MessageHeader resource used in a reply message.",
        "description" : "2nd message - Example of a MessageHeader in a reply CareCommunication message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/4c712bdc-1558-4125-a854-fa8b3a11f6ed"
        },
        "name" : "2nd message - Instance of Communication resource used in a reply message.",
        "description" : "2nd message - Content of care communication message. Valid only if used in a bundle (message) - reply message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/b56549f7-ed10-422d-8088-f7222b686e46"
        },
        "name" : "2nd message - Reply CareCommunication message",
        "description" : "2nd message - Example of a reply to a CareCommunication message.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/5c748aa5-64ab-47a9-a74b-033b04a19dae"
        },
        "name" : "2nd message - The Provenance instance is only valid if used in a bundle (message) - reply to new message",
        "description" : "2nd message - The Provenance instance is only valid if used in a bundle (message) - reply to new message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/22d65545-f98a-4b4d-ba36-51b48b3eb3de"
        },
        "name" : "3rd message - Bruno Test Elmer",
        "description" : "3rd message - Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/f20f31cd-5dd2-4a80-ab00-97f7109864a7"
        },
        "name" : "3rd message - Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "3rd message - Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/82210440-6826-44fc-9fc8-2a29bab6a5c2"
        },
        "name" : "3rd message - Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "3rd message - Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/4dff3695-218d-4878-838a-5f23cbba6f82"
        },
        "name" : "3rd message - Instance of a MessageHeader resource used in a reply message.",
        "description" : "3rd message - Example of a MessageHeader in a reply CareCommunication message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/d2b79da8-acda-4985-a8ad-5ed7ec9a2800"
        },
        "name" : "3rd message - Instance of Communication resource used in a reply message.",
        "description" : "3rd message - Content of care communication message. Valid only if used in a bundle (message) - reply message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/3dcb5618-3055-406a-9034-1b8fc8de0fea"
        },
        "name" : "3rd message - Reply CareCommunication message",
        "description" : "3rd message - Example of a reply to a CareCommunication message.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/73232102-649c-4c63-88f5-94ce189b94a7"
        },
        "name" : "3rd message - The Provenance instance is only valid if used in a bundle (message) - new message being forwarded",
        "description" : "3rd message - The Provenance instance is only valid if used in a bundle (message) - new message being forwarded",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/c0426e3e-978f-46e8-a366-a30f27854b0a"
        },
        "name" : "4th message - Forward CareCommunication message",
        "description" : "4th message - Example of a forward CareCommunication message.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/aac67161-d0de-4933-a78c-060beafb4814"
        },
        "name" : "4th message - Instance of a MessageHeader resource used in a forward message.",
        "description" : "4th message - Example of a MessageHeader in a forward CareCommunication message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/5485bde0-8246-4f46-b1a1-1f14e0a7a856"
        },
        "name" : "4th message - Instance of Communication resource used in a forward message.",
        "description" : "4th message - Content of care communication message. Valid only if used in a bundle (message) - forward message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/5c689ef2-c6d7-4c74-adb8-303b772532e2"
        },
        "name" : "4th message - The Provenance instance is only valid if used in a bundle (message) - new message being forwarded",
        "description" : "4th message - The Provenance instance is only valid if used in a bundle (message) - new message being forwarded",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/2654e182-cfee-4537-b744-e36231ebe2f3"
        },
        "name" : "5th message - Instance of a MessageHeader resource used in a reply message.",
        "description" : "5th message - Example of a MessageHeader in a reply CareCommunication message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/d148fa55-3201-4a18-a7b0-bce67bf597a6"
        },
        "name" : "5th message - Instance of Communication resource used in a reply message.",
        "description" : "5th message - Content of CareCommunication message. Valid only if used in a bundle (message) - reply message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/d11968f5-4bdf-4b50-b146-a8e1cc890fc3"
        },
        "name" : "5th message - Reply CareCommunication message",
        "description" : "5th message - Example of a reply CareCommunication message.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/50c51ef0-00b0-429a-b212-35ee0773fd5a"
        },
        "name" : "Bruno Test Elmer",
        "description" : "Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5"
        },
        "name" : "Bruno Test Elmer",
        "description" : "Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/b8e3000b-3b95-43e2-8e5b-fc347d0a2411"
        },
        "name" : "Bruno Test Elmer",
        "description" : "Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/e0c57a9f-9b04-43b4-9355-76f3564a1f10"
        },
        "name" : "Bruno Test Elmer",
        "description" : "Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/79fc4a5c-5fca-4389-8740-89607ce07f2d"
        },
        "name" : "Bruno Test Elmer",
        "description" : "Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/833cef33-3726-433b-855d-e566aaa65fe1"
        },
        "name" : "Bruno Test Elmer",
        "description" : "Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/e8dd504e-551f-11ed-bdc3-0242ac120002"
        },
        "name" : "Bruno Test Elmer",
        "description" : "Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/790daa1e-bf50-4ee0-af8c-31c493e272bb"
        },
        "name" : "CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message",
        "description" : "CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - new message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/6de0806d-7050-4db8-8003-0c72aee52948"
        },
        "name" : "CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - reply to OIOXML-message",
        "description" : "CareCommunication example. The Provenance instance is only valid if used in a bundle (message) - reply to OIOXML-message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/f98ed410-54fe-11ed-bdc3-0242ac120002"
        },
        "name" : "Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/b2f762be-6994-44da-a214-72c765655b3e"
        },
        "name" : "Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/ae899cbd-933b-4581-9a16-bd2da73f06a0"
        },
        "name" : "Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/33153a8a-97c8-4f55-b7ad-bbedee8bd0e1"
        },
        "name" : "Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/4e03a9cd-4d75-4e01-9420-7f0b4ecff305"
        },
        "name" : "Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/bf24f51c-a99b-47db-a785-8c5ef22ebc27"
        },
        "name" : "Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/b75abdfa-5519-11ed-bdc3-0242ac120002"
        },
        "name" : "Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/0e0e7f78-5520-11ed-bdc3-0242ac120002"
        },
        "name" : "Example of a reciever organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CareTeam"
          }
        ],
        "reference" : {
          "reference" : "CareTeam/fb1d34fe-6672-11ed-9022-0242ac120002"
        },
        "name" : "Example of a recipient in terms of a careteam.",
        "description" : "Example of a recipient in terms of a careteam.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/0ece868c-6a72-4aa3-8a96-2d985ab630c7"
        },
        "name" : "Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/e17d03b8-e7fd-4654-bc9c-cb2eb5dda71f"
        },
        "name" : "Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/c39b114b-a9c1-46bb-ac30-e3ce71f28c3a"
        },
        "name" : "Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/fae4c8cf-e5d6-404d-867d-97ffa49a1c58"
        },
        "name" : "Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/85669d18-2bb3-4c6e-80d2-e039a63a521c"
        },
        "name" : "Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/c5c393ee-5519-11ed-bdc3-0242ac120002"
        },
        "name" : "Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/fd0666dc-551f-11ed-bdc3-0242ac120002"
        },
        "name" : "Example of a sender organization with a SOR and an EAN identifier.",
        "description" : "Example of an organization with a SOR and an EAN identifier.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/375293b8-2f91-4d08-b13a-83ea76b6d001"
        },
        "name" : "Instance of a MessageHeader resource used in a new message with journal note in message text.",
        "description" : "Example of a MessageHeader in a new CareCommunication message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/025bdfdd-397b-43e2-9e8c-272664a6e471"
        },
        "name" : "Instance of a MessageHeader resource used in a new message.",
        "description" : "Example of a MessageHeader in a new CareCommunication message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/3076d9b0-5521-11ed-bdc3-0242ac120002"
        },
        "name" : "Instance of a MessageHeader resource used in a reply to an OIOXML message.",
        "description" : "MessageHeader for CareCommunication reply to an OIOXML message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/d8434eb5-8286-48f8-a590-4a27175ed82f"
        },
        "name" : "Instance of Communication resource used in a new message.",
        "description" : "Content of care communication message. Valid only if used in a bundle (message) - new message",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/c34e8284-b353-468f-a2ea-f6ef6330292c"
        },
        "name" : "Instance of Communication resource used in a new message. The message includes a journal note and author information in the messagetext.",
        "description" : "Content of care communication message. Valid only if used in a bundle (message) - new message with attachment",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Communication"
          }
        ],
        "reference" : {
          "reference" : "Communication/f54efd18-5520-11ed-bdc3-0242ac120002"
        },
        "name" : "Instance of Communication resource used in a reply message. A reply to an OIOXML message",
        "description" : "Content of care communication message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/303b2782-e2bf-4780-a8a5-c4b02b0e1c66"
        },
        "name" : "MedCom Core Encounter",
        "description" : "Example of a simple MedCom Core Encounter",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/2a5b01e4-8c2c-481b-ab12-e383d8e00629"
        },
        "name" : "MedCom Core Encounter",
        "description" : "Example of a simple MedCom Core Encounter",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-careCommunication-communication"
        },
        "name" : "MedComCareCommunication",
        "description" : "Care related communication between two or more parties in Danish healthcare",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-careCommunication-message"
        },
        "name" : "MedComCareCommunicationMessage",
        "description" : "The CareCommunication is used to ensure secure electronic communication of personally identifiable information and is most often used for ad hoc communication between parties in Danish Healthcare. However, the CareCommunication shall only be used in areas where no other MedCom standard is available, and it must not be used for cases with an acute nature.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-careCommunication-messageHeader"
        },
        "name" : "MedComCareCommunicationMessageHeader",
        "description" : "Message header for CareCommunication message",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-careCommunication-provenance"
        },
        "name" : "MedComCareCommunicationProvenance",
        "description" : "Provenance information about the current and preceeding message.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c"
        },
        "name" : "New CareCommunication message.",
        "description" : "Example of a CareCommunication new message.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/gfd00bc2-9c26-4174-934e-f6e4360845de"
        },
        "name" : "New CareCommunication message. Including journal note in the message text.",
        "description" : "Example of a CareCommunication new message with journal note in the message text.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/eda90bde-54f9-11ed-bdc3-0242ac120002"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/8bf63050-5504-11ed-bdc3-0242ac120002"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/8adda490-63ef-4d97-86f0-14553628e53a"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/2e8c8e54-388c-4547-954c-1917652986da"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/8dc790ba-8d93-4585-b91c-af8225b0796d"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/3b1f7d8c-540e-474c-b079-89284c2de621"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/ac1dfd45-a135-47b8-acd7-db0405e21dd0"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/e0aca758-487a-4536-b750-35753cbef090"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/7f3c3dbb-1b40-41f7-8acc-fb82eb3d4dd3"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/35bb99e4-551a-11ed-bdc3-0242ac120002"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/7cae09e0-5501-11ed-bdc3-0242ac120002"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/2b80d2b8-5520-11ed-bdc3-0242ac120002"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ActorDefinition"
          }
        ],
        "reference" : {
          "reference" : "ActorDefinition/ProducerActor"
        },
        "name" : "Producer of FHIR resources",
        "description" : "The system that creates the FHIR resources",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/k7bfbc0c-553d-11ed-bdc3-0242ac120002"
        },
        "name" : "Reply CareCommunication message. Reply to OIOXML Message",
        "description" : "Example of a reply to an OIOXML message.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/58c811a5-4082-44eb-9d66-ccbb112d4973"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/7ffff970-5504-11ed-bdc3-0242ac120002"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/ed8d4f6a-a2e4-4343-b823-37ca90c1872a"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/97511212-12e6-4182-a42b-cf232c0c117c"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/8659596f-6ef4-421c-9ecd-94b65e4d5ff8"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/6397c13d-7cb2-4834-871c-47f528bb79cf"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/5d37f9e1-2beb-4528-81bf-d521d108c738"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/b12c1357-62f1-455e-b07a-3ebf454c50bc"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/20eac382-551a-11ed-bdc3-0242ac120002"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/ad055a3d-16b6-41f9-891a-7dd73eecaf03"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/1e2d6388-5520-11ed-bdc3-0242ac120002"
        },
        "name" : "Simple practitioner with a name",
        "description" : "Simple practitioner with a name",
        "exampleBoolean" : true
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "dependencies.html"
            }
          ],
          "nameUrl" : "dependencies.html",
          "title" : "Dependencies",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "downloads.html"
            }
          ],
          "nameUrl" : "downloads.html",
          "title" : "Downloads",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "examples.html"
            }
          ],
          "nameUrl" : "examples.html",
          "title" : "Examples",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "extensions.html"
            }
          ],
          "nameUrl" : "extensions.html",
          "title" : "Extensions",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profiles.html"
            }
          ],
          "nameUrl" : "profiles.html",
          "title" : "Profiles",
          "generation" : "html"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/maps"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
