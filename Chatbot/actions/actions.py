import pandas as pd
from rasa_sdk import Action
import os
#from rasa_sdk.executor import CollectingDispatcher
#from rasa_sdk.events import SlotSet

class ActionFindBestCoach(Action):
    def name(self):
        return "action_find_best_coach"

    def run(self, dispatcher, tracker, domain):
        # Load the dataset
        file_path = '/app/dataset/coaches_dataset.csv'
        print(f"Checking file path: {file_path}, Exists: {os.path.exists(file_path)}")

        try:
            coaches_df = pd.read_csv(file_path)
        except FileNotFoundError:
            dispatcher.utter_message(text="The dataset could not be loaded. Please check the file path.")
            return []
        
        # Get the sport from the slot
        sport = tracker.get_slot("sport")
        
        # Filter the dataset for the specified sport
        sport_coaches = coaches_df[coaches_df["Sport Type"].str.lower() == sport.lower()]
        
        if sport_coaches.empty:
            dispatcher.utter_message(response="utter_no_best_coach_found")
            return []
        
        # Find the coach with the highest rating for the given sport
        best_coach = sport_coaches.loc[sport_coaches["Rating"].idxmax()]

        # Extract the best coach details
        best_coach_name = best_coach["Coach Name"]
        best_coach_rating = best_coach["Rating"]
        best_coach_location = best_coach["Location"]
        best_coach_experience = best_coach["Years of Experience"]
        best_coach_availability = best_coach["Availability"]
        
        # Respond with the best coach's details
        response = (
            f"The best coach for {sport} is {best_coach_name}, with a rating of {best_coach_rating}. "
            f"They have {best_coach_experience} years of experience and are located in {best_coach_location}. "
            f"They are available on {best_coach_availability}."
        )
        
        dispatcher.utter_message(text=response)
        return []