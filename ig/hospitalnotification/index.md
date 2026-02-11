# Home - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/hospitalnotification/ImplementationGuide/medcom.fhir.dk.hospitalnotification | *Version*:3.0.2 |
| Active as of 2026-02-10 | *Computable Name*:MedComHospitalNotification |

### Introduction

This implementation guide (IG) is provided by MedCom to describe the use of FHIR ®© in message based exchange of data in Danish healthcare.

The IG contains profiles for MedCom HospitalNotification (Dansk: Sygehusadvis), which is used to inform a municipality about hospitalization of a patient. The HospitalNotification contributes to securing the foundation for a coherent clinical pathway across sectors. The specific purpose of the HospitalNotification is to inform the citizen's current care and health provider in the primary sector about the start and end of the citizen's stay at the hospital. It makes it possible to pause the current care and health providers' services during the hospital stay and resume them when it ends. At the same time, the HospitalNotification can trigger the automatic sending of Report of Admission ([XDIS16](https://svn.medcom.dk/svn/releases/Standarder/National%20Sygehus-Kommunesamarbejde/1.0.3/XDIS16/Dokumentation/)) from the receiver's system, which gives the health professionals an overview of the citizen's current services, level of function and health-related problems. The HospitalNotification also contains notification of the patient's leave from the hospital stay and acute ambulant care.

Profiles used in HospitalNotification are not as open as other profiles because the message is automatically sent and thus not based on a patient consent. The legislation permits this exchange, but the message shall not contain more information than necessary.

