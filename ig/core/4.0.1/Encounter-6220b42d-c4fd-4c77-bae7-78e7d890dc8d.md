# MedCom Core Encounter - DK MedCom Core v4.0.1

## Example Encounter: MedCom Core Encounter

Profile: [MedComCoreEncounter](StructureDefinition-medcom-core-encounter.md)

**status**: Planned

**class**: [ActCode: AMB](http://terminology.hl7.org/7.5.0/CodeSystem-v3-ActCode.html#v3-ActCode-AMB) (ambulatory)

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2509479989)](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "6220b42d-c4fd-4c77-bae7-78e7d890dc8d",
  "meta" : {
    "profile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-encounter"]
  },
  "status" : "planned",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "AMB"
  },
  "subject" : {
    "reference" : "Patient/733cef33-3626-422b-955d-d506aaa65fe1"
  }
}

```
