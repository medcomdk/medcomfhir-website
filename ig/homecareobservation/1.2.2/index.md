# Home - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/homecareobservation/ImplementationGuide/medcom.fhir.dk.homecareobservation | *Version*:1.2.2 |
| Active as of 2026-06-03 | *Computable Name*:MedComHomeCareObservation |

> This IG is developed to be part of a production trial of the communication between the general practitioner and municipal acute care team.

# Home

## Introduction

This implementation guide (IG) is provided by MedCom to describe the use of FHIR ®© in message based exchange of structured health data between the municipal acute care team and the general practitioner.

This IG contains profiles for MedCom HomeCareObservation (Danish: Kommunale Prøvesvar). The purpose of the HomeCareObservation is to support digital structured communication of results and observations performed and produced by the municipal acute care team. The HomeCareObservation will be sent from the municipal acute care team to the general practitioner on the condition that the general practitioner previously has requisitioned the acute care team to perform an emergency visit. With HomeCareObservation the quality of the results and observations (hereafter mentioned as observations results) are increased as structured data concerning sender, producer of the results, analysis codes and clinical observations, among others, are part of the HomeCareObservation. This allows the general practitioner to easily create an overview of the citizens health data.

The MedCom HomeCareObservation supports following content in relation to healthcare:

* exchange of observation results that the municipal acute care team has performed, analyzed and produced
* exchange of clinical observations (nursing assessments) that are necessary in order to understand and interpret the citizens overall results and health status
* exchange of analysis comments that are necessary in order to understand and interpret individual analysis and results
* exchange of relevant files (e.g. images or PDF)

