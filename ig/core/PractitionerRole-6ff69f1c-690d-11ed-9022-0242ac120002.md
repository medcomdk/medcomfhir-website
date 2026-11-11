# PractitionerRole with a role and reference to a practitioner - DK MedCom Core v4.0.1

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](StructureDefinition-medcom-core-practitionerrole.md)

Bo Test Vestergaard (official): Sygeplejerske at Aros Burn Center (urn:oid:1.2.208.176.1.1#123456789012345)

-------

| | |
| :--- | :--- |
| Practitioner: | [Bo Test Vestergaard (official)](Practitioner-e9eacb62-666b-11ed-9022-0242ac120002.md) |
| Organization: | [Aros Burn Center (urn:oid:1.2.208.176.1.1#123456789012345)](Organization-12ee0dde-a672-462f-820d-5efe832d73c9.md) |
| Role: | Sygeplejerske |



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "6ff69f1c-690d-11ed-9022-0242ac120002",
  "meta" : {
    "profile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"]
  },
  "practitioner" : {
    "reference" : "Practitioner/e9eacb62-666b-11ed-9022-0242ac120002"
  },
  "organization" : {
    "reference" : "Organization/12ee0dde-a672-462f-820d-5efe832d73c9"
  },
  "code" : [{
    "coding" : [{
      "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-core-PractitionerRolesSKSadministrativ",
      "code" : "sygeplejerske"
    }]
  }]
}

```
