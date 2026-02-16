# PractitionerRole with a role and reference to a practitioner - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole with a role and reference to a practitioner**

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-practitionerrole.html)

**practitioner**: [Practitioner Emma Waters ](Practitioner-7ffff970-5504-11ed-bdc3-0242ac120002.md)

**code**: Sygeplejerske



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "8bf63050-5504-11ed-bdc3-0242ac120002",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/7ffff970-5504-11ed-bdc3-0242ac120002"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-core-PractitionerRolesSKSadministrativ",
          "code" : "sygeplejerske"
        }
      ]
    }
  ]
}

```
