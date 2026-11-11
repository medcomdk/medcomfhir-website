# Example of a sender organization with a SOR and an EAN identifier. - DK MedCom Messaging v4.0.3

## Example Organization: Example of a sender organization with a SOR and an EAN identifier.

Profile: [MedComMessagingOrganization](StructureDefinition-medcom-messaging-organization.md)

Sender Organization (https://www.gs1.org/gln#5790001382445)

-------

| | |
| :--- | :--- |
| Other Id: | `urn:oid:1.2.208.176.1.1`/123456789012345 |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "d7056980-a8b2-42aa-8a0e-c1fc85d1f40d",
  "meta" : {
    "profile" : ["http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization"]
  },
  "identifier" : [{
    "system" : "https://www.gs1.org/gln",
    "value" : "5790001382445"
  },
  {
    "system" : "urn:oid:1.2.208.176.1.1",
    "value" : "123456789012345"
  }],
  "name" : "Sender Organization"
}

```
