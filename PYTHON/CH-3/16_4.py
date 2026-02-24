week_dict={}

print(type(week_dict))

mon=int(input("enter monday's temperature:-"))
tue=int(input("enter tuesday's temperature:-"))
wed=int(input("enter wednesday's temperature:-"))
thu=int(input("enter thursday's temperature:-"))
fri=int(input("enter friday's temperature:-"))
sat=int(input("enter saturday's temperature:-"))
sun=int(input("enter sunday's temperature:-"))

sum=mon+tue+wed+thu+fri+sat
avg=sum/7
 
print ("The average temperature for this week is:",avg)

if 40 <= avg >= 50:
  print(week_dict)
  
  
else:
  print('exit')


"""temperatures = {'Monday': 35, 'Tuesday': 42, 'Wednesday': 51,'Thursday': 38, 'Friday': 48, 'Saturday': 41, 'Sunday': 37}

# Iterate through the dictionary

for day, temperature in temperatures.items():
      if 40 <= temperature <= 50:   
          print(day)"""
