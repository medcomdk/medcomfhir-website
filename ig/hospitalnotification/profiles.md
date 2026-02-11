# Profiles - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* **Profiles**

## Profiles

 The following profiles set the minimum expectations to record, search and fetch health data associated with a Patient: 

* [MedComHospitalNotificationEncounter](StructureDefinition-medcom-hospitalNotification-encounter.md) 
Encounter derivation that handles hospital notification when a patient is admitted to a hospital. The hospital notification is always send from a hospital. The receiver of the message is the patients home municipalicy. The hospital notification is send for example when patient is admitted, on leave, returned from leave, finished hospital stay. 

* [MedComHospitalNotificationMessage](StructureDefinition-medcom-hospitalNotification-message.md) 
A message for a HospitalNotification. The message is triggered as patients are admitted, onleave or has finished a hospital stay in order to notify the relevant Municipalicy home care 

* [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md) 
MessageHeader for a HospitalNotification message. 

