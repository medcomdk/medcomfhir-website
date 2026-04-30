# HomeCareObservationDocumentReference - Danish XDS Documents profiles v0.1.0-homecareobservation-draft-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HomeCareObservationDocumentReference**

## Resource Profile: HomeCareObservationDocumentReference 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/homecare-observation-documentreference | *Version*:0.1.0-homecareobservation-draft-2 |
| Draft as of 2026-04-30 | *Computable Name*:HomeCareObservationDocumentReference |

 
A profile stating the rules, when exchanging a document including homecare observation (DA: Kommunale Prøvesvar). 

**Usages:**

* Examples for this Profile: [DocumentReference/16002002-ac41-45de-ad6b-eb02b098e859](DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.xdsdocuments|current/StructureDefinition/homecare-observation-documentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-homecare-observation-documentreference.csv), [Excel](StructureDefinition-homecare-observation-documentreference.xlsx), [Schematron](StructureDefinition-homecare-observation-documentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "homecare-observation-documentreference",
  "url" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/homecare-observation-documentreference",
  "version" : "0.1.0-homecareobservation-draft-2",
  "name" : "HomeCareObservationDocumentReference",
  "status" : "draft",
  "date" : "2026-04-30T11:35:54+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medcom.dk/"
        }
      ]
    }
  ],
  "description" : "A profile stating the rules, when exchanging a document including homecare observation (DA: Kommunale Prøvesvar).",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "DocumentEntry-Mapping",
      "uri" : "urn:ihe:iti:xds:documententry",
      "name" : "XDS and MHD Mapping"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "fhircomposition",
      "uri" : "http://hl7.org/fhir/composition",
      "name" : "FHIR Composition"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "xds",
      "uri" : "http://ihe.net/xds",
      "name" : "XDS metadata equivalent"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-minimaldocumentreference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference"
      },
      {
        "id" : "DocumentReference.id",
        "path" : "DocumentReference.id",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.text",
        "path" : "DocumentReference.text",
        "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.text.status",
        "path" : "DocumentReference.text.status",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.text.div",
        "path" : "DocumentReference.text.div",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.extension",
        "path" : "DocumentReference.extension",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.extension:versionid",
        "path" : "DocumentReference.extension",
        "sliceName" : "versionid",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.extension:versionid.extension",
        "path" : "DocumentReference.extension.extension",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.extension:versionid.value[x]",
        "path" : "DocumentReference.extension.value[x]",
        "patternString" : "2.0"
      },
      {
        "id" : "DocumentReference.extension:homeCommunityid",
        "path" : "DocumentReference.extension",
        "sliceName" : "homeCommunityid",
        "short" : "[DocumentEntry.homeCommunityId] A unique identifier for a community where the DocumentEntry and document can be accessed.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-homecommunityid-extension"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.extension:homeCommunityid.url",
        "path" : "DocumentReference.extension.url",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.extension:homeCommunityid.value[x]:valueCoding",
        "path" : "DocumentReference.extension.value[x]",
        "sliceName" : "valueCoding",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-homeCommunityId-VS-TEMP"
        }
      },
      {
        "id" : "DocumentReference.masterIdentifier",
        "path" : "DocumentReference.masterIdentifier",
        "short" : "[DocumentEntry.uniqueId] Master Version Specific Identifier",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.masterIdentifier.system",
        "path" : "DocumentReference.masterIdentifier.system",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.masterIdentifier.value",
        "path" : "DocumentReference.masterIdentifier.value",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.identifier",
        "path" : "DocumentReference.identifier",
        "min" : 1
      },
      {
        "id" : "DocumentReference.identifier:entryUUID",
        "path" : "DocumentReference.identifier",
        "sliceName" : "entryUUID",
        "short" : "[DocumentEntry.entryUUID] Identifier for the document.",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "DocumentReference.identifier:entryUUID.system",
        "path" : "DocumentReference.identifier.system",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.identifier:entryUUID.value",
        "path" : "DocumentReference.identifier.value",
        "constraint" : [
          {
            "key" : "medcom-uuid",
            "severity" : "error",
            "human" : "The value shall correspond to the structure of an UUID",
            "expression" : "$this.matches('(?i)^urn:uuid:[0-9a-f]{8}-[0-9a-f]{4}-[45][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$')",
            "source" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/homecare-observation-documentreference"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.status",
        "path" : "DocumentReference.status",
        "short" : "[DocumentEntry.availabilityStatus] current = active | superseded = deprecated.",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.type",
        "path" : "DocumentReference.type",
        "min" : 1
      },
      {
        "id" : "DocumentReference.type.coding",
        "path" : "DocumentReference.type.coding",
        "patternCoding" : {
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "HCOM",
          "display" : "HomeCareObservation message"
        },
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/xdsdocuments/ValueSet/MedComHCOTypeCodeVS"
        }
      },
      {
        "id" : "DocumentReference.category",
        "path" : "DocumentReference.category",
        "short" : "[DocumentEntry.classCode] Categorization of document.",
        "min" : 1,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-classcode-VS-TEMP"
        }
      },
      {
        "id" : "DocumentReference.category.coding.system",
        "path" : "DocumentReference.category.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.category.coding.code",
        "path" : "DocumentReference.category.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.category.coding.display",
        "path" : "DocumentReference.category.coding.display",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.subject",
        "path" : "DocumentReference.subject",
        "short" : "[DocumentEntry.sourcePatientInfo, DocumentEntry.sourcePatientId] Who/what is the subject of the document.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient"
            ],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "DocumentReference.author",
        "path" : "DocumentReference.author",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "$this.resolve()"
            }
          ],
          "rules" : "open"
        },
        "short" : "[DocumentEntry.author] The slice author:institution ensures one mandatory organizational author.\nAny author element that does not match this slice is interpreted\nas an author person.",
        "max" : "2",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "DocumentReference.author:institution",
        "path" : "DocumentReference.author",
        "sliceName" : "institution",
        "short" : "The organization who authored the document.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.author:person",
        "path" : "DocumentReference.author",
        "sliceName" : "person",
        "short" : "A person/role/patient/device author of the document.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.authenticator",
        "path" : "DocumentReference.authenticator",
        "short" : "[DocumentEntry.legalAuthenticator] Who authenticated the document.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
            ],
            "aggregation" : ["contained"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.securityLabel",
        "path" : "DocumentReference.securityLabel",
        "short" : "[DocumentEntry.confidentialityCode] Document security-tags.",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "DocumentReference.securityLabel.coding",
        "path" : "DocumentReference.securityLabel.coding",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.securityLabel.coding.system",
        "path" : "DocumentReference.securityLabel.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.securityLabel.coding.code",
        "path" : "DocumentReference.securityLabel.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content",
        "path" : "DocumentReference.content",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment",
        "path" : "DocumentReference.content.attachment",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.contentType",
        "path" : "DocumentReference.content.attachment.contentType",
        "short" : "[DocumentEntry.mimeType] Mime type of the content, with charset etc.",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-mimetype-VS-TEMP"
        }
      },
      {
        "id" : "DocumentReference.content.attachment.language",
        "path" : "DocumentReference.content.attachment.language",
        "short" : "[DocumentEntry.languageCode] Human language of the content.",
        "min" : 1,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-languagecode-VS-TEMP"
        }
      },
      {
        "id" : "DocumentReference.content.attachment.url",
        "path" : "DocumentReference.content.attachment.url",
        "short" : "[DocumentEntry.URI] URI where the data can be found.",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.size",
        "path" : "DocumentReference.content.attachment.size",
        "short" : "[DocumentEntry.size] Number of bytes of content.",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.hash",
        "path" : "DocumentReference.content.attachment.hash",
        "short" : "[DocumentEntry.hash] Hash of the data (sha-1).",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.title",
        "path" : "DocumentReference.content.attachment.title",
        "short" : "[DocumentEntry.title] The readable title of the document.",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.creation",
        "path" : "DocumentReference.content.attachment.creation",
        "short" : "[DocumentEntry.creationTime] Date attachment was first created.",
        "min" : 1,
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/homecare-observation-documentreference"
          }
        ]
      },
      {
        "id" : "DocumentReference.content.format",
        "path" : "DocumentReference.content.format",
        "short" : "[DocumentEntry.formatCode] Format/content rules for the document.",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/xdsdocuments/ValueSet/MedComHCOFormatCodeVS"
        }
      },
      {
        "id" : "DocumentReference.content.format.system",
        "path" : "DocumentReference.content.format.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.format.code",
        "path" : "DocumentReference.content.format.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.format.display",
        "path" : "DocumentReference.content.format.display",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context",
        "path" : "DocumentReference.context",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.event",
        "path" : "DocumentReference.context.event",
        "short" : "[DocumentEntry.eventCodeList] Main clinical acts documented.",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.event.coding.system",
        "path" : "DocumentReference.context.event.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.event.coding.code",
        "path" : "DocumentReference.context.event.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.period",
        "path" : "DocumentReference.context.period",
        "short" : "[DocumentEntry.serviceStartTime, DocumentEntry.serviceStopTime] Time of service that is being documented.",
        "min" : 1
      },
      {
        "id" : "DocumentReference.context.period.start",
        "path" : "DocumentReference.context.period.start",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.period.end",
        "path" : "DocumentReference.context.period.end",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.facilityType",
        "path" : "DocumentReference.context.facilityType",
        "short" : "[DocumentEntry.healthcareFacilityTypeCode] Kind of facility where patient was seen.",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-HealthcareFacilityTypeCode-VS-TEMP"
        }
      },
      {
        "id" : "DocumentReference.context.facilityType.coding",
        "path" : "DocumentReference.context.facilityType.coding",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.facilityType.coding.system",
        "path" : "DocumentReference.context.facilityType.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.facilityType.coding.code",
        "path" : "DocumentReference.context.facilityType.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.facilityType.coding.display",
        "path" : "DocumentReference.context.facilityType.coding.display",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.practiceSetting",
        "path" : "DocumentReference.context.practiceSetting",
        "short" : "[DocumentEntry.practiceSettingCode] Additional details about where the content was created (e.g. clinical specialty).",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-PracticeSettingCode-VS-TEMP"
        }
      },
      {
        "id" : "DocumentReference.context.practiceSetting.coding",
        "path" : "DocumentReference.context.practiceSetting.coding",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.practiceSetting.coding.system",
        "path" : "DocumentReference.context.practiceSetting.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.practiceSetting.coding.code",
        "path" : "DocumentReference.context.practiceSetting.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.practiceSetting.coding.display",
        "path" : "DocumentReference.context.practiceSetting.coding.display",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.sourcePatientInfo",
        "path" : "DocumentReference.context.sourcePatientInfo",
        "short" : "[DocumentEntry.sourcePatientId and DocumentEntry.sourcePatientInfo] Patient demographics from source. Must be the same reference as in DocumentReference.subject.",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.context.sourcePatientInfo.reference",
        "path" : "DocumentReference.context.sourcePatientInfo.reference",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.sourcePatientInfo.identifier",
        "path" : "DocumentReference.context.sourcePatientInfo.identifier",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.related",
        "path" : "DocumentReference.context.related",
        "short" : "[DocumentEntry.referenceIdList] Related identifiers or resources.",
        "mustSupport" : true
      }
    ]
  }
}

```
