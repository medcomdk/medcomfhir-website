# PractitionerRole with a role and reference to a practitioner - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole with a role and reference to a practitioner**

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-practitionerrole.html)

**practitioner**: [Practitioner Michael Burns ](Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.md)

**code**: Sygeplejerske



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "8dc790ba-8d93-4585-b91c-af8225b0796d",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/8659596f-6ef4-421c-9ecd-94b65e4d5ff8"
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
