# Example of a sender organization with a SOR, an EAN identifier, and ProdcentID - DK MedCom Messaging v4.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a sender organization with a SOR, an EAN identifier, and ProdcentID**

## Example Organization: Example of a sender organization with a SOR, an EAN identifier, and ProdcentID

Profile: [MedComCoreProducerOrganization](StructureDefinition-medcom-producer-organization.md)

**identifier**: `https://www.gs1.org/gln`/5790000123117, `urn:oid:1.2.208.176.1.1`/1144561000016002, `http://medcomfhir.dk/ig/terminology/CodeSystem/MedComProducentID`/KAF

**name**: Pleje og Rehabilitering



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "ef5cb9a6-835f-4d18-a34e-179c578b9a2a",
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
