# Example of a reciever organization with a SOR and an EAN identifier. - DK MedCom Messaging v4.0.3

## Example Organization: Example of a reciever organization with a SOR and an EAN identifier.

Profile: [MedComMessagingOrganization](StructureDefinition-medcom-messaging-organization.md)

Receiver Organization (https://www.gs1.org/gln#5790000121526)

-------

| | |
| :--- | :--- |
| Other Id: | `urn:oid:1.2.208.176.1.1`/543210987654321 |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "74cdf292-abf3-4f5f-80ea-60a48013ff6d",
  "meta" : {
    "profile" : ["http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization"]
  },
  "identifier" : [{
    "system" : "https://www.gs1.org/gln",
    "value" : "5790000121526"
  },
  {
    "system" : "urn:oid:1.2.208.176.1.1",
    "value" : "543210987654321"
  }],
  "name" : "Receiver Organization"
}

```
