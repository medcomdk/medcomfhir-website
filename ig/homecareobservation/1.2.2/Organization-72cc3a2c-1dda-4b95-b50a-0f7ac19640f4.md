# Example of a sender organization with a SOR, and an EAN identifier and producentID. - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a sender organization with a SOR, and an EAN identifier and producentID.**

## Example Organization: Example of a sender organization with a SOR, and an EAN identifier and producentID.

Profile: [MedComCoreProducerOrganization](http://medcomfhir.dk/ig/messaging/3.0.0/StructureDefinition-medcom-producer-organization.html)

**identifier**: `https://www.gs1.org/gln`/5790000123117, `urn:oid:1.2.208.176.1.1`/1144561000016002, `http://medcomfhir.dk/ig/terminology/CodeSystem/MedComProducentID`/KAF

**name**: Pleje og Rehabilitering



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "72cc3a2c-1dda-4b95-b50a-0f7ac19640f4",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-producer-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "https://www.gs1.org/gln",
      "value" : "5790000123117"
    },
    {
      "system" : "urn:oid:1.2.208.176.1.1",
      "value" : "1144561000016002"
    },
    {
      "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/MedComProducentID",
      "value" : "KAF"
    }
  ],
  "name" : "Pleje og Rehabilitering"
}

```
