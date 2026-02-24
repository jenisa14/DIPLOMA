                  
d1 = {'Andhra Pradesh': 'Amaravati', 'Arunachal Pradesh': 'Itanagar', 'Assam': 'Dispur', 'Bihar': 'Patna', 'Chhattisgarh': 'Raipur', 'Goa': 'Panaji', 'Gujarat': 'Gandhinagar', 'Haryana': 'Chandigarh', 'Himachal Pradesh': 'Shimla', 'Jharkhand': 'Ranchi', 'Karnataka': 'Bengaluru', 'Kerala': 'Thiruvananthapuram', 'Madhya Pradesh': 'Bhopal', 'Maharashtra': 'Mumbai', 'Manipur': 'Imphal', 'Meghalaya': 'Shillong', 'Mizoram': 'Aizawl', 'Nagaland': 'Kohima', 'Odisha': 'Bhubaneswar', 'Punjab': 'Chandigarh', 'Rajasthan': 'Jaipur', 'Sikkim': 'Gangtok', 'Tamil Nadu': 'Chennai', 'Telangana': 'Hyderabad', 'Tripura': 'Agartala', 'Uttar Pradesh': 'Lucknow', 'Uttarakhand': 'Dehradun', 'West Bengal': 'Kolkata'}

for key, value in d1.items():
    # ask user to enter capital of state
    capital = input("Enter capital of " + key + ": ")

    # check if it is correct or not
    if capital == value.lower():
        print("Correct")
    else:
        print("Incorrect")