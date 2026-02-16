# PractitionerRole with a role and reference to a practitioner - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole with a role and reference to a practitioner**

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-practitionerrole.html)

**practitioner**: [Practitioner Hans Hansen ](Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.md)

**code**: Speciallæge



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "7f3c3dbb-1b40-41f7-8acc-fb82eb3d4dd3",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/b12c1357-62f1-455e-b07a-3ebf454c50bc"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-core-PractitionerRolesSKSadministrativ",
          "code" : "speciallaege"
        }
      ]
    }
  ]
}

```
