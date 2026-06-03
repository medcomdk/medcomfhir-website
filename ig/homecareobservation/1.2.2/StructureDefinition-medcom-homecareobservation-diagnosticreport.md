# MedComHomeCareObservationDiagnosticReport - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComHomeCareObservationDiagnosticReport**

## Resource Profile: MedComHomeCareObservationDiagnosticReport 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport | *Version*:1.2.2 |
| Active as of 2026-06-03 | *Computable Name*:MedComHomeCareObservationDiagnosticReport |

 
This resource is intended to be used in relation with a HomeCareObservation message 

### Scope and usage

The MedComHomeCareObservationDiagnosticReport profile contains references to all observation results performed and produced by the municipal acute care team, with the purpose of sending the HomeCareObservation to citizens genereal practitioner. The MedComHomeCareObservationDiagnosticReport is sent as a HomeCareObservation message.

**Figure 1: Overview of the references between profiles in a MedComHomeCareObservationDiagnosticReport profile **

 

#### Status

In a DiagnosticRepport resource, it is required to specify the status of the repport. When all results from performeded observations by the acute care team are typed ind then the HomeCareDiagnosticRepport.status shall be #final.

#### Comments

In the MedComHomeCareDiagnosticReport it is possible to send comments regarding the performed and produced observation results by the municipal acute care team. There are two types of comments that can be send; analysis comments about individual analysis and results, and a clinical comment (overall nursing assessment) about the entire report.

##### Analysis comment about an individual observation

Analysis comment (Danish: Analysekommentar) is a comment that the user can choose to add, if relevant, to an individual observation result. The element Observation.note in HomeCareObservation profile shall be used when adding a analysis comment about the observation. The analysis comment shall not exceed 1 MB (1024 x 1024 characters) in size.

##### Clinical comment (overall nursing assessment)

The clinical comment (Danish: Klinisk kommentar) is a comment to the etntire report. This comment shall contain information that is necessary to provide an overall assessment of the citizen in the acute situation. It is recommended that the municipal acute careteam send the relevant clinical observations (nursing assessment) that are necessary in order to understand and interpret the citizens overall results and health status. When adding a clinical comment the element DiagnosticReport.conclusion shall be used. The clinical comment shall not exceed 1 MB (1024 x 1024 characters) in size.

#### Performer

In the MedComHomeCareDiagnosticReport it is required to describe the performer of the MedComHomeCareDiagnosticReport. The performer is organization that is responsible for creating the HomeCareDiagnosticRepport e.g acute care team . The performer shall be described using a signature and a producer-ID.

##### Signature

It is required to send the siganure of the MedComHomeCareDiagnosticReport performer. The signature consist of:

* Name: of the person responsible for producing the report. The name shall be described using a [MedComCorePractitioner](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-practitioner.html).
* Author role: The role (Danish: stillingsbetegnelse) of the person producing the report shall be described using a [MedComCorePractitionerRole](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-practitionerrole.html)
* Telephone nummer: Relevant telephone number e.g. to the department or organization where the person who is reposnible for the report works.

##### Producer-ID

