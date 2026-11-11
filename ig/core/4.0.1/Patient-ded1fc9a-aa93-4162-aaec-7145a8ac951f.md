# Birgit Berggren - DK MedCom Core v4.0.1

## Example Patient: Birgit Berggren

Profile: [MedComCorePatient](StructureDefinition-medcom-core-patient.md)

Birgit Berggren (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.6.1.1#0703921VJ4 (use: temp))

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ded1fc9a-aa93-4162-aaec-7145a8ac951f",
  "meta" : {
    "profile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient"]
  },
  "identifier" : [{
    "use" : "temp",
    "system" : "urn:oid:1.2.208.176.1.6.1.1",
    "value" : "0703921VJ4"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Birgit"]
  }]
}

```
