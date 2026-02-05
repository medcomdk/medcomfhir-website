# Example Acknowledgement message - Fatal error - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example Acknowledgement message - Fatal error**

## Example Bundle: Example Acknowledgement message - Fatal error



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "bc9535ef-ed94-4060-a928-7baddec7ee71",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-messaging-acknowledgement"
    ]
  },
  "type" : "message",
  "timestamp" : "2022-09-01T12:01:00Z",
  "entry" : [
    {
      "fullUrl" : "https://medcomfhir.dk/ig/acknowledgement/MessageHeader/b879c81e-0607-4ccb-b358-24a72208e30d",
      "resource" : {
        "resourceType" : "MessageHeader",
        "id" : "b879c81e-0607-4ccb-b358-24a72208e30d",
        "meta" : {
          "profile" : [
            "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-messaging-acknowledgementHeader"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"MessageHeader_b879c81e-0607-4ccb-b358-24a72208e30d\"> </a><p class=\"res-header-id\"><b>Generated Narrative: MessageHeader b879c81e-0607-4ccb-b358-24a72208e30d</b></p><a name=\"b879c81e-0607-4ccb-b358-24a72208e30d\"> </a><a name=\"hcb879c81e-0607-4ccb-b358-24a72208e30d\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-medcom-messaging-acknowledgementHeader.html\">MedComAcknowledgementMessageHeader</a></p></div><p><b>event</b>: <a href=\"http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-acknowledgement-message\">MedComMessagingEventCodes: acknowledgement-message</a> (Acknowledgement Message)</p><h3>Destinations</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Extension</b></td><td><b>Endpoint</b></td><td><b>Receiver</b></td></tr><tr><td style=\"display: none\">*</td><td/><td><a href=\"https://sor2.sum.dsdn.dk/#id=265161000016000\">https://sor2.sum.dsdn.dk/#id=265161000016000</a></td><td><a href=\"Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.html\">Organization Receiver Organization</a></td></tr></table><p><b>sender</b>: <a href=\"Organization-d7056980-a8b2-42aa-8a0e-c1fc85d1f40d.html\">Organization Sender Organization</a></p><h3>Sources</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Endpoint</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"https://sor2.sum.dsdn.dk/#id=953741000016009\">https://sor2.sum.dsdn.dk/#id=953741000016009</a></td></tr></table><h3>Responses</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Identifier</b></td><td><b>Code</b></td><td><b>Details</b></td></tr><tr><td style=\"display: none\">*</td><td>53128d9b-cede-4c7f-8904-809eab322d7d</td><td>Fatal Error</td><td><a href=\"OperationOutcome-becb2a8e-3a68-4083-910e-811296affd43.html\">OperationOutcome</a></td></tr></table></div>"
        },
        "eventCoding" : {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-eventCodes",
          "code" : "acknowledgement-message"
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
            "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000",
            "receiver" : {
              "reference" : "Organization/74cdf292-abf3-4f5f-80ea-60a48013ff6d"
            }
          }
        ],
        "sender" : {
          "reference" : "Organization/d7056980-a8b2-42aa-8a0e-c1fc85d1f40d"
        },
        "source" : {
          "endpoint" : "https://sor2.sum.dsdn.dk/#id=953741000016009"
        },
        "response" : {
          "identifier" : "53128d9b-cede-4c7f-8904-809eab322d7d",
          "code" : "fatal-error",
          "details" : {
            "reference" : "OperationOutcome/becb2a8e-3a68-4083-910e-811296affd43"
          }
        }
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
    },
    {
      "fullUrl" : "https://medcomfhir.dk/ig/acknowledgement/Provenance/9c56ba88-9645-11ec-b909-0242ac120002",
      "resource" : {
        "resourceType" : "Provenance",
        "id" : "9c56ba88-9645-11ec-b909-0242ac120002",
        "meta" : {
          "profile" : [
            "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Provenance_9c56ba88-9645-11ec-b909-0242ac120002\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Provenance 9c56ba88-9645-11ec-b909-0242ac120002</b></p><a name=\"9c56ba88-9645-11ec-b909-0242ac120002\"> </a><a name=\"hc9c56ba88-9645-11ec-b909-0242ac120002\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html\">MedComMessagingProvenance</a></p></div><p>Provenance for <a href=\"MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.html\">MessageHeader: event[x] = Acknowledgement Message (MedComMessagingEventCodes#acknowledgement-message)</a></p><p>Summary</p><table class=\"grid\"><tr><td>Occurrence</td><td>2022-09-01 12:01:20+0200</td></tr><tr><td>Recorded</td><td>2022-09-01 12:01:20+0000</td></tr><tr><td>Activity</td><td><span title=\"Codes:{http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes acknowledgement}\">Acknowledgement message has been sent</span></td></tr></table><p><b>Agents</b></p><table class=\"grid\"><tr><td><b>who</b></td></tr><tr><td><a href=\"Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.html\">Organization Receiver Organization</a></td></tr></table></div>"
        },
        "target" : [
          {
            "reference" : "MessageHeader/b879c81e-0607-4ccb-b358-24a72208e30d"
          }
        ],
        "occurredDateTime" : "2022-09-01T12:01:20+02:00",
        "recorded" : "2022-09-01T12:01:20Z",
        "activity" : {
          "coding" : [
            {
              "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
              "code" : "acknowledgement"
            }
          ]
        },
        "agent" : [
          {
            "who" : {
              "reference" : "Organization/74cdf292-abf3-4f5f-80ea-60a48013ff6d"
            }
          }
        ],
        "entity" : [
          {
            "role" : "revision",
            "what" : {
              "reference" : "MessageHeader/42cb9200-f421-4d08-8391-7d51a2503cb4"
            }
          }
        ]
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
      "fullUrl" : "https://medcomfhir.dk/ig/acknowledgement/OperationOutcome/becb2a8e-3a68-4083-910e-811296affd43",
      "resource" : {
        "resourceType" : "OperationOutcome",
        "id" : "becb2a8e-3a68-4083-910e-811296affd43",
        "meta" : {
          "profile" : [
            "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-acknowledgement-operationoutcome"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"OperationOutcome_becb2a8e-3a68-4083-910e-811296affd43\"> </a><p class=\"res-header-id\"><b>Generated Narrative: OperationOutcome becb2a8e-3a68-4083-910e-811296affd43</b></p><a name=\"becb2a8e-3a68-4083-910e-811296affd43\"> </a><a name=\"hcbecb2a8e-3a68-4083-910e-811296affd43\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-medcom-acknowledgement-operationoutcome.html\">MedComAcknowledgementOperationOutcome</a></p></div><h3>Issues</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Severity</b></td><td><b>Code</b></td><td><b>Details</b></td></tr><tr><td style=\"display: none\">*</td><td>Error</td><td>Structural Issue</td><td><span title=\"Codes:{http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-acknowledgement-error-codes MSG_VALUESET_VALUE_UNKNOWN}\">The value provided is not in the valueSet</span></td></tr></table></div>"
        },
        "issue" : [
          {
            "severity" : "error",
            "code" : "structure",
            "details" : {
              "coding" : [
                {
                  "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-acknowledgement-error-codes",
                  "code" : "MSG_VALUESET_VALUE_UNKNOWN"
                }
              ]
            }
          }
        ]
      }
    }
  ]
}

```