[More information about the clinical guidelines for applications can be found here.](https://medcomdk.github.io/dk_HomeCareObservations/#11-clinical-guidelines-and-documentation)

## MedCom HomeCareObservation

The structure of a MedComHomeCareObservation is despicted on the following diagram:

**Figure 1: Overview of the references between profiles in a MedCom HomeCareObservation. **

 

MedCom HomeCareObservation follows the general MedCom FHIR messaging model, except that the carbon-copy destination is not allowed to use. The following sections describe the overall purpose of each profile.

### MedComHomeCareObservationMessage

The MedComHomeCareObservationMessage profile is used to bundle all observations and relevant information together. All referenced resources in the HomeCareObservationMessage shall be contained in the entry list in MedComHomeCareObservationMessage.

The [MedComHomeCareObservationMessage](StructureDefinition-medcom-homecareobservation-message.md) is a constraint of the [MedComMessagingMessage](https://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-message.html) further to use the [MedComHomeCareObservationMessageHeader](StructureDefinition-medcom-homecareobservation-messageheader.md) and to require exactly one [MedComCorePatient](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-patient.html). Furthermore, it contains rules that constrains the ValueSet of activities in the [MedComMessagingProvenance](https://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-provenance.html) profile to only contain activities from the [MedComHomeCareObservationMessageAcitivityCodes](http://medcomfhir.dk/ig/terminology/ValueSet-medcom-HomeCareObservation-messagingActivities.html) ValueSet, which contains activities such as new-message, forward-message, and other activities triggering the message.

### MedComHomeCareObservationMessageHeader

The [MedComHomeCareObservationMessageHeader](StructureDefinition-medcom-homecareobservation-messageheader.md) constrains the [MedComMessagingMessageHeader](https://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-messageHeader.html) further to specify the fixed coding for this message and constrains the use of carbon-copy destination.

### MedComHomeCareDiagnosticReport

The [MedComHomeCareObservationDiagnosticReport](StructureDefinition-medcom-homecareobservation-diagnosticreport.md) profile contains the main content of the HomeCareObservation message. It is inherited from the profile [MedComCoreDiagnosticReport](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-diagnosticreport.html). The MedComHomeCareObservationDiagnosticReport shall include observation results performed and produced by the municipalties acute care team. Futher shall the MedComHomeCareDiagnostiscRepport include an information about the status of the observation results.
 The profile also includes information about the performer, i.e the person who performed and produced observations results. The perfomer informations consist of a signature that requires the name, title and relevant telephone number.Further, this profile also contains the clinical observations (nursing assessments) regarding the citizens overall results and health status.

This profile also allows to send relevant attachments from the acute home care visit. Attachment that are allowed to sendt with the HomeCareDiagnosticReport are: pdf, jpeg, png, tiff or gif.

### MedComHomeCareObservation

The [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md) profile inherits from the MedComCoreObservation profile. This profile includes infromation about what observation was performed, what date & time, by whom, and what result was obtained. Too expres what observation was performed a Observation.code.coding elemen shall be used. In HomeCareObservation it is allowed to ude NPU codes for observations and MedCom (MCS) codes for observations. [Click here to see the ValueSet for NPU codes.](https://medcomfhir.dk/ig/terminology/ValueSet-NPUObservationCodesValueSet.html)

[Click here to see the ValueSet for MCS codes.](https://medcomfhir.dk/ig/terminology/ValueSet-MedComObservationValueSet.html)

It is also allowed to send an analysis comment on the individual result, if this comment is relevant to include. Further it is required to send information that the result of the observation is not reference assessed (Dansk: ikke reference vurderet).

### MedComCorePatient

The [MedComCorePatient](http://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-patient.html) profile is used in a MedComHomeCareObservations message to represent the patient.

### MedComMessagingProvenance

The [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-provenance.html) profile is used to track information about the activity of the HomeCareObservation message, e.g 'new-message' or 'modify-message'. The allowed activity codes for HomeCareObservation message can be found in [MedComHomeCareObservationMessageAcitivityCodes](http://medcomfhir.dk/ig/terminology/ValueSet-medcom-HomeCareObservation-messagingActivities.html) on the Terminology IG.

### MedComMessagingOrganization

The [MedComMessagingOrganization ](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-organization.html) profile is used in the MedComHomeCareObservationMessageHeader profile to describe the sender organization of the HomeCareDiagnosticReport. The sender organization can be the municipality to which the acute ceare team belongs.

### MedComRequesterOrganization

The [MedComRequesterOrganization](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-requesterorganization.html) represents the receiver of the HomeCareObservation message. The receiver information consist of the initials of the general practitioner that requisitioned acute homecare visit and observation, if known, and identifiers such as SOR-, EAN and Ydernummer-identifier to represent the general practitioner. If the initials of the general practitioner are unknown, then the code "unknown" form the [data-absent-reason ValueSet](http://hl7.org/fhir/R4/valueset-data-absent-reason.html) shall be sent. In MedComRequesterOrganization the contact.name.given shall be used to express the initials of the general practitioner. The standard follows HL7 rulse to expres initals. [Click here to read the rules](http://hl7.org/fhir/R4/datatypes.html#HumanName)

### MedComProducerOrganization

The [MedComProducerOrganization](https://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-producer-organization.html) profile is used in a HomeCareObservation message to represent the organization that is responsible for performing and analysing, thereby producing, the observation results e.g. acute careteam. The MedComProducerOrganization shall be identified using municipality SOR-ID, and a producer-ID. The producer-ID consists of a [three letter code, which is displayed on the terminology IG](http://medcomfhir.dk/ig/terminology/CodeSystem-MedComProducentID.html). In a receiver system, the interpretation of the two codes will together state that an acute care team from e.g. Aarhus municipality is the producer of the results.

### MedComCoreMedia

The [MedComCoreMedia](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-media.html) profile is used in HomeCareObservation message to represents the relevant attachements added to the HomeCareDagnosticReport. MedComCoreMedia is referred from HomCareDiagnosticReport.media.link.

If the attached file are send, it is a requirement that the ID and title of the attached file shall be sent. Furthermore, MedCom recommended that the name of the author, as well as the time of creation, of the attached file can be signed and sent with it.

## Timestamps

The HomeCareObservation message includes several timestamps. These timestamps are present in the profiles [MedComHomeCareObservationDiagnosticReport](StructureDefinition-medcom-homecareobservation-diagnosticreport.md), [MedComHomeCareObservation](StructureDefinition-medcom-homecare-observation.md),[MedComHomeCareObservationMessage](StructureDefinition-medcom-homecareobservation-message.md), and [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-provenance.html) and have different purposes:

* Observation sampling date and time (Danish: Prøvetagningsdato og tidspunkt) 
* HomeCareObservation.effective.dateTime represents the date and time when the sample was performed and produced.
 
* DiagnosticReport generation date and time (Danish: Genereringsdato og tidspunkt) 
* HomeCareDiagnosticReport.issued represents the dateTime the version of the report was made.
 
* Sending date and time (Danish: Afsendelsesdato og tidspunkt) 
* Bundle.timestamp represents the time Bundle is generated.
* Provenance.occuredDateTime[x] represents the time the HomeCareObservation message is sent, in a human-readable time
* Provenance.recorded represents the time the HomeCareObservation is sent, in a machine-readable time
 

It is assumed that in most cases, the Bundle.timestamp, provenance.occuredDateTime[x] and provenance.recorded will be equal,as the events happens instantly after eachother. However, there might be systems where the sending is delayed compared to the real world-event and bundle generation, hence will the Provenance timestamps differentiate from Bundle timestamp.

## Modification and Cancellation of the HomeCareObservationMessage

It is allowed to modify and cancel a HomeCareObservation Message. If the message is modified or cancelled it shall be clearly indicated on the user interface. When sending a modification or cancellation of the HomeCareObservation the MessageHeader.id should be the same so the receiver system can see if there are some changes or if the message has been cancelled.

### Modify HomeCareObservation Message

It is a requirement that the sender of HomeCareObservation message can modify an already sent HomeCareObservation message if the user wants to correct the content. The modification can only happen if the modification is regarding observation sampling date and time, observation result, a clinical comment (overall nursing assessment), an analysis comment, content of an attached file (as long as the content is send on the correct civil registration number (Danish: CPR-nummer)), the initials of the requisitioning general practitioner or sender's signature. When sending a modification it is requirede to have a Provenance instance referencing the message being modified, and a Provenance instance referencing the modification message, where Provenance.entity.what.reference element points to the MessageHeader.id of the previous message.the It is also required that the Provenance instance referencing the modification message, have a Provenance.entity.role that shall be **revision** and the Provenance.activity shall be **modify-message**.

The receiver system shall be able to receive and show modification of an already received HomeCareObservation message. It is also required that the receiver system clearly shows what was modified in the received correction, in the user interface of the receiver system. Further, there shall be traceability to previously received HomeCareObservation message in the receiver system.

### Cancel HomeCareObservation Messsage

The sender of the HomeCareObservation Message shall be able to cancel the already sent HomeCareObservation Message if the message has been sent on an incorrect civil registration number, if the receiver is incorrect or if the content in an attachment is concerning an incorrect civic registration number. If the sender cancel the already sent HomeCareObservation Message then the cancellation applies to whole message and not only to the wrong observation result. If the user wants to cancel the message, then the reason of cancellation shall be written in the clinical comment. Alternatively, the user can also add one of MedCom's predefined cancellation reason phrases that should be added to the clinical comment. [Click here to read MedCom's predefined phrases.](https://medcomfhir.dk/ig/terminology/CodeSystem-medcom-messaging-cancellation-reason.html). The cancellation reason shall be added to the DiagnosticRepport.conclusion element.

There shall be a Provenance instance referencing to the message being cancelled, and a Provenance instance referencing the cancellation message, where Provenance.entity.what.reference element points to the message being cancelled. In the latter instance of the Provenance resource, the Provenance.entity.role shall be **removal** and the Provenance.activity shall be **retract-message**.

The receiver system shall be able to receive a cancellation of an already received HomeCareObservation Message and show clearly that the message has been cancelled in the user interface. The cancelled HomeCareObservation Message should not be deleted for reasons of subsequent traceability, but should instead be archived and clearly marked as cancelled.

## Simplified examples of the HomeCareObservation Message

### HomeCareObservation Message-Spot test and EKG image

Below can a simplified example of a new HomeCareObservation Message be seen. This HomeCareObservation meessage contains results form performed spot test and an attachment containg performed EKG. Since the example is a new message is the activity in the Provenance instance 'new-message'.

[Click here to see the generated example of HomeCareObservation containing results from Spot test and EKG image](./Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.md)

### HomeCareObservation Message-Urinestix and refused consent

Below can a simplified example of a new HomeCareObservation Message be seen. This HomeCareObservation meessage contains urinestix results and refused consent to exchange the results. Since the example is a new message is the activity in the Provenance instance 'new-message'. [Click here to see the generated example of HomeCareObservation caontaing result from Urinestix and refusec consent](./Bundle-faa0c104-0ebf-49cb-bad1-9e0f59436e18.md)

### HomeCareObservation Message-TOBS with clinical and analysis comment

Below can a simplified example of a new HomeCareObservation Message be seen. This HomeCareObservation meessage contains TOBS results and clinical and analysis comment. Since the example is a new message is the activity in the Provenance instance 'new-message'. [Click here to see the generated example of HomeCareObservation containg TOBS result and clinical and analysis comment](./Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.md)

### Modify HomeCareObservation Message

Below can a simplified example of a modified HomeCareObservation Message be seen. This HomeCareObservation meessage is a modification of HomeCareObservation message containing TOBS results and clinical and analysis commet. Since the example is a modification message the activity in the provenacne instance shall be 'modified-message'. [Click here to see the generated example of simplified example of modify HomeCareObservation Message](./Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.md)

### Cancel HomeCareObservation Messsage

Below can a simplified example of a modified HomeCareObservation Message be seen. This HomeCareObservation meessage is a cancellation of HomeCareObservation message containing TOBS results and clinical and analysis commet. Since it is a cancellation messag there shall be two provenance instances; one provenance instance for the message that was sent frist and one for the message that cancels the first one. [Click here to see the generated example of simplified example of cancelled HomeCareObservation Message](./Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.md)

## Terminology

On [MedCom Terminology IG](http://medcomfhir.dk/ig/terminology/) all referenced CodeSystem and ValueSets developed by MedCom can be found.

## Dependencies

This IG has a dependency to the [MedCom Core IG](http://medcomfhir.dk/ig/core/), [MedCom Messaging IG](http://medcomfhir.dk/ig/messaging/), [MedCom Terminology IG](http://medcomfhir.dk/ig/terminology/) and [DK-core v. 2.0.0](https://hl7.dk/fhir/core/), where the latter is defined by [HL7 Denmark](https://hl7.dk/). These dependencies are currently reflected in MedComHomeCareMessage, and MedComHomeMessageHeader which both inherits from profiles defined MedComMessaging IG. Further, it is reflected in references to MedComCorePatient, MedComCoreEncounter, MedComCoreOrganization and MedComMessagingOrganization.

## Download

Content in this IG can be downloaded in npm format under [Download](downloads.md). This can be used to validate locale FHIR profiles against.

## Documentation

On the [introduction page for HomeCareObservations](https://medcomdk.github.io/dk_HomeCareObservations/) the following documentation can be found:

* Clinical guidelines
* Use cases

## Quality Assurance Report

In the Quality Assurance report (QA-report) for this IG, there is an error with the following description: **Reference is remote which isn’t supported by the specified aggregation mode(s) for the reference (bundled)**. The error occurs when creating instances of the profiles and is due to some elements having a Bundled flag {b}, however the referenced profile is not included in a Bundle in an instance, since the instance only represents a part of the entire message. This should not influence the implementation by IT-vendors.

## Contact

[MedCom](https://www.medcom.dk/) is responsible for this IG.

If you have any questions, please contact [fhir@medcom.dk](mailto:fhir@medcom.dk) or write to MedCom's stream in [Zulip](https://chat.fhir.org/#narrow/stream/315677-denmark.2Fmedcom.2FFHIRimplementationErfaGroup).

#### Tilgængelighedserklæring

[tilgængelighedserklæring](https://www.was.digst.dk/medcomfhir-dk-ig-)



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "medcom.fhir.dk.homecareobservation",
  "url" : "http://medcomfhir.dk/ig/homecareobservation/ImplementationGuide/medcom.fhir.dk.homecareobservation",
  "version" : "1.2.2",
  "name" : "MedComHomeCareObservation",
  "title" : "MedCom HomeCareObservation",
  "status" : "active",
  "date" : "2026-06-03T08:09:15+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        },
        {
          "system" : "email",
          "value" : "fhir@medcom.dk"
        }
      ]
    }
  ],
  "description" : "Communication between general practitioners and municipal acute care team.",
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
  "packageId" : "medcom.fhir.dk.homecareobservation",
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
      "version" : "7.1.0"
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
      "version" : "5.3.0"
    },
    {
      "id" : "hl7_fhir_dk_core",
      "uri" : "http://hl7.dk/fhir/core/ImplementationGuide/hl7.fhir.dk.core",
      "packageId" : "hl7.fhir.dk.core",
      "version" : "3.4.0"
    },
    {
      "id" : "medcom_fhir_dk_terminology",
      "uri" : "http://medcomfhir.dk/ig/terminology/ImplementationGuide/medcom.fhir.dk.terminology",
      "packageId" : "medcom.fhir.dk.terminology",
      "version" : "2.0.2"
    },
    {
      "id" : "medcom_fhir_dk_core",
      "uri" : "http://medcomfhir.dk/ig/core/ImplementationGuide/medcom.fhir.dk.core",
      "packageId" : "medcom.fhir.dk.core",
      "version" : "2.4.0"
    },
    {
      "id" : "medcom_fhir_dk_messaging",
      "uri" : "http://medcomfhir.dk/ig/messaging/ImplementationGuide/medcom.fhir.dk.messaging",
      "packageId" : "medcom.fhir.dk.messaging",
      "version" : "3.0.0"
    },
    {
      "id" : "medcom_fhir_dk_messagedefinitions",
      "uri" : "http://medcomfhir.dk/ig/messagedefinitions/ImplementationGuide/medcom.fhir.dk.messagedefinitions",
      "packageId" : "medcom.fhir.dk.messagedefinitions",
      "version" : "1.0.1-trial-use"
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
            "valueString" : "2023+"
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
            "valueString" : "apply-publisher"
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
            "valueString" : "default-publisher"
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
            "valueString" : "http://medcomfhir.dk/ig/homecareobservation/history.html"
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
            "valueString" : "2023+"
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
            "valueCode" : "apply-publisher"
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
            "valueCode" : "default-publisher"
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
            "valueString" : "http://medcomfhir.dk/ig/homecareobservation/history.html"
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
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/b56708c6-2df3-4e4a-a110-2f924b9fc072"
        },
        "name" : "Acute nurse",
        "description" : "Acute nurse",
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
          "reference" : "Practitioner/be9f367d-a84a-4815-90a8-c83a03813fd8"
        },
        "name" : "Acute nurse",
        "description" : "Acute nurse",
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
          "reference" : "Practitioner/70f14d25-0979-4192-8da2-0c0a3950f4b1"
        },
        "name" : "Acute nurse",
        "description" : "Acute nurse",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/1e2351e2-77df-4135-a77b-6a4c39e4a4ca"
        },
        "name" : "Basofilocyt observation",
        "description" : "Basofilocyt observation performed on a subject by the acute care team",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
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
          "reference" : "Patient/99f5578f-c9d3-4d8c-aa3e-21690e03e27c"
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
          "reference" : "Patient/bbcd4817-1c4b-4089-a712-346f65ec16f9"
        },
        "name" : "Bruno Test Elmer",
        "description" : "Patient described with minimal information. Valid only if used in a Bundle.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/7fcb76a7-839b-4392-a2ff-f30035faca34"
        },
        "name" : "C-reaktive protein [CRP];P",
        "description" : "C-reaktive protein [CRP] test performed by acute care team on the subject.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/4f013d3a-575c-447d-83e1-7a5fb7f7b0de"
        },
        "name" : "Cancelled HomeCareDiagnosticReport: TOBS and ABC examination",
        "description" : "Example of a cancelled HomeCareDiagnosticReport, with TOBS and ABC examination of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/470d39e4-d3f9-4301-82eb-b957ba33475e"
        },
        "name" : "Coagulation factor test",
        "description" : "Coagulation factor on the subject",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/6bf03841-8397-4a2a-9f9a-8966b0cfa571"
        },
        "name" : "Consciousness",
        "description" : "Consciousness of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/b22fcbe0-4977-433e-ad1c-d6545bc8c1cb"
        },
        "name" : "Eosinofilocyt observation",
        "description" : "Eosinofilocyt observation performed on a subject by the acute care team",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/42541447-b58c-4a1a-9514-02b80494bbd3"
        },
        "name" : "Example of a reciever organization with a SOR, an EAN  and Ydrenummer identifier.",
        "description" : "Example of an organization with a SOR and an EAN and Ydrenummer identifier.",
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
          "reference" : "Organization/d1c1fa90-2c7e-4dd7-b2e8-e40281635a98"
        },
        "name" : "Example of a reciever organization with a SOR, an EAN  and Ydrenummer identifier.",
        "description" : "Example of an organization with a SOR and an EAN and Ydrenummer identifier.",
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
          "reference" : "Organization/1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1"
        },
        "name" : "Example of a reciever organization with a SOR, an EAN  and Ydrenummer identifier.",
        "description" : "Example of an organization with a SOR and an EAN and Ydrenummer identifier.",
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
          "reference" : "Organization/ef5cb9a6-835f-4d18-a34e-179c578b9a2a"
        },
        "name" : "Example of a sender organization with a SOR, an EAN identifier, and ProdcentID",
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
          "reference" : "Organization/72cc3a2c-1dda-4b95-b50a-0f7ac19640f4"
        },
        "name" : "Example of a sender organization with a SOR, and an EAN identifier and producentID.",
        "description" : "Example of an organization with a SOR, an EAN identifier and ProducentID.",
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
          "reference" : "Organization/a0330c62-fe29-4719-83fa-a94959084f29"
        },
        "name" : "Example of a sender organization with a SOR, and an EAN identifier and producentID.",
        "description" : "Example of an organization with a SOR, an EAN identifier and ProducentID.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/0e4a5452-1804-42d3-82ed-484df20a09f0"
        },
        "name" : "Glucose measurement",
        "description" : "Glucose measurement on the subject.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1"
        },
        "name" : "Heart Rate",
        "description" : "HeartRate of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/babb316c-796c-4d10-b97b-45274b5a0c44"
        },
        "name" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - cancelled message",
        "description" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - cancelled message",
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
          "reference" : "Provenance/8ce47645-4d69-4fa6-a51d-c2bb49d87efb"
        },
        "name" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - modified message",
        "description" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - modified message",
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
          "reference" : "Provenance/4c284936-5454-4116-95fc-3c8eeeed2400"
        },
        "name" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message",
        "description" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message",
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
          "reference" : "Provenance/4c845e97-04b2-40e9-ab51-4c5bf080196f"
        },
        "name" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message",
        "description" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message",
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
          "reference" : "Provenance/008e1c02-605d-458e-8cb8-3eeb16a69aac"
        },
        "name" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message",
        "description" : "HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/870333ac-3134-4ae6-8257-86e0b0537c5f"
        },
        "name" : "HomeCareDiagnosticReport: spot test and EKG",
        "description" : "Spot test and EKG performed by the acute care team on a subject.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/6d08f000-33cc-41f3-a7c2-c086d53d31a7"
        },
        "name" : "HomeCareDiagnosticReport: Urine dipsticks tests and refused consent",
        "description" : "Urine dipstick tests performed by the acute care team on a subject, that has refused consent.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/efb1ed12-6a5d-4342-9572-861071644e46"
        },
        "name" : "HomeCareDiagnosticReport:TOBS and ABC examination",
        "description" : "TOBS and ABC examination of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/5f341feb-9a20-463a-96cc-a9ca8ace5567"
        },
        "name" : "HomeCareObservation message-retracted.",
        "description" : "Example of a retracted HomeCareObservation with clinical and analysis comment.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
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
        "name" : "HomeCareObservation message-Spot test and EKG image",
        "description" : "Example of a HomeCareObservation message-Spot Test and EKG image.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/faa0c104-0ebf-49cb-bad1-9e0f59436e18"
        },
        "name" : "HomeCareObservation message-Urine dipsticks and subject refused consent.",
        "description" : "Example of a HomeCareObservation message-Urine dipsticks and subject refused consent.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/401cbc36-db1e-4fe0-bf90-6df331dde179"
        },
        "name" : "HomeCareObservation with clinical and analysis comment.",
        "description" : "Example of a HomeCareObservation with clinical and analysis comment.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/36cb86f1-a01a-4115-a84d-9390aa0ddcbd"
        },
        "name" : "Instance of a MessageHeader resource used in a cancelled message.",
        "description" : "Example of a MessageHeader in a cancelled HomeCareDiagnosticReport message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/07eb074b-be00-47e5-8bcb-484990a1a97e"
        },
        "name" : "Instance of a MessageHeader resource used in a modified message message.",
        "description" : "Example of a MessageHeader in a modified HomeCareDiagnosticReport message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/8dbf63f4-b784-4d40-8802-c1bdb1ecfa63"
        },
        "name" : "Instance of a MessageHeader resource used in a new Homecare Observation message.",
        "description" : "Example of a MessageHeader in a new HomeCareDiagnosticReport message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa"
        },
        "name" : "Instance of a MessageHeader resource used in a new message.",
        "description" : "Example of a MessageHeader in a new HomeCareDiagnosticReport message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/489de4f2-0d8d-4de2-a7ce-ccb93568799f"
        },
        "name" : "Instance of a MessageHeader resource used in a new message.",
        "description" : "Example of a MessageHeader in a new HomeCareDiagnosticReport message. Valid only if used in a bundle (message).",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/1b089a05-0a5f-479d-9cbd-921a13470221"
        },
        "name" : "Leukocyt Observation",
        "description" : "Test of leucocyte on the subject by acute care team",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/2fc2c078-825b-491d-9f8e-34926eb4f06f"
        },
        "name" : "Leukocyt urine test",
        "description" : "Test of leucocyt using urine dipstick",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/4a94a70e-6957-47a8-bec7-3e27b3145668"
        },
        "name" : "Lymphocyte observation",
        "description" : "Lymphocyte observation on the subject by acute care team",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-homecare-observation"
        },
        "name" : "MedComHomeCareObservation",
        "description" : "This profile is intended to be used in HomeCareObservation to hold information about the observation results.",
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
          "reference" : "StructureDefinition/medcom-homecareobservation-diagnosticreport"
        },
        "name" : "MedComHomeCareObservationDiagnosticReport",
        "description" : "This resource is intended to be used in relation with a HomeCareObservation message",
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
          "reference" : "StructureDefinition/medcom-homecareobservation-message"
        },
        "name" : "MedComHomeCareObservationMessage",
        "description" : "The HomeCareObservation Message is used in exchange of the observations results performed by the municipal acute care team to the general practitioner.",
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
          "reference" : "StructureDefinition/medcom-homecareobservation-messageheader"
        },
        "name" : "MedComHomeCareObservationMessageHeader",
        "description" : "MessageHeader for HomeCareObservation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919"
        },
        "name" : "Modified HomeCareDiagnosticReport:TOBS and ABC examination",
        "description" : "Example of a modified HomeCareDiagnosticReport with TOBS and ABC examination of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/73996cdc-3192-4d15-bd16-c365ef0085e7"
        },
        "name" : "Modified HomeCareObservation message.",
        "description" : "Example of a Modified HomeCareObservation with clinical and analysis comment.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/d2b89faa-979a-430d-8887-21ccdf6f238b"
        },
        "name" : "Monocytes observation",
        "description" : "Monocytes observation performed on a subject by the acute care team",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/f84143f7-f586-477f-af56-e50c7d152605"
        },
        "name" : "Neutrophilocytes observation",
        "description" : "Neutrophilocytes observation performed on o subject by the acute care team",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/f58819ff-d727-4740-a4ef-44eefc77022e"
        },
        "name" : "Nitrite observation",
        "description" : "Nitrit observation on Bruno",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Media"
          }
        ],
        "reference" : {
          "reference" : "Media/cb277ee2-5d96-4762-829d-d36449b2b17f"
        },
        "name" : "Normal EKG",
        "description" : "An example of an EKG that can be sendt with an diagnostic repport",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/f70ae8b7-c1af-44a2-a21a-570c552dd7cc"
        },
        "name" : "Observation of the haemoglobin",
        "description" : "Observation of the haemoglobin",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/6ff69f1c-690d-11ed-9022-0242ac120002"
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
          "reference" : "PractitionerRole/4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf"
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
          "reference" : "PractitionerRole/80284c01-1674-45ca-98b7-d1e669bdeff6"
        },
        "name" : "PractitionerRole with a role and reference to a practitioner",
        "description" : "PractitionerRole with a role and reference to a practitioner",
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
          "reference" : "Bundle/ReceiveTestExample1"
        },
        "name" : "ReceiveTestExample1",
        "description" : "Test Example 1 used in HomeCareObservation receive test protocol. Two observations without clinical or analysis comments and the requesting doctor's initials are known.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ReceiveTestExample2"
        },
        "name" : "ReceiveTestExample2",
        "description" : "Test Example 2 used in HomeCareObservation receive test protocol.\nWith a clinical comment and requesting doctor's initials are unknown. \nTwo observations: One with an analysis comment + an NPU code and the other without an analysis comment and a result using the MedComObservation valueset. \nBoth observations use a comparator ('<' or '>')",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ReceiveTestExample3"
        },
        "name" : "ReceiveTestExample3",
        "description" : "Test Example 3 used in the HomeCareObservation receive test protocol. E-cpr and no comments.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ReceiveTestExample4"
        },
        "name" : "ReceiveTestExample4",
        "description" : "Test Example 4 used in the HomeCareObservation receive test protocol. Many observations",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ReceiveTestExample5"
        },
        "name" : "ReceiveTestExample5",
        "description" : "Test Example 5 used in HomeCareObservation receive test protocol. This is an invalid example with a practitioner role that does not have a code and no value for a observation result",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/3fd3835d-1758-4d22-8547-000182752817"
        },
        "name" : "Respiration frequency",
        "description" : "Respiration frequency of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/8917f29d-269c-4bb3-8ce9-d255c351d52b"
        },
        "name" : "Systolic Blood Pressure",
        "description" : "Systolic Blood Pressure of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/85fd1372-cf02-49c6-bd45-7205f5541a66"
        },
        "name" : "Temperature",
        "description" : "Temperature of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/f64a0a78-53cf-4a7f-9b89-4a2338a4935c"
        },
        "name" : "TOBS",
        "description" : "TOBS of Elmer",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/4b8f899a-df12-4301-8287-9a77d46ded3d"
        },
        "name" : "Urine dipstick tests",
        "description" : "Urine dipstick tests on Bruno",
        "exampleCanonical" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
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
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "testProtocolTestExample.html"
            }
          ],
          "nameUrl" : "testProtocolTestExample.html",
          "title" : "Test Protocol Test Example",
          "generation" : "markdown"
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
