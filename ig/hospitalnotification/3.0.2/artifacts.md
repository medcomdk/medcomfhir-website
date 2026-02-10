# Artifacts Summary - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComHospitalNotificationEncounter](StructureDefinition-medcom-hospitalNotification-encounter.md) | Encounter derivation that handles hospital notification when a patient is admitted to a hospital. The hospital notification is always send from a hospital. The receiver of the message is the patients home municipalicy. The hospital notification is send for example when patient is admitted, on leave, returned from leave, finished hospital stay. |
| [MedComHospitalNotificationMessage](StructureDefinition-medcom-hospitalNotification-message.md) | A message for a HospitalNotification. The message is triggered as patients are admitted, onleave or has finished a hospital stay in order to notify the relevant Municipalicy home care |
| [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md) | MessageHeader for a HospitalNotification message. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [MedComHospitalNotificationLeavePeriodExtension](StructureDefinition-medcom-hospitalnotifiation-leave-period-extension.md) | Includes timestamps for start and end of leave of a hospitalization. |
| [MedComReportOfAdmissionExtension](StructureDefinition-medcom-messaging-reportOfAdmissionExtension.md) | Indicates whether the recipient should send a report of admission |
| [MedComReportOfAdmissionRecipientExtension](StructureDefinition-medcom-messaging-reportOfAdmissionRecipientExtension.md) | Recipient of a report of admission response |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [HospitalNotification Encounter - AN_STIN](Encounter-c9782061-ce63-41b5-8be6-655812d23332.md) | Example of MedComHospitalNotificationEncounter 'Cancellation Start hospital stay - admitted'. Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - MORS (acute ambulant)](Encounter-l001c640-6b5d-414c-b6bd-e00ec6d4ceee.md) | Example of MedComHospitalNotificationEncounter 'Deceased' (acute ambulant). Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - MORS (inpatient)](Encounter-gcab7218-9584-11ec-b909-0242ac120002.md) | Example of MedComHospitalNotificationEncounter 'Deceased' (inpatient). Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - RE_STIN](Encounter-b9846c24-0335-11ed-b939-0242ac120002.md) | Example of MedComHospitalNotificationEncounter 'Update Start hospital stay - admitted'. Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - SLHJ (acute ambulant)](Encounter-kbbad98c-3310-404a-af0c-7e3739d7b49f.md) | Example of MedComHospitalNotificationEncounter 'End hospital stay - patient completed to home/primary sector' (acute ambulant). Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - SLHJ (inpatient)](Encounter-f405ba2d-467a-4e92-9acc-9dc2a629760f.md) | Example of MedComHospitalNotificationEncounter 'End hospital stay - patient completed to home/primary sector' (inpatient). Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - SLOR](Encounter-e07c4bd4-cfad-4c4d-9c4b-e4ba3424a65b.md) | Example of MedComHospitalNotificationEncounter 'End leave'. Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - STAA](Encounter-h2cb16ce-af8c-46f3-be9e-89406ef3e7b5.md) | Example of MedComHospitalNotificationEncounter 'Start hospital stay - acute ambulant'. Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - STIN](Encounter-a790f964-88d3-4652-bbc8-81d2f3d035f8.md) | Example of MedComHospitalNotificationEncounter 'Start hospital stay - admitted'. Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - STIN (distinct sender and serviceProvider)](Encounter-m790f964-98d3-4852-bac8-83d2f3d035f8.md) | Example of MedComHospitalNotificationEncounter 'Start hospital stay - admitted'. With different serviceProvider and sender organisation in the Bundle. Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - STIN (two episodeOfCare-identifiers)](Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.md) | Example of MedComHospitalNotificationEncounter 'Start hospital stay - admitted'. With two episodeOfCare-identifiers. Only Valid if used in a Bundle. |
| [HospitalNotification Encounter - STOR](Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.md) | Example of MedComHospitalNotificationEncounter 'Start leave'. Only Valid if used in a Bundle. |
| [HospitalNotification Message - AN_STIN](Bundle-c83671a4-9584-11ec-b909-0242ac120002.md) | Example of MedComHospitalNotificationMessage 'Cancellation Start hospital stay - admitted' |
| [HospitalNotification Message - MORS (acute ambulant)](Bundle-ld31e08a-b91f-49c3-841a-ce80e6380517.md) | Example of MedComHospitalNotificationMessage 'Deceased' (acute ambulant) |
| [HospitalNotification Message - MORS (inpatient)](Bundle-g099bbf3-3fca-4722-a248-bfe1aa956410.md) | Example of MedComHospitalNotificationMessage 'Deceased' (inpatient) |
| [HospitalNotification Message - RE_STIN](Bundle-bfab3e80-9584-11ec-b909-0242ac120002.md) | Example of MedComHospitalNotificationMessage 'Update Start hospital stay - admitted' |
| [HospitalNotification Message - SLHJ (acute ambulant)](Bundle-kcab461b-f44e-4d97-a041-ef7e64800587.md) | Example of MedComHospitalNotificationMessage 'End hospital stay - patient completed to home/primary sector' (acute ambulant) |
| [HospitalNotification Message - SLHJ (inpatient)](Bundle-f4aa42a4-86db-4e68-9b38-9dda0dfd5774.md) | Example of MedComHospitalNotificationMessage 'End hospital stay - patient completed to home/primary sector' (inpatient) |
| [HospitalNotification Message - SLOR](Bundle-e94de8ee-bd94-475e-b454-b8fbbef8a685.md) | Example of MedComHospitalNotificationMessage 'End leave' |
| [HospitalNotification Message - STAA](Bundle-h1c8e4a8-6b45-4669-94ad-2a99ad96bf03.md) | Example of MedComHospitalNotificationMessage 'Start hospital stay - acute ambulant' |
| [HospitalNotification Message - STIN](Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.md) | Example of MedComHospitalNotificationMessage 'Start hospital stay - admitted' |
| [HospitalNotification Message - STIN (different sender and serviceProvider)](Bundle-m908i967-9ie3-9023-b9ec-98108695f01d.md) | Example of MedComHospitalNotificationMessage 'Start hospital stay - admitted'. With different serviceProvider and sender Organization. |
| [HospitalNotification Message - STIN (with two episodeOfCare-identifiers)](Bundle-n73ccf30-80b9-4bd2-bf50-1ac1914498f0.md) | Example of MedComHospitalNotificationMessage 'Start hospital stay - admitted' (with two episodeOfCare-identifiers) |
| [HospitalNotification Message - STOR](Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.md) | Example of MedComHospitalNotificationMessage 'Start leave' |
| [HospitalNotification MessageHeader - AN_STIN.](MessageHeader-d8749b54-1aeb-4089-8941-8d876bdffc51.md) | Example of MedComHospitalNotificationMessageHeader 'Cancellation Start hospital stay - admitted'. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - MORS (acute ambulant).](MessageHeader-nabb68aa-c97b-4905-a60c-71ff3209fd51.md) | Example of MedComHospitalNotificationMessageHeader 'Deceased' (acute ambulant). Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - MORS (inpatient).](MessageHeader-hefc6d95-6161-4493-99c9-f359488dedb8.md) | Example of MedComHospitalNotificationMessageHeader 'Deceased' (inpatient). Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - RE_STIN.](MessageHeader-cc47c1e2-78e6-4291-b071-f423a4f7fbfe.md) | Example of MedComHospitalNotificationMessageHeader 'Revise Start hospital stay - admitted'. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - SLHJ (acute ambulant).](MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.md) | Example of MedComHospitalNotificationMessageHeader 'End hospital stay - patient completed to home/primary sector' (acute ambulant). Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - SLHJ (inpatient).](MessageHeader-g1affa53-c157-4080-abb0-8e681524f969.md) | Example of MedComHospitalNotificationMessageHeader 'End hospital stay - patient completed to home/primary sector' (inpatient). Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - SLOR.](MessageHeader-f47254da-f170-46f0-b624-4778a9c92b1f.md) | Example of MedComHospitalNotificationMessageHeader 'End leave'. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - STAA.](MessageHeader-i50fc5fe-2d11-4ef3-acac-2e2e5c6c0029.md) | Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - acute ambulant'. reportOfAdmissionFlag is 'true'. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - STAA.](MessageHeader-j3675c4a-33db-40f1-b578-ff16e3e9134c.md) | Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - acute ambulant'. Without request for a reportOfAdmission. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - STIN](MessageHeader-a1b27813-8aa8-4fa1-846b-aeabf5afb7d4.md) | Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - admitted'. Without request for a reportOfAdmission. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - STIN (With two episodeOfCare-identifiers)](MessageHeader-1ca19ddf-31bc-4597-8739-968c38dd88f8.md) | Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - admitted'. With two episodeOfCare-identifiers. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - STIN (different serviceProvider and sender organisation)](MessageHeader-o9b4818e-12de-5cc4-c418-d30cbc7b5404.md) | Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - admitted'. With different serviceProvider and sender organisation. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - STIN (including reportOfAdmissionFlag = 'true')](MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.md) | Example of MedComHospitalNotificationMessageHeader 'Start hospital stay - admitted'. reportOfAdmissionFlag is 'true'. Only Valid if used in a Bundle. |
| [HospitalNotification MessageHeader - STOR.](MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.md) | Example of MedComHospitalNotificationMessageHeader 'Start leave'. Only Valid if used in a Bundle. |

