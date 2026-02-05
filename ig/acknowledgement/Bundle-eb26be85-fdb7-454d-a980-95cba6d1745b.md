# eb26be85-fdb7-454d-a980-95cba6d1745b - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eb26be85-fdb7-454d-a980-95cba6d1745b**

## Example Bundle: eb26be85-fdb7-454d-a980-95cba6d1745b



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "eb26be85-fdb7-454d-a980-95cba6d1745b",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-message"
    ]
  },
  "type" : "message",
  "timestamp" : "2020-09-28T12:34:56Z",
  "entry" : [
    {
      "fullUrl" : "https://medcomfhir.dk/ig/acknowledgement/MessageHeader/3881874e-2042-4a00-aee8-23512799f512",
      "resource" : {
        "resourceType" : "MessageHeader",
        "id" : "3881874e-2042-4a00-aee8-23512799f512",
        "meta" : {
          "profile" : [
            "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-messageHeader"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"MessageHeader_3881874e-2042-4a00-aee8-23512799f512\"> </a><p class=\"res-header-id\"><b>Generated Narrative: MessageHeader 3881874e-2042-4a00-aee8-23512799f512</b></p><a name=\"3881874e-2042-4a00-aee8-23512799f512\"> </a><a name=\"hc3881874e-2042-4a00-aee8-23512799f512\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-messageHeader.html\">MedComMessagingMessageHeader</a></p></div><p><b>event</b>: <a href=\"http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-empty-message\">MedComMessagingEventCodes: empty-message</a> (Message with no content)</p><h3>Destinations</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Extension</b></td><td><b>Endpoint</b></td><td><b>Receiver</b></td></tr><tr><td style=\"display: none\">*</td><td/><td><a href=\"https://sor2.sum.dsdn.dk/#id=953741000016009\">https://sor2.sum.dsdn.dk/#id=953741000016009</a></td><td><a href=\"Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.html\">Organization Receiver Organization</a></td></tr></table><p><b>sender</b>: <a href=\"Organization-d7056980-a8b2-42aa-8a0e-c1fc85d1f40d.html\">Organization Sender Organization</a></p><h3>Sources</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Endpoint</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"https://sor2.sum.dsdn.dk/#id=265161000016000\">https://sor2.sum.dsdn.dk/#id=265161000016000</a></td></tr></table></div>"
        },
        "eventCoding" : {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-eventCodes",
          "code" : "empty-message"
        },
        "destination" : [
          {
            "extension" : [
              {
                "url" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-destinationUseExtension",
                "valueCoding" : {
                  "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-destinationUse",
                  "code" : "primary"
                }
              }
            ],
            "endpoint" : "https://sor2.sum.dsdn.dk/#id=953741000016009",
            "receiver" : {
              "reference" : "Organization/74cdf292-abf3-4f5f-80ea-60a48013ff6d"
            }
          }
        ],
        "sender" : {
          "reference" : "Organization/d7056980-a8b2-42aa-8a0e-c1fc85d1f40d"
        },
        "source" : {
          "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
        }
      }
    },
    {
      "fullUrl" : "https://medcomfhir.dk/ig/acknowledgement/Organization/d7056980-a8b2-42aa-8a0e-c1fc85d1f40d",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "d7056980-a8b2-42aa-8a0e-c1fc85d1f40d",
        "meta" : {
          "profile" : [
            "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_d7056980-a8b2-42aa-8a0e-c1fc85d1f40d\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization d7056980-a8b2-42aa-8a0e-c1fc85d1f40d</b></p><a name=\"d7056980-a8b2-42aa-8a0e-c1fc85d1f40d\"> </a><a name=\"hcd7056980-a8b2-42aa-8a0e-c1fc85d1f40d\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-organization.html\">MedComMessagingOrganization</a></p></div><p><b>identifier</b>: <code>https://www.gs1.org/gln</code>/5790001348120, <code>urn:oid:1.2.208.176.1.1</code>/953741000016009</p><p><b>name</b>: Sender Organization</p></div>"
        },
        "identifier" : [
          {
            "system" : "https://www.gs1.org/gln",
            "value" : "5790001348120"
          },
          {
            "system" : "urn:oid:1.2.208.176.1.1",
            "value" : "953741000016009"
          }
        ],
        "name" : "Sender Organization"
      }
    },
    {
      "fullUrl" : "https://medcomfhir.dk/ig/acknowledgement/Organization/74cdf292-abf3-4f5f-80ea-60a48013ff6d",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "74cdf292-abf3-4f5f-80ea-60a48013ff6d",
        "meta" : {
          "profile" : [
            "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_74cdf292-abf3-4f5f-80ea-60a48013ff6d\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization 74cdf292-abf3-4f5f-80ea-60a48013ff6d</b></p><a name=\"74cdf292-abf3-4f5f-80ea-60a48013ff6d\"> </a><a name=\"hc74cdf292-abf3-4f5f-80ea-60a48013ff6d\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-organization.html\">MedComMessagingOrganization</a></p></div><p><b>identifier</b>: <code>https://www.gs1.org/gln</code>/5790000209354, <code>urn:oid:1.2.208.176.1.1</code>/265161000016000</p><p><b>name</b>: Receiver Organization</p></div>"
        },
        "identifier" : [
          {
            "system" : "https://www.gs1.org/gln",
            "value" : "5790000209354"
          },
          {
            "system" : "urn:oid:1.2.208.176.1.1",
            "value" : "265161000016000"
          }
        ],
        "name" : "Receiver Organization"
      }
    },
    {
      "fullUrl" : "https://medcomfhir.dk/ig/acknowledgement/Provenance/4c284936-5454-4116-95fc-3c8eeeed2400",
      "resource" : {
        "resourceType" : "Provenance",
        "id" : "4c284936-5454-4116-95fc-3c8eeeed2400",
        "meta" : {
          "profile" : [
            "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Provenance_4c284936-5454-4116-95fc-3c8eeeed2400\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Provenance 4c284936-5454-4116-95fc-3c8eeeed2400</b></p><a name=\"4c284936-5454-4116-95fc-3c8eeeed2400\"> </a><a name=\"hc4c284936-5454-4116-95fc-3c8eeeed2400\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html\">MedComMessagingProvenance</a></p></div><p>Provenance for <a href=\"MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.html\">MessageHeader: event[x] = Care Communication Message (MedComMessagingEventCodes#care-communication-message)</a></p><p>Summary</p><table class=\"grid\"><tr><td>Occurrence</td><td>2022-09-01 12:01:20+0200</td></tr><tr><td>Recorded</td><td>2022-09-01 12:01:20+0000</td></tr><tr><td>Activity</td><td><span title=\"Codes:{http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes new-message}\">A new message has been sent</span></td></tr></table><p><b>Agents</b></p><table class=\"grid\"><tr><td><b>who</b></td></tr><tr><td><a href=\"Organization-d7056980-a8b2-42aa-8a0e-c1fc85d1f40d.html\">Organization Sender Organization</a></td></tr></table></div>"
        },
        "target" : [
          {
            "reference" : "MessageHeader/42cb9200-f421-4d08-8391-7d51a2503cb4"
          }
        ],
        "occurredDateTime" : "2022-09-01T12:01:20+02:00",
        "recorded" : "2022-09-01T12:01:20Z",
        "activity" : {
          "coding" : [
            {
              "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
              "code" : "new-message"
            }
          ]
        },
        "agent" : [
          {
            "who" : {
              "reference" : "Organization/d7056980-a8b2-42aa-8a0e-c1fc85d1f40d"
            }
          }
        ]
      }
    }
  ]
}

```
