# MedComAcknowledgementOperationOutcome - Severity is 'information' - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComAcknowledgementOperationOutcome - Severity is 'information'**

## Example OperationOutcome: MedComAcknowledgementOperationOutcome - Severity is 'information'

Profile: [MedComAcknowledgementOperationOutcome](StructureDefinition-medcom-acknowledgement-operationoutcome.md)

### Issues

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Severity** | **Code** | **Details** |
| * | Information | Informational Note | No summary for the Patient instance. |



## Resource Content

```json
{
  "resourceType" : "OperationOutcome",
  "id" : "a87bc9d4-f876-4b6f-8585-40b26dc1e369",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-acknowledgement-operationoutcome"
    ]
  },
  "issue" : [
    {
      "severity" : "information",
      "code" : "informational",
      "details" : {
        "text" : "No summary for the Patient instance."
      }
    }
  ]
}

```
