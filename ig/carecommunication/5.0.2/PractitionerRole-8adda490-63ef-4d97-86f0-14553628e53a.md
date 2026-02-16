# PractitionerRole with a role and reference to a practitioner - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole with a role and reference to a practitioner**

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-practitionerrole.html)

**practitioner**: [Practitioner Ann Marie Wounds ](Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.md)

**code**: Visitator



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "8adda490-63ef-4d97-86f0-14553628e53a",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/ed8d4f6a-a2e4-4343-b823-37ca90c1872a"
  },
  "code" : [
    {
      "text" : "Visitator"
    }
  ]
}

```