### Other 

These are resources that are used within this implementation guide that do not fit into one of the other categories.

| | |
| :--- | :--- |
| [Patient - Bruno Test Elmer](Patient-384b4a58-81d2-11ed-a1eb-0242ac120002.md) | Example of a MedComCorePatient who is deceased and with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-48393486-81c6-11ed-a1eb-0242ac120002.md) | Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-519d5170-81ca-11ed-a1eb-0242ac120002.md) | Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-545fd5e6-a924-11ed-afa1-0242ac120002.md) | Deceased Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-6841b54e-81cd-11ed-a1eb-0242ac120002.md) | Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-6c16f41e-81d1-11ed-a1eb-0242ac120002.md) | Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-97404d10-81c8-11ed-a1eb-0242ac120002.md) | Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-b00ea1c0-81d2-11ed-a1eb-0242ac120002.md) | Deceased Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-d6eeaca6-81c6-11ed-a1eb-0242ac120002.md) | Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-fdc1fc66-81d0-11ed-a1eb-0242ac120002.md) | Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer](Patient-t33cef33-3626-422b-955d-d506aaa65fe1.md) | Example of a MedComCorePatient with minimal information. Only valid if used in a Bundle. |
| [Patient - Bruno Test Elmer (deceased)](Patient-t82fb8a3-6725-41e2-a615-2b1cfcfe9931.md) | Example of a MedComCorePatient who is deceased and with minimal information. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-103fbebe-81d1-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-55ba5884-81ca-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-55eb90b8-81d2-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-753bdcba-81ce-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-7e692262-81cd-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-8858e7e6-81c6-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-a39d4a04-81c8-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-bea5b49e-81d2-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-e5682f5e-81d1-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-eefc2dfa-81c6-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Receiver organization - Plejecenter Herlev.](Organization-o4cdf292-abf3-4f5f-80ea-60a48013ff6d.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-0465ec66-81d2-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-05266a00-81c7-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-1f5882b4-81d1-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-2565d3de-082e-4368-9160-4c719071026b.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-5961ade8-81ca-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-66c12a92-81d2-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-840b4046-81ce-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-8d813af0-81cd-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-abb09e14-81c6-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-b79a7914-81c8-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-cd72967c-81d2-11ed-a1eb-0242ac120002.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [Sender organization - Hjerteafdelingen på Herlev og Gentofte hospital.](Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.md) | Example of a MedComMessagingOrganization with SOR and EAN identifier. Only valid if used in a Bundle. |
| [ServiceProvider organization - Hjertemedicinsk sengeafs. S103](Organization-of839e87-4e44-4977-b38e-92b5a6f187b5.md) | Example of a MedComCoreOrganization with SOR identifier. Only valid if used in a Bundle. |

