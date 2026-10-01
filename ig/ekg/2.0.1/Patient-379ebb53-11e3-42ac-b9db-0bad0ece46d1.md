# Patient - DK MedCom EKG v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient**

## Example Patient: Patient

Profile: [MedComDocumentPatient](http://medcomfhir.dk/ig/document/2.0.2/StructureDefinition-medcom-document-patient.html)

Else Test Lauridsen (official) Female, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201919990)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "379ebb53-11e3-42ac-b9db-0bad0ece46d1",
  "meta" : {
    "profile" : ["http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201919990"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Else", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1991-02-02"
}

```
