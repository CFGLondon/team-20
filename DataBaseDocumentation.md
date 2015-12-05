
#Database Tables

##DisabilityCategory

This table has the categories for the types of disabilities. Currently there are only four types of disabilities: visual, audio, speech, and mobility.

* category
- A string stating the type of disability, such as 'Hearing'.

##Language

This table has the different types of Languages, and the dialects for each language.

* name
- A string stating the language, such as 'English'.

* dialect
- A string stating the dialect, such as 'US' or 'GB'.

##ProblemCategory

This table has the categories for the types of problems, such as education or police.

* category
- A string stating the type of problem, such as 'Education'.

##RawSMSData

This table stores the raw SMS text, as well as the phone number of the sender.

* msg_contents
- A string that contains the raw SMS text.

* phone_number
- A string that contains the phone number of the sender.

##Report

Main table. Has all of the information needed in a report to send to ADD.

* lat
- A float that contains the latitude coordinate of the location the report was sent.

* long
- A float that contains the longitude coordinate of the location the report was sent.

* location_is_precise
- A boolean that details whether the location is a precise location.

* location_prose
- Further details about the location (Optional).

* problem_prose
- Further details about problems stated in the report (Optional).

* id_language
- Foreign key into the Language table.

* time_sent
- Time stamp of when the report was sent.

* age
- Age of the sender (Optional).

* gender
- Gender of the sender (Optional).

* requires_editing
- Boolean that flags whether the local moderator needs to edit because the original SMS text was formatted incorrectly.

* editor_comments
- Any further details stated by the editor of a text (Optional).

* problem_category
- Foreign key into the ProblemCategory table.

* is_solved
- Boolean that flags whether the problem stated in the report has been solved.

* time_updated
- Time stamp of whenever a report has been updated.

* sms_id
- Foreign key into the RawSMSData table.

* disability_category
- Foreign key into the DisabilityCategory table. 
