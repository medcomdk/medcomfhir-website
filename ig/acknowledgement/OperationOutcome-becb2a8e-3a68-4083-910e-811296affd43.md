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
| * | Error | Structural Issue | The value provided is not in the valueSet |



## Resource Content

```json
{
  "resourceType" : "OperationOutcome",
  "id" : "becb2a8e-3a68-4083-910e-811296affd43",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-acknowledgement-operationoutcome"
    ]
  },
  "issue" : [
    {
      "severity" : "error",
      "code" : "structure",
      "details" : {
        "coding" : [
          {
            "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-acknowledgement-error-codes",
            "code" : "MSG_VALUESET_VALUE_UNKNOWN"
          }
        ]
      }
    }
  ]
}

```
