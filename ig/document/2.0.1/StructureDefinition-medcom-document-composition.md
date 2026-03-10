# MedComDocumentComposition - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentComposition**

## Resource Profile: MedComDocumentComposition 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-composition | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComDocumentComposition |

 
The profile of the MedCom Document Composition containing the minimum allowed content. 

### Scope and usage

The MedComDocumentComposition profile defines the structure and narrative content necessary for a document. However, a Composition alone does not constitute a document - the Composition must be the first `entry` in a Bundle where `Bundle.type = document`. Any other resources referenced from Composition must be included as subsequent entries in the Bundle.

The Composition resource organizes clinical and administrative content into sections, each of which contains a narrative, and references other resources for supporting data.

Several elements in this profile map directly to IHE XDS DocumentEntry metadata to ensure compatibility with existing national and international document exchange infrastructures.

#### Author institution and author person

The author element allows up to two references and must always include exactly one author organization and optionally one author person.

**Author institution:** The slice author:institution is mandatory and restricts the reference to a MedComDocumentOrganization. This ensures that every document has one clear author organization responsible for its creation.

**Author person:** An additional author element that does not match the institutional slice is interpreted as an author person. If used, it MUST reference exactly one resource of the allowed types: MedComDocumentPractitioner, MedComDocumentPractitionerRole, MedComDocumentPatient, DkCoreRelatedPerson, or Device.

#### Mapping from IHE-XDS metadata to FHIR Composition

MedCom has developed a mapping. Find the [mapping from IHE XDS metadata to FHIR Composition here](https://medcomdk.github.io/dk-medcom-document/assets/documents/Mapping_from_IHE-XDS_metadata_to_FHIR.html).

**Usages:**

* Examples for this Profile: [Composition/384ca229-c562-4a26-a035-c0c38108e037](Composition-384ca229-c562-4a26-a035-c0c38108e037.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-document-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-composition.csv), [Excel](StructureDefinition-medcom-document-composition.xlsx), [Schematron](StructureDefinition-medcom-document-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-composition",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-composition",
  "version" : "2.0.1",
  "name" : "MedComDocumentComposition",
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
  "description" : "The profile of the MedCom Document Composition containing the minimum allowed content.",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
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
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition"
      },
      {
        "id" : "Composition.id",
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
        "path" : "Composition.id",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.meta",
        "path" : "Composition.meta",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.meta.profile",
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
        "path" : "Composition.meta.profile",
        "short" : "[DocumentEntry.formatCode] Indicates the FHIR Composition profile canonical, including an explicit version `|x.y.z`. The value does not map 1:1 to XDS DocumentEntry.formatCode and SHALL be mapped.",
        "min" : 1,
        "max" : "1",
        "constraint" : [
          {
            "key" : "medcom-canonical-semver",
            "severity" : "error",
            "human" : "The canonical SHALL include an explicit semantic version (semver) with optional prerelease (-...) and build metadata (+...).",
            "expression" : "matches('^.*[|][0-9]+[.][0-9]+([.][0-9]+)?(-[0-9A-Za-z-]+([.][0-9A-Za-z-]+)*)?([+][0-9A-Za-z-]+([.][0-9A-Za-z-]+)*)?$')",
            "source" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-composition"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.language",
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
        "path" : "Composition.language",
        "short" : "[DocumentEntry.languageCode] Human language of the content",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-languagecode-VS-TEMP"
        }
      },
      {
        "id" : "Composition.text",
        "path" : "Composition.text",
        "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.text.status",
        "path" : "Composition.text.status",
        "mustSupport" : true
      },
      {
        "id" : "Composition.text.div",
        "path" : "Composition.text.div",
        "mustSupport" : true
      },
      {
        "id" : "Composition.identifier",
        "path" : "Composition.identifier",
        "short" : "The Composition identifier",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.identifier.system",
        "path" : "Composition.identifier.system",
        "short" : "[DocumentEntry.uniqueId] Sender organization OID (Object Identifier). Example: 1.2.208.184 (MedCom OID).",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.identifier.value",
        "path" : "Composition.identifier.value",
        "short" : "[DocumentEntry.uniqueId] UUID.",
        "min" : 1,
        "constraint" : [
          {
            "key" : "medcom-uuid",
            "severity" : "error",
            "human" : "The value shall correspond to the structure of an UUID",
            "expression" : "$this.matches('(?i)^urn:uuid:[0-9a-f]{8}-[0-9a-f]{4}-[45][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$')",
            "source" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-composition"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.status",
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
        "path" : "Composition.status",
        "patternCode" : "final",
        "mustSupport" : true
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "short" : "[DocumentEntry.typeCode] Kind of document",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-typecode-VS-TEMP"
        }
      },
      {
        "id" : "Composition.type.coding",
        "path" : "Composition.type.coding",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.type.coding.system",
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
        "path" : "Composition.type.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.type.coding.code",
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
        "path" : "Composition.type.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.type.coding.display",
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
        "path" : "Composition.type.coding.display",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "short" : "[DocumentEntry.classCode] Categorization of document",
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-classcode-VS-TEMP"
        }
      },
      {
        "id" : "Composition.category.coding",
        "path" : "Composition.category.coding",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.category.coding.system",
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
        "path" : "Composition.category.coding.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.category.coding.code",
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
        "path" : "Composition.category.coding.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.category.coding.display",
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
        "path" : "Composition.category.coding.display",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.subject",
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
        "path" : "Composition.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient"
            ],
            "aggregation" : ["bundled"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.date",
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
        "path" : "Composition.date",
        "mustSupport" : true
      },
      {
        "id" : "Composition.author",
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
        "path" : "Composition.author",
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
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.author:institution",
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
        "path" : "Composition.author",
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
        "id" : "Composition.title",
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
        "path" : "Composition.title",
        "short" : "[DocumentEntry.title] The readable title of the document.",
        "mustSupport" : true
      },
      {
        "id" : "Composition.confidentiality",
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
        "path" : "Composition.confidentiality",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.attester",
        "path" : "Composition.attester",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.attester.mode",
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
        "path" : "Composition.attester.mode",
        "mustSupport" : true
      },
      {
        "id" : "Composition.attester.party",
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
        "path" : "Composition.attester.party",
        "short" : "[DocumentEntry.legalAuthenticator] Who authenticated the document.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner"
            ],
            "aggregation" : ["bundled"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.event",
        "path" : "Composition.event",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.event.code",
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
        "path" : "Composition.event.code",
        "mustSupport" : true
      },
      {
        "id" : "Composition.event.period",
        "path" : "Composition.event.period",
        "short" : "[DocumentEntry.serviceStartTime, DocumentEntry.serviceStopTime] Time of service that is being documented.",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.event.period.start",
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
        "path" : "Composition.event.period.start",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.event.period.end",
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
        "path" : "Composition.event.period.end",
        "mustSupport" : true
      },
      {
        "id" : "Composition.event.detail",
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
        "path" : "Composition.event.detail",
        "short" : "[DocumentEntry.referenceIdList] Related identifiers or resources",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section.entry",
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
        "path" : "Composition.section.entry",
        "mustSupport" : true
      }
    ]
  }
}

```
