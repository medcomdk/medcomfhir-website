# MedComAcknowledgementOperationOutcome - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComAcknowledgementOperationOutcome**

## Resource Profile: MedComAcknowledgementOperationOutcome 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-acknowledgement-operationoutcome | *Version*:2.0.3 |
| Active as of 2026-02-05 | *Computable Name*:MedComAcknowledgementOperationOutcome |

 
This profile provides detailed information about the outcome of an attempted system operation, such as delivering a message. It shall only be used when the attempt fails. 

### Scope and usage

This profile is called MedComAcknowledgementOperationOutcome and is used to give a detailed describtion of errors occuring when exchanging FHIR messages. Succes or fail in message exchange can be found in the element MessageHeader.response.code. MedComAcknowledgementOperationOutcome can be seen as a help for IT-vendors to identify potential errors in their systems, as it least shall contain a description of the issue, including a severity and an error or warning code. It may include several issues.

Please refer to the tab "Snapshot Table(Must support)" below for the definition of the required content of a MedComAcknowledgementMessage.

#### When to include an OperationOutcome

MedComAcknowledgementOperationOutcome should not be included when the message exchange goes well, corresponding to the value 'ok' in MessageHeader.response.code. However, may be included when the MessageHeader.response.code is 'ok', e.g. in cases where the received message is valid, but it is a dublet of a previous sent message. In this case an OperationOutcome with a value of OperationOutcome.issue.severity 'information' and a relevant code could be included. An OperationOutcome resource shall be included when the element MessageHeader.response.code is different from 'ok'.

#### OperationOutCome.issue.details.coding

The CodeSystem [MedComAcknowledgementIssueDetails](https://medcomfhir.dk/ig/terminology/CodeSystem-medcom-acknowledgement-issue-details.html)and ValueSet[MedComAcknowledgementIssueDetailValues](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-acknowledgement-issue-details.html) used in the element OperationOutCome.issue.details.coding are used to describe the issue of receiving a message more detailed. MedCom wants input from IT-vendors on which issue codes provide value in IT-systems. Across sectors there must be an agreed list of codes. [For relevant input regarding the issue codes, please contact MedCom](https://medcomfhir.dk/ig/acknowledgement/#contact).

**Usages:**

* Refer to this Profile: [MedComAcknowledgementMessageHeader](StructureDefinition-medcom-messaging-acknowledgementHeader.md)
* Examples for this Profile: [OperationOutcome/a87bc9d4-f876-4b6f-8585-40b26dc1e369](OperationOutcome-a87bc9d4-f876-4b6f-8585-40b26dc1e369.md), [OperationOutcome/becb2a8e-3a68-4083-910e-811296affd43](OperationOutcome-becb2a8e-3a68-4083-910e-811296affd43.md) and [OperationOutcome/c0055484-2a56-4da2-81b8-a9d5087d865c](OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.acknowledgement|current/StructureDefinition/medcom-acknowledgement-operationoutcome)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-acknowledgement-operationoutcome.csv), [Excel](StructureDefinition-medcom-acknowledgement-operationoutcome.xlsx), [Schematron](StructureDefinition-medcom-acknowledgement-operationoutcome.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-acknowledgement-operationoutcome",
  "url" : "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-acknowledgement-operationoutcome",
  "version" : "2.0.3",
  "name" : "MedComAcknowledgementOperationOutcome",
  "status" : "active",
  "date" : "2026-02-05T13:48:40+00:00",
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
  "description" : "This profile provides detailed information about the outcome of an attempted system operation, such as delivering a message. It shall only be used when the attempt fails.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "OperationOutcome",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/OperationOutcome",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "OperationOutcome",
        "path" : "OperationOutcome"
      },
      {
        "id" : "OperationOutcome.issue",
        "path" : "OperationOutcome.issue",
        "mustSupport" : true
      },
      {
        "id" : "OperationOutcome.issue.severity",
        "path" : "OperationOutcome.issue.severity",
        "mustSupport" : true
      },
      {
        "id" : "OperationOutcome.issue.code",
        "path" : "OperationOutcome.issue.code",
        "mustSupport" : true
      },
      {
        "id" : "OperationOutcome.issue.details",
        "path" : "OperationOutcome.issue.details",
        "mustSupport" : true
      },
      {
        "id" : "OperationOutcome.issue.details.coding",
        "path" : "OperationOutcome.issue.details.coding",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-acknowledgement-issue-details"
        }
      },
      {
        "id" : "OperationOutcome.issue.details.text",
        "path" : "OperationOutcome.issue.details.text",
        "mustSupport" : true
      }
    ]
  }
}

```
