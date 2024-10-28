## happy path
* greet
  - utter_greet
* mood_great
  - utter_happy

## sad path 1
* greet
  - utter_greet
* mood_unhappy
  - utter_cheer_up
  - utter_did_that_help
* affirm
  - utter_happy

## sad path 2
* greet
  - utter_greet
* mood_unhappy
  - utter_cheer_up
  - utter_did_that_help
* deny
  - utter_goodbye

## say goodbye
* goodbye
  - utter_goodbye

## bot challenge
* bot_challenge
  - utter_iamabot

## find a coach
* greet
  - utter_greet
* find_coach
  - utter_find_coach
* affirm
  - utter_affirm

## coach details request
* greet
  - utter_greet
* find_coach
  - utter_find_coach
* coach_details{"coach_name": "Li Wei"}
  - utter_coach_details
* affirm
  - utter_affirm

## check coach availability
* greet
  - utter_greet
* find_coach
  - utter_find_coach
* coach_availability{"coach_name": "Zhang Jie"}
  - utter_coach_availability
* affirm
  - utter_affirm

## inquire about coach rate
* greet
  - utter_greet
* coach_rate{"coach_name": "Yang Ming"}
  - utter_coach_rate
* affirm
  - utter_affirm

## inquire about coach location
* greet
  - utter_greet
* coach_location{"coach_name": "Wu Fei"}
  - utter_coach_location
* affirm
  - utter_affirm

## inquire about coach experience
* greet
  - utter_greet
* coach_experience{"coach_name": "Sun Yang"}
  - utter_coach_experience
* affirm
  - utter_affirm

## inquire about coach language
* greet
  - utter_greet
* coach_language{"coach_name": "Li Wei"}
  - utter_coach_language
* affirm
  - utter_affirm

## request information about CoachWise
* greet
  - utter_greet
* information
  - utter_information

## request diet or training program
* greet
  - utter_greet
* request_diet_or_training
  - utter_request_diet_or_training
* find_coach
  - utter_find_coach
* affirm
  - utter_affirm
