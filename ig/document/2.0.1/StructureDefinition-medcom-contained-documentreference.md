# MedComContainedDocumentReference - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComContainedDocumentReference**

## Resource Profile: MedComContainedDocumentReference 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-contained-documentreference | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComContainedDocumentReference |

 
A profile stating the rules, when exchanging a FHIR document in the Danish Healthcare sector using IHE MHD and IHE XDS based document sharing. 

### Scope and usage

The MedComContainedDocumentReference profile is not intented to be exchanged until the infrastructure is ready to receive it, but can be used for validation of metadata associated with a document. This profile provides metadata about a document, this can be CDA, FHIR or PDF. It holds the required metadata from the IHE XDS metadata standard, and a [mapping between the two can be found on GitHub pages](https://medcomdk.github.io/dk-medcom-document/assets/documents/Mapping_from_IHE-XDS_metadata_to_FHIR.html).

#### Rationale of the MedComContainedDocumentReference

This mapping has been developed to enable the future use of FHIR within the Danish document-sharing infrastructure, which currently relies on IHE XDS metadata. By aligning the Danish XDS metadata requirements with a profiled FHIR DocumentReference, the use of DocumentReference can be adopted seamlessly once the national infrastructure transitions towards FHIR-based exchange.

In the interim, mapping from IHE XDS to DocumentReference can already be used to support validation and quality assurance. Implementers can map the metadata they populate in the IHE XDS format to the corresponding elements in the relevant MedCom FHIR DocumentReference profile. Using FHIR’s native validation tooling, it is possible to verify that the supplied metadata conforms to the expected structure and constraints defined by the profile. This provides an immediate benefit, allowing organisations to prepare for a gradual migration to FHIR while maintaining compatibility with the existing XDS-based infrastructure.

Find the [mapping from IHE XDS metadata to FHIR DocumentReference here](https://medcomdk.github.io/dk-medcom-document/assets/documents/Mapping_from_IHE-XDS_metadata_to_FHIR.html).

#### Contained resources

This profile includes `contained` as part of its name because referenced resources **MUST** be contained inside the DocumentReference instance. The current Danish infrastructure is not designed to store or manage multiple separate FHIR resources, and containment ensures that all necessary metadata is delivered as a single, self-contained unit consistent with the existing XDS-based workflow.

#### Author institution and author person

The author element allows up to two references and must always include exactly one author organization and optionally one author person.

**Author institution:** The slice author:institution is mandatory and restricts the reference to a MedComDocumentOrganization. This ensures that every document has one clear author organization responsible for its creation.

**Author person:** An additional author element that does not match the institutional slice is interpreted as an author person. If used, it MUST reference exactly one resource of the allowed types: MedComDocumentPractitioner, MedComDocumentPractitionerRole, MedComDocumentPatient, DkCoreRelatedPerson, or Device.

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-contained-documentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-contained-documentreference.csv), [Excel](StructureDefinition-medcom-contained-documentreference.xlsx), [Schematron](StructureDefinition-medcom-contained-documentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-contained-documentreference",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-contained-documentreference",
  "version" : "2.0.1",
  "name" : "MedComContainedDocumentReference",
  "status" : "active",
  "date" : "2026-03-10T10:51:18+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        },
        {
          "system" : "email",
          "value" : "fhir@medcom.dk"
        }
      ]
    }
  ],
  "description" : "A profile stating the rules, when exchanging a FHIR document in the Danish Healthcare sector using  IHE MHD and IHE XDS based document sharing.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.extension",
        "sliceName" : "versionid",
        "mustSupport" : true
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
        "id" : "DocumentReference.extension:homeCommunityid.value[x]:valueCoding.system",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.extension.value[x].system"
      },
      {
        "id" : "DocumentReference.extension:homeCommunityid.value[x]:valueCoding.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.extension.value[x].code"
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.identifier.system",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.identifier:entryUUID.value",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.identifier.value",
        "constraint" : [
          {
            "key" : "medcom-uuid",
            "severity" : "error",
            "human" : "The value shall correspond to the structure of an UUID",
            "expression" : "$this.matches('(?i)^urn:uuid:[0-9a-f]{8}-[0-9a-f]{4}-[45][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$')",
            "source" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-contained-documentreference"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.status",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.status",
        "short" : "[DocumentEntry.availabilityStatus] current = active | superseded = deprecated.",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.type",
        "path" : "DocumentReference.type",
        "short" : "[DocumentEntry.typeCode] Kind of document.",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-typecode-VS-TEMP"
        }
      },
      {
        "id" : "DocumentReference.type.coding",
        "path" : "DocumentReference.type.coding",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.type.coding.system",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.type.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.type.coding.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.type.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.type.coding.display",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
            "valueBoolean" : true
          },
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.type.coding.display",
        "min" : 1,
        "mustSupport" : true
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.category.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.category.coding.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.category.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.category.coding.display",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
            "valueBoolean" : true
          },
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.category.coding.display",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.subject",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
            "aggregation" : ["bundled"]
          }
        ]
      },
      {
        "id" : "DocumentReference.author:institution",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "id" : "DocumentReference.authenticator",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.securityLabel.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.securityLabel.coding.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.content.attachment.url",
        "short" : "[DocumentEntry.URI] URI where the data can be found.",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.size",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
            "valueBoolean" : true
          },
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.content.attachment.title",
        "short" : "[DocumentEntry.title] The readable title of the document.",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.creation",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.content.attachment.creation",
        "short" : "[DocumentEntry.creationTime] Date attachment was first created.",
        "min" : 1,
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-contained-documentreference"
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
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-formatcode-VS-TEMP"
        }
      },
      {
        "id" : "DocumentReference.content.format.system",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.content.format.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.format.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.content.format.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.format.display",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
            "valueBoolean" : true
          },
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.event.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.event.coding.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.event.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.period",
        "path" : "DocumentReference.context.period",
        "short" : "[DocumentEntry.serviceStartTime, DocumentEntry.serviceStopTime] Time of service that is being documented."
      },
      {
        "id" : "DocumentReference.context.period.start",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.period.start",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.period.end",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.facilityType.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.facilityType.coding.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.facilityType.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.facilityType.coding.display",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
            "valueBoolean" : true
          },
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.practiceSetting.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.practiceSetting.coding.code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.practiceSetting.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.practiceSetting.coding.display",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
            "valueBoolean" : true
          },
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
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
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.sourcePatientInfo.reference",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.sourcePatientInfo.identifier",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.sourcePatientInfo.identifier",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.related",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/document/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "DocumentReference.context.related",
        "short" : "[DocumentEntry.referenceIdList] Related identifiers or resources.",
        "mustSupport" : true
      }
    ]
  }
}

```
