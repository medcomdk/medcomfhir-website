# 3rd message - Bruno Test Elmer - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **3rd message - Bruno Test Elmer**

## Example Patient: 3rd message - Bruno Test Elmer

Profile: [MedComCorePatient](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-patient.html)

Bruno Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "22d65545-f98a-4b4d-ba36-51b48b3eb3de",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "2509479989"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Elmer",
      "given" : ["Bruno"]
    }
  ]
}

```
