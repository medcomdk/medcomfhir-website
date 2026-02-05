# MedComAcknowledgementOperationOutcome - Severity is 'error' - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComAcknowledgementOperationOutcome - Severity is 'error'**

## Example OperationOutcome: MedComAcknowledgementOperationOutcome - Severity is 'error'

Profile: [MedComAcknowledgementOperationOutcome](StructureDefinition-medcom-acknowledgement-operationoutcome.md)

### Issues

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Severity** | **Code** | **Details** |
| * | Error | Element value invalid | The mailbox is temporary out of operation |



## Resource Content

```json
{
  "resourceType" : "OperationOutcome",
  "id" : "c0055484-2a56-4da2-81b8-a9d5087d865c",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-acknowledgement-operationoutcome"
    ]
  },
  "issue" : [
    {
      "severity" : "error",
      "code" : "value",
      "details" : {
        "coding" : [
          {
            "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-acknowledgement-error-codes",
            "code" : "MSG_Mailbox_Out_Of_Operation"
          }
        ]
      }
    }
  ]
}

```