The producer-ID consist of a three letter code and a SOR-ID for the municiplity where the acute care team is owned by. The three letter code is exhibited by MedCom and is an abbreviation for the producer (e.g. unit or organization) that is responsible for the observations results. The municipal acute care team is responsible for performig and producing the observations results in the MedCom HomeCareObservation. Therefore the code for the municiapl acute careteam is "KAF". The three letter code is exibited in code system on the terminology IG. [Click here to see the code system. ](http://medcomfhir.dk/ig/terminology/CodeSystem-MedComProducentID.html)

#### Use of security labet on patient consent

If a patient not allow to share the observation results with other than the general practitioner a securety labe shall be used. This mean that the meta.security.code shall be R, and in the user interface, it shall be clearly stated that consent has been refused.

#### Attachements

In MedComHomeCareDiagnosticReport it is allowed to include attachments. When including an attachment to a HomeCareDiagnosticReport then the element DiagnosticReport.media.link shall be used. The DiagnosticReport.media.link reference to MedComCoreMedia resource where the atachment shall be added. It is up to the user to assess when it is relevant to send an attachment. Only an attachment of the permitted formats must be included. [Click here to see the permitted formats of an attachment](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-core-attachmentMimeTypes.html)

The attached file shall be base64ed and added to MedComCoreMedia.content.data element. If the attached file are sent, it is a requirement that the ID and title of the attached file shall be sent. The ID of the attachment shall be expressed using Media.identifier element. The Media.content.titel element shall be used to express the titel of the attachment.

Furthermore, MedCom recommended that the name of the author, as well as the time of creation, of the attached file be signed and sent with it. To express the author of the attachemn the Media.operator shal be used. The time of creation, of the attached file shall be expressed using Media.content.creation element

**Usages:**

* Refer to this Profile: [MedComHomeCareObservationMessageHeader](StructureDefinition-medcom-homecareobservation-messageheader.md)
* Examples for this Profile: [DiagnosticReport/4f013d3a-575c-447d-83e1-7a5fb7f7b0de](DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.md), [DiagnosticReport/6d08f000-33cc-41f3-a7c2-c086d53d31a7](DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.md), [DiagnosticReport/870333ac-3134-4ae6-8257-86e0b0537c5f](DiagnosticReport-870333ac-3134-4ae6-8257-86e0b0537c5f.md), [DiagnosticReport/cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919](DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.md) and [DiagnosticReport/efb1ed12-6a5d-4342-9572-861071644e46](DiagnosticReport-efb1ed12-6a5d-4342-9572-861071644e46.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.homecareobservation|current/StructureDefinition/medcom-homecareobservation-diagnosticreport)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-homecareobservation-diagnosticreport.csv), [Excel](StructureDefinition-medcom-homecareobservation-diagnosticreport.xlsx), [Schematron](StructureDefinition-medcom-homecareobservation-diagnosticreport.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-homecareobservation-diagnosticreport",
  "url" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport",
  "version" : "1.2.2",
  "name" : "MedComHomeCareObservationDiagnosticReport",
  "title" : "MedComHomeCareObservationDiagnosticReport",
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
  "description" : "This resource is intended to be used in relation with a HomeCareObservation message",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DiagnosticReport",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-diagnosticreport",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DiagnosticReport",
        "path" : "DiagnosticReport"
      },
      {
        "id" : "DiagnosticReport.meta.security",
        "path" : "DiagnosticReport.meta.security",
        "max" : "1",
        "patternCoding" : {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-Confidentiality",
          "code" : "R",
          "display" : "Restricted"
        },
        "mustSupport" : true
      },
      {
        "id" : "DiagnosticReport.status",
        "path" : "DiagnosticReport.status",
        "patternCode" : "final"
      },
      {
        "id" : "DiagnosticReport.performer",
        "path" : "DiagnosticReport.performer",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "description" : "Slice of observation codes",
          "ordered" : false,
          "rules" : "closed"
        },
        "short" : "Performer of the observations. Shall include a name, practitioner role, relevant telephone of the producer.",
        "min" : 2,
        "max" : "2",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-producer-organization",
              "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.performer:ProducerOrganization",
        "path" : "DiagnosticReport.performer",
        "sliceName" : "ProducerOrganization",
        "short" : "Producer organization of the observations. Shall include a producer-ID (Danish: Producent-ID) of the producer",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-producer-organization"
            ],
            "aggregation" : ["bundled"]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.performer:PractitionerRole",
        "path" : "DiagnosticReport.performer",
        "sliceName" : "PractitionerRole",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
            ],
            "aggregation" : ["bundled"]
          }
        ],
        "constraint" : [
          {
            "key" : "medcom-homecareReport-1",
            "severity" : "error",
            "human" : "The practitioner, who performed the observations, must have a code",
            "expression" : "reference.resolve().code.coding.code.exists()",
            "source" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
          },
          {
            "key" : "medcom-homecareReport-2",
            "severity" : "error",
            "human" : "The practitioner, who performed the observations, must have a name",
            "expression" : "reference.resolve().practitioner.resolve().name.exists()",
            "source" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
          },
          {
            "key" : "medcom-homecareReport-3",
            "severity" : "error",
            "human" : "The practitioner, who performed the observations, must have a phone number",
            "expression" : "reference.resolve().practitioner.resolve().telecom.where(system = 'phone').exists()",
            "source" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
          }
        ]
      },
      {
        "id" : "DiagnosticReport.result",
        "path" : "DiagnosticReport.result",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation"
            ],
            "aggregation" : ["bundled"]
          }
        ]
      },
      {
        "id" : "DiagnosticReport.conclusion",
        "path" : "DiagnosticReport.conclusion",
        "short" : "A comment relevant for all observations in the report and necessary to interpret and understand the results (Danish:Klinisk kommentar)."
      }
    ]
  }
}

```