More information about the [clinical guidelines and legislation](https://medcomdk.github.io/dk-medcom-hospitalnotification/) can be found here.

#### HospitalNotification Message

The following diagram depicts the structure of the HospitalNotification message.

![](./hospitalnotification/HospitalNotification.svg)

The HospitalNotification message follows the general MedCom FHIR messaging structure, except that the carbon-copy destination is not allowed. The following sections describe the overall purpose of each profile.

##### MedComHospitalNotificationMessage

The [MedComHospitalNotificationMessage](https://medcomfhir.dk/ig/hospitalnotification/StructureDefinition-medcom-hospitalNotification-message.html) profile constrains the [MedComMessagingMessage](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-message.html) to further use the MedComHospitalNotificationMessageHeader and to require exactly one patient resource in the message. Furthermore, it constrains the Provenance.activity to contain only activities from the MedComHospitalNotificationMessageActivities ValueSet.

All referenced resources within the message shall be contained in the entry list in MedComHospitalNotificationMessage.

##### MedComHospitalNotificationMessageHeader

The [MedComHospitalNotificationMessageHeader](https://medcomfhir.dk/ig/hospitalnotification/StructureDefinition-medcom-hospitalNotification-messageHeader.html) profile constrains the [MedComMessagingMessageHeader](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-messageHeader.html) further to specify the fixed coding for this message and require a focus of the message to be a MedComHospitalNotificationEncounter.

##### MedComHospitalNotificationEncounter

The [MedComHospitalNotificationEncounter](https://medcomfhir.dk/ig/hospitalnotification/StructureDefinition-medcom-hospitalNotification-encounter.html) profile contains the main clinical content of the message. It constrains the [MedComCoreEncounter](http://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-encounter.html) further to require a episodeOfCare-identifier and restricts the status and class to ValueSet of relevant values. The start time of the encounter and a reference to the service provider organization are also mandatory. Most other values are disallowed due to the legislation.

##### MedComMessagingProvenance

The [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-provenance.html) profile is used to track information about the activity of the notification, e.g. if the message describes a 'start hospital stay - inpatient' or 'end leave'. The allowed activity codes for a HospitalNotification message can be found in [MedComHospitalNotificationMessageActivityCodes ValueSet](http://medcomfhir.dk/ig/terminology/ValueSet-medcom-hospitalNotification-messageActivities.html) on the Terminology IG.

In cases of a previously sent HospitalNotification message, MedComMessagingProvenance references the lateste message which makes it possible to create a historic overview of the admission.

##### MedComCorePatient

The [MedComCorePatient](http://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-patient.html) profile is used in a HospitalNotification message. However, a HospitalNotification message may only be exchanged for patients with an official Danish civil person register (CPR)-number.

##### MedComCoreOrganization

The [MedComCoreOrganization](http://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-organization.html) profile is used in a HospitalNotification message to describe the serviceprovider organisation, which is the organisation responsible for the patient's admission.

##### MedComMessagingOrganization

The [MedComMessagingOrganization](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-organization.html) profile is used in a HospitalNotification message to describe the sender and primary receiver of the notification. Please notice, that carbon-copy receiver is not allowed in a HospitalNotification message.

#### Timestamps

HospitalNotification messages are generated and sent based on real-time registration in the EPR/PAS system. In case the EPR allows future registrations of planned contacts or a period of leave, the HospitalNotifications shall only be triggered when the event occurs, i.e. at the patient's physical attendance, as described in the [Clinical guidelines for application](https://medcomdk.github.io/dk-medcom-hospitalnotification/#11-clinical-guidelines-for-application).

The HospitalNotification message contains several timestamps. These timestamps are present in the profiles MedComHospitalNotificationEncounter, MedComHospitalNotificationMessage and MedComMessagingProvenance and have different purposes:

* Encounter-timestamps represent the time of an event. For receiving systems, this is the timestamps that must be displayed for the end user in the HospitalNotification as ‘date and time of start/end for the event’. [The usage of these timestamps is more thoroughly described here.](https://medcomfhir.dk/ig/hospitalnotification/StructureDefinition-medcom-hospitalNotification-encounter.html)
* Bundle.timestamp represents the time bundle is generated.
* Provenance.occuredDateTime[x] represents the time the HospitalNotification is sent, in a human-readable time
* Provenance.recorded represents the time the HospitalNotification is sent, in a machine-readable time

#### ID's

All profiles shall have a global unique id by using an UUID. [Read more about the use of ids here](https://medcomdk.github.io/MedCom-FHIR-Communication/assets/documents/052.2_MessageHeader_Identifiers_Timestamps.html).

#### Simplified examples of the HospitalNotification message flow

The simplified examples contain the required content of a HospitalNotification message. Throughout this section different activity codes and statuses are used. [To get an overview of all the codes and statuses, please go to GitHub pages for HospitalNotification](https://medcomdk.github.io/dk-medcom-hospitalnotification/#14-hospitalnotification-codes).

In the sections below is a limited number HospitalNotifications simplified examples. [More examples of a HospitalNotification message can be found here](https://medcomfhir.dk/ig/hospitalnotification/StructureDefinition-medcom-hospitalNotification-message-examples.html). For examples of a profile, take a look under the tab 'Examples' on the site for the given profile.

> Please notice, that in the following examples is the resources listed as an array. This is just an example of an order, resources may be listed in any order.

##### STIN - Start hospital stay - admitted

The simplified example below is an example of a 'Start hospital stay - admitted' HospitalNotification. In the MessageHeader there is a request for a reportOfAdmission (extension:reportOfAdmissionFlag). In the Encounter instance the status is 'in-progress', and the Encounter is populated with a start timestamp (period.start). In the Provenance instance is the activity code 'admit-inpatient'. The sender and serviceProvider organisation is the same.

* [1 - Simplified example of 'Start hospital stay - admitted'](./hospitalnotification/HNAdmitInPat.svg)

[Click here to see the generated example of simplified example number 1.](https://medcomfhir.dk/ig/hospitalnotification/Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.html)

##### STOR - Start leave

The simplified example below is an example of a 'Start leave' HospitalNotification which is sent in continuation of simplified example number 1. The status in the Encounter is changed from 'in-progress' to 'onleave', and the Encounter is populated with a start timestamp for the period of leave (extension:leavePeriod.start). In the Provenance instance is the activity code 'start-leave-inpatient'. The sender and serviceProvider organisation is the same.

* [2 - Simplified example of 'Start leave'](./hospitalnotification/HNstartOnleave.svg)

[Click here to see the generated example of simplified example number 2.](https://medcomfhir.dk/ig/hospitalnotification/Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.html)

##### SLOR - End leave

The simplified example below is an example of a 'End leave' HospitalNotification which is sent in continuation of simplified example number 2. The status in the Encounter is changed from 'onleave' to 'in-progress', and the Encounter is populated with a end timestamp for the period of leave (extension:leavePeriod.end). In the Provenance instance is the activity code 'end-leave-inpatient'. The sender and serviceProvider organisation is the same.

* [3 - Simplified example of 'End leave'](./hospitalnotification/HNendOnleave.svg)

[Click here to see the generated example of simplified example number 3.](https://medcomfhir.dk/ig/hospitalnotification/Bundle-e94de8ee-bd94-475e-b454-b8fbbef8a685.html)

##### SLHJ - End hospital stay - patient completed to home/primary sector (inpatient)

The simplified example below is an example of a 'End hospital stay - patient completed to home/primary sector' HospitalNotification which is sent in continuation of simplified example number 1. The status in the Encounter is changed from 'in-progress' to 'finished', and the Encounter is populated with a timestamp indicating end of the encounter (period.end). In the Provenance instance is the activity code 'discharge-inpatient-home'. The sender and serviceProvider organisation is the same.

* [4 - Simplified example of 'End hospital stay - patient completed to home/primary sector'](./hospitalnotification/HNdischargeInPat.svg)

[Click here to see the generated example of simplified example number 4.](https://medcomfhir.dk/ig/hospitalnotification/Bundle-f4aa42a4-86db-4e68-9b38-9dda0dfd5774.html)

##### MORS - Deceased (inpatient)

The simplified example below is an example of a 'Deceased' HospitalNotification which is sent in continuation of simplified example number 1. The status in the Encounter is changed from 'in-progress' to 'finished', and the Encounter is populated with a timestamp indicating end of the encounter (period.end) i.e. the death of the patient. The element Patient.deceased is sat to 'true', indicating that the patient is deceased. In the Provenance instance is the activity code 'admit-inpatient', as it shall remain the current activity. The sender and serviceProvider organisation is the same.

* [5 - Simplified example of 'Deceased'](./hospitalnotification/HNdeceasedInPat.svg)

[Click here to see the generated example of simplified example number 5.](https://medcomfhir.dk/ig/hospitalnotification/Bundle-g099bbf3-3fca-4722-a248-bfe1aa956410.html)

##### AN_STIN - Cancellation Start hospital stay - admitted

The simplified example below is an example of a 'Cancellation Start hospital stay - admitted' HospitalNotification which is sent in continuation of simplified example number 1. In the Provenance instance the activity code is changed to 'cancel-admit-inpatient' and the entity.what is now 'removal' indicating that the previous message is cancelled. The sender and serviceProvider organisation is the same.

* [6 - Simplified example of 'Cancellation Start hospital stay - admitted'](./hospitalnotification/HNcancelEnteredInError.svg)

[Click here to see the generated example of simplified example number 6.](https://medcomfhir.dk/ig/hospitalnotification/Bundle-c83671a4-9584-11ec-b909-0242ac120002.html)

#### Terminology

On [MedCom Terminology IG](http://medcomfhir.dk/ig/terminology/) all referenced CodeSystem and ValueSets developed by MedCom can be found.

#### Dependencies

This IG has a dependency to the [MedCom Core IG](http://medcomfhir.dk/ig/core/), [MedCom Messaging IG](http://medcomfhir.dk/ig/messaging/) and [DK-core v. 2.0.0](https://hl7.dk/fhir/core/), where the latter is defined by [HL7 Denmark](https://hl7.dk/). This is currently reflected in MedComHospitalNotificationMessage, MedComHospitalNotificationMessageHeader and MedComHospitalNotificationEncounter which all inherits from profiles defined in MedComCore or MedComMessaging IG. Further, it is reflected in references to MedComCorePatient, MedComCoreOrganization and MedComMessagingOrganization.

### Download

Content in this IG can be downloaded in npm format under [Download](https://medcomfhir.dk/ig/hospitalnotification/downloads.html). This can be used to validate locale FHIR profiles against.

### Documentation

On the [introduction page for HospitalNotification](https://medcomdk.github.io/dk-medcom-hospitalnotification/) the following documentation can be found:

* Clinical guidelines
* Use cases
* Overview of codes used a HospitalNotification message
* Mapping document from the previous OIOXML standard (XDIS17 and XDIS20) to HospitalNotification

### Governance

MedComs FHIR profiles and extension are managed in GitHub under MedCom: [Source code](https://github.com/medcomdk/dk-medcom-hospitalnotification)

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
  "id" : "medcom.fhir.dk.hospitalnotification",
  "url" : "http://medcomfhir.dk/ig/hospitalnotification/ImplementationGuide/medcom.fhir.dk.hospitalnotification",
  "version" : "3.0.2",
  "name" : "MedComHospitalNotification",
  "title" : "DK MedCom HospitalNotification",
  "status" : "active",
  "date" : "2026-02-10T12:55:02+00:00",
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
  "description" : "The DK MedCom HospitalNotification IG",
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
  "packageId" : "medcom.fhir.dk.hospitalnotification",
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
      "version" : "2.0.0"
    },
    {
      "id" : "medcom_fhir_dk_core",
      "uri" : "http://medcomfhir.dk/ig/core/ImplementationGuide/medcom.fhir.dk.core",
      "packageId" : "medcom.fhir.dk.core",
      "version" : "2.0.0"
    },
    {
      "id" : "medcom_fhir_dk_messaging",
      "uri" : "http://medcomfhir.dk/ig/messaging/ImplementationGuide/medcom.fhir.dk.messaging",
      "packageId" : "medcom.fhir.dk.messaging",
      "version" : "2.1.0"
    },
    {
      "id" : "medcom_fhir_dk_terminology",
      "uri" : "http://medcomfhir.dk/ig/terminology/ImplementationGuide/medcom.fhir.dk.terminology",
      "packageId" : "medcom.fhir.dk.terminology",
      "version" : "1.1.1"
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
            "valueString" : "2021+"
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
            "valueString" : "apply-juristiction"
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
            "valueString" : "http://medcomfhir.dk/ig/hospitalnotification/history.html"
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
            "valueString" : "apply-version"
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
            "valueString" : "2021+"
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
            "valueCode" : "apply-juristiction"
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
            "valueString" : "http://medcomfhir.dk/ig/hospitalnotification/history.html"
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
            "valueCode" : "apply-version"
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
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/c9782061-ce63-41b5-8be6-655812d23332"
        },
        "name" : "HospitalNotification Encounter - AN_STIN",
        "description" : "Example of MedComHospitalNotificationEncounter 'Cancellation Start hospital stay - admitted'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/l001c640-6b5d-414c-b6bd-e00ec6d4ceee"
        },
        "name" : "HospitalNotification Encounter - MORS (acute ambulant)",
        "description" : "Example of MedComHospitalNotificationEncounter 'Deceased' (acute ambulant). Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/gcab7218-9584-11ec-b909-0242ac120002"
        },
        "name" : "HospitalNotification Encounter - MORS (inpatient)",
        "description" : "Example of MedComHospitalNotificationEncounter 'Deceased' (inpatient). Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/b9846c24-0335-11ed-b939-0242ac120002"
        },
        "name" : "HospitalNotification Encounter - RE_STIN",
        "description" : "Example of MedComHospitalNotificationEncounter 'Update Start hospital stay - admitted'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/kbbad98c-3310-404a-af0c-7e3739d7b49f"
        },
        "name" : "HospitalNotification Encounter - SLHJ (acute ambulant)",
        "description" : "Example of MedComHospitalNotificationEncounter 'End hospital stay - patient completed to home/primary sector' (acute ambulant). Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/f405ba2d-467a-4e92-9acc-9dc2a629760f"
        },
        "name" : "HospitalNotification Encounter - SLHJ (inpatient)",
        "description" : "Example of MedComHospitalNotificationEncounter 'End hospital stay - patient completed to home/primary sector' (inpatient). Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/e07c4bd4-cfad-4c4d-9c4b-e4ba3424a65b"
        },
        "name" : "HospitalNotification Encounter - SLOR",
        "description" : "Example of MedComHospitalNotificationEncounter 'End leave'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/h2cb16ce-af8c-46f3-be9e-89406ef3e7b5"
        },
        "name" : "HospitalNotification Encounter - STAA",
        "description" : "Example of MedComHospitalNotificationEncounter 'Start hospital stay - acute ambulant'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/a790f964-88d3-4652-bbc8-81d2f3d035f8"
        },
        "name" : "HospitalNotification Encounter - STIN",
        "description" : "Example of MedComHospitalNotificationEncounter 'Start hospital stay - admitted'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/m790f964-98d3-4852-bac8-83d2f3d035f8"
        },
        "name" : "HospitalNotification Encounter - STIN (distinct sender and serviceProvider)",
        "description" : "Example of MedComHospitalNotificationEncounter 'Start hospital stay - admitted'. With different serviceProvider and sender organisation in the Bundle. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/ne70f2b8-a924-11ed-afa1-0242ac120002"
        },
        "name" : "HospitalNotification Encounter - STIN (two episodeOfCare-identifiers)",
        "description" : "Example of MedComHospitalNotificationEncounter 'Start hospital stay - admitted'. With two episodeOfCare-identifiers. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/d56e9c54-23d2-43a4-816e-951d2a6e3281"
        },
        "name" : "HospitalNotification Encounter - STOR",
        "description" : "Example of MedComHospitalNotificationEncounter 'Start leave'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/c83671a4-9584-11ec-b909-0242ac120002"
        },
        "name" : "HospitalNotification Message - AN_STIN",
        "description" : "Example of MedComHospitalNotificationMessage 'Cancellation Start hospital stay - admitted'",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ld31e08a-b91f-49c3-841a-ce80e6380517"
        },
        "name" : "HospitalNotification Message - MORS (acute ambulant)",
        "description" : "Example of MedComHospitalNotificationMessage 'Deceased' (acute ambulant)",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/g099bbf3-3fca-4722-a248-bfe1aa956410"
        },
        "name" : "HospitalNotification Message - MORS (inpatient)",
        "description" : "Example of MedComHospitalNotificationMessage 'Deceased' (inpatient)",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/bfab3e80-9584-11ec-b909-0242ac120002"
        },
        "name" : "HospitalNotification Message - RE_STIN",
        "description" : "Example of MedComHospitalNotificationMessage 'Update Start hospital stay - admitted'",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/kcab461b-f44e-4d97-a041-ef7e64800587"
        },
        "name" : "HospitalNotification Message - SLHJ (acute ambulant)",
        "description" : "Example of MedComHospitalNotificationMessage 'End hospital stay - patient completed to home/primary sector' (acute ambulant)",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/f4aa42a4-86db-4e68-9b38-9dda0dfd5774"
        },
        "name" : "HospitalNotification Message - SLHJ (inpatient)",
        "description" : "Example of MedComHospitalNotificationMessage 'End hospital stay - patient completed to home/primary sector' (inpatient)",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/e94de8ee-bd94-475e-b454-b8fbbef8a685"
        },
        "name" : "HospitalNotification Message - SLOR",
        "description" : "Example of MedComHospitalNotificationMessage 'End leave'",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/h1c8e4a8-6b45-4669-94ad-2a99ad96bf03"
        },
        "name" : "HospitalNotification Message - STAA",
        "description" : "Example of MedComHospitalNotificationMessage 'Start hospital stay - acute ambulant'",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/a5e5b880-c087-4055-b9ec-99108695f81d"
        },
        "name" : "HospitalNotification Message - STIN",
        "description" : "Example of MedComHospitalNotificationMessage 'Start hospital stay - admitted'",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/m908i967-9ie3-9023-b9ec-98108695f01d"
        },
        "name" : "HospitalNotification Message - STIN (different sender and serviceProvider)",
        "description" : "Example of MedComHospitalNotificationMessage 'Start hospital stay - admitted'. With different serviceProvider and sender Organization.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/n73ccf30-80b9-4bd2-bf50-1ac1914498f0"
        },
        "name" : "HospitalNotification Message - STIN (with two episodeOfCare-identifiers)",
        "description" : "Example of MedComHospitalNotificationMessage 'Start hospital stay - admitted' (with two episodeOfCare-identifiers)",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/d3128d9b-cede-4c7f-8904-809eab322d7d"
        },
        "name" : "HospitalNotification Message - STOR",
        "description" : "Example of MedComHospitalNotificationMessage 'Start leave'",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-message"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/d8749b54-1aeb-4089-8941-8d876bdffc51"
        },
        "name" : "HospitalNotification MessageHeader - AN_STIN.",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Cancellation Start hospital stay - admitted'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/nabb68aa-c97b-4905-a60c-71ff3209fd51"
        },
        "name" : "HospitalNotification MessageHeader - MORS (acute ambulant).",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Deceased' (acute ambulant). Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/hefc6d95-6161-4493-99c9-f359488dedb8"
        },
        "name" : "HospitalNotification MessageHeader - MORS (inpatient).",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Deceased' (inpatient). Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/cc47c1e2-78e6-4291-b071-f423a4f7fbfe"
        },
        "name" : "HospitalNotification MessageHeader - RE_STIN.",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Revise Start hospital stay - admitted'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/m9bea09c-e662-4d59-b84f-9af570b57f42"
        },
        "name" : "HospitalNotification MessageHeader - SLHJ (acute ambulant).",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'End hospital stay - patient completed to home/primary sector' (acute ambulant). Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/g1affa53-c157-4080-abb0-8e681524f969"
        },
        "name" : "HospitalNotification MessageHeader - SLHJ (inpatient).",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'End hospital stay - patient completed to home/primary sector' (inpatient). Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/f47254da-f170-46f0-b624-4778a9c92b1f"
        },
        "name" : "HospitalNotification MessageHeader - SLOR.",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'End leave'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/i50fc5fe-2d11-4ef3-acac-2e2e5c6c0029"
        },
        "name" : "HospitalNotification MessageHeader - STAA.",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - acute ambulant'. reportOfAdmissionFlag is 'true'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/j3675c4a-33db-40f1-b578-ff16e3e9134c"
        },
        "name" : "HospitalNotification MessageHeader - STAA.",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - acute ambulant'. Without request for a reportOfAdmission. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/a1b27813-8aa8-4fa1-846b-aeabf5afb7d4"
        },
        "name" : "HospitalNotification MessageHeader - STIN",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - admitted'. Without request for a reportOfAdmission. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/o9b4818e-12de-5cc4-c418-d30cbc7b5404"
        },
        "name" : "HospitalNotification MessageHeader - STIN (different serviceProvider and sender organisation)",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - admitted'. With different serviceProvider and sender organisation. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/b9b4818e-02de-4cc4-b418-d20cbc7b5404"
        },
        "name" : "HospitalNotification MessageHeader - STIN (including reportOfAdmissionFlag = 'true')",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - admitted'. reportOfAdmissionFlag is 'true'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/1ca19ddf-31bc-4597-8739-968c38dd88f8"
        },
        "name" : "HospitalNotification MessageHeader - STIN (With two episodeOfCare-identifiers)",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - admitted'. With two episodeOfCare-identifiers. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MessageHeader"
          }
        ],
        "reference" : {
          "reference" : "MessageHeader/e563a2b2-bf92-4b13-bbd2-0a021a95bded"
        },
        "name" : "HospitalNotification MessageHeader - STOR.",
        "description" : "Example of MedComHospitalNotificationMessageHeader 'Start leave'. Only Valid if used in a Bundle.",
        "exampleCanonical" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-hospitalNotification-encounter"
        },
        "name" : "MedComHospitalNotificationEncounter",
        "description" : "Encounter derivation that handles hospital notification when a patient is admitted to a hospital. The hospital notification is always send from a hospital. The receiver of the message is the patients home municipalicy. The hospital notification is send for example when patient is admitted, on leave, returned from leave, finished hospital stay.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-hospitalnotifiation-leave-period-extension"
        },
        "name" : "MedComHospitalNotificationLeavePeriodExtension",
        "description" : "Includes timestamps for start and end of leave of a hospitalization.",
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
          "reference" : "StructureDefinition/medcom-hospitalNotification-message"
        },
        "name" : "MedComHospitalNotificationMessage",
        "description" : "A message for a HospitalNotification. The message is triggered as patients are admitted, onleave or has finished a hospital stay in order to notify the relevant Municipalicy home care",
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
          "reference" : "StructureDefinition/medcom-hospitalNotification-messageHeader"
        },
        "name" : "MedComHospitalNotificationMessageHeader",
        "description" : "MessageHeader for a HospitalNotification message.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/c67ecb1c-957a-11ec-b909-0242ac120002"
        },
        "name" : "MedComMessagingProvenance - AN_STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Cancellation Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/l17de5f5-abb0-4701-93aa-6b0d7b4127bc"
        },
        "name" : "MedComMessagingProvenance - MORS (acute ambulant)",
        "description" : "Example of MedComMessagingProvenance used in 'Deceased' (acute ambulant). Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/g9942adb-197a-4e30-bec8-566e3a113efe"
        },
        "name" : "MedComMessagingProvenance - MORS (inpatient)",
        "description" : "Example of MedComMessagingProvenance used in 'Deceased' (inpatient). Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/b5f7de8c-957a-11ec-b909-0242ac120002"
        },
        "name" : "MedComMessagingProvenance - RE_STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Update Start hospital stay -admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/ka776a3e-3eca-407b-9f81-b8c16f089874"
        },
        "name" : "MedComMessagingProvenance - SLHJ (acute ambulant)",
        "description" : "Example of MedComMessagingProvenance used in 'End hospital stay - patient completed to home/primary sector' (acute ambulant). Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/f710698c-83eb-4c3e-81c8-fe8e40baf524"
        },
        "name" : "MedComMessagingProvenance - SLHJ (inpatient)",
        "description" : "Example of MedComMessagingProvenance used in 'End hospital stay - patient completed to home/primary sector' (inpatient). Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/e4db4939-7c60-4ac6-aefc-523f809ccba6"
        },
        "name" : "MedComMessagingProvenance - SLOR",
        "description" : "Example of MedComMessagingProvenance used in 'End leave'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/h60bd482-9c47-43c5-9b77-1134eaa2d5f0"
        },
        "name" : "MedComMessagingProvenance - STAA",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - acute ambulant'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/543296c8-d01b-4fbb-b737-1b1d9630a052"
        },
        "name" : "MedComMessagingProvenance - STAA",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - acute ambulant'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/fc7efe44-2708-49b2-becf-3eddd2fdef43"
        },
        "name" : "MedComMessagingProvenance - STAA",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - acute ambulant'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/a7cf3888-6f42-4e4d-929c-d2475d24fba0"
        },
        "name" : "MedComMessagingProvenance - STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/9d4f53ed-7e4b-477c-8021-1424cf5e9b1e"
        },
        "name" : "MedComMessagingProvenance - STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/9925ca91-62aa-40f0-8b6f-5afae2a36c67"
        },
        "name" : "MedComMessagingProvenance - STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/dc7dd664-f588-4f82-963b-3a032759c5a9"
        },
        "name" : "MedComMessagingProvenance - STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/8a3b783c-60b3-4d6b-ae90-f6ead50ecb1d"
        },
        "name" : "MedComMessagingProvenance - STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/ca506c7f-fec6-4711-9397-efb98b7233b6"
        },
        "name" : "MedComMessagingProvenance - STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/9c2257be-2a91-4314-8577-6f1a69f7ab86"
        },
        "name" : "MedComMessagingProvenance - STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/4e9f2c26-9d9b-4239-ade6-e26c130e855e"
        },
        "name" : "MedComMessagingProvenance - STIN",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/m7cf3888-6f52-5e4d-939c-d2575d24fba0"
        },
        "name" : "MedComMessagingProvenance - STIN.",
        "description" : "Example of MedComMessagingProvenance used in 'Start hospital stay - admitted'. With different serviceProvider and sender Organisation. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/dc421d0a-cded-470f-9a53-2ddba7583baa"
        },
        "name" : "MedComMessagingProvenance - STOR",
        "description" : "Example of MedComMessagingProvenance used in 'Start leave'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Provenance"
          }
        ],
        "reference" : {
          "reference" : "Provenance/1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b"
        },
        "name" : "MedComMessagingProvenance - STOR",
        "description" : "Example of MedComMessagingProvenance used in 'Start leave'. Only valid if used in a Bundle (message).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-messaging-reportOfAdmissionExtension"
        },
        "name" : "MedComReportOfAdmissionExtension",
        "description" : "Indicates whether the recipient should send a report of admission",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/medcom-messaging-reportOfAdmissionRecipientExtension"
        },
        "name" : "MedComReportOfAdmissionRecipientExtension",
        "description" : "Recipient of a report of admission response",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/t33cef33-3626-422b-955d-d506aaa65fe1"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/48393486-81c6-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/d6eeaca6-81c6-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/97404d10-81c8-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/519d5170-81ca-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/6841b54e-81cd-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/fdc1fc66-81d0-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/6c16f41e-81d1-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/384b4a58-81d2-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Example of a MedComCorePatient who is deceased and with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/b00ea1c0-81d2-11ed-a1eb-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Deceased Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/545fd5e6-a924-11ed-afa1-0242ac120002"
        },
        "name" : "Patient - Bruno Test Elmer",
        "description" : "Deceased Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/t82fb8a3-6725-41e2-a615-2b1cfcfe9931"
        },
        "name" : "Patient - Bruno Test Elmer (deceased)",
        "description" : "Example of a MedComCorePatient who is deceased and with minimal information. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/o4cdf292-abf3-4f5f-80ea-60a48013ff6d"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/8858e7e6-81c6-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/eefc2dfa-81c6-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/a39d4a04-81c8-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/55ba5884-81ca-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/7e692262-81cd-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/753bdcba-81ce-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/103fbebe-81d1-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/e5682f5e-81d1-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/55eb90b8-81d2-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/bea5b49e-81d2-11ed-a1eb-0242ac120002"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/a8ec5ae1-e324-453d-9d9f-39ffe41f308a"
        },
        "name" : "Receiver organization - Plejecenter Herlev.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/o7056980-a8b2-42aa-8a0e-c1fc85d1f40d"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/abb09e14-81c6-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/05266a00-81c7-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/b79a7914-81c8-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/5961ade8-81ca-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/8d813af0-81cd-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/840b4046-81ce-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/1f5882b4-81d1-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/0465ec66-81d2-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/66c12a92-81d2-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/cd72967c-81d2-11ed-a1eb-0242ac120002"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/2565d3de-082e-4368-9160-4c719071026b"
        },
        "name" : "Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.",
        "description" : "Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/of839e87-4e44-4977-b38e-92b5a6f187b5"
        },
        "name" : "ServiceProvider organization - Hjertemedicinsk sengeafs. S103",
        "description" : "Example of a MedComCoreOrganization with SOR identifier. Only valid if used in a Bundle.",
        "exampleBoolean" : false
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
