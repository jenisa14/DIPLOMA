week_days = ["Monday", "Tuesday","Wednesday","Thursday","Friday", "Saturday","Sunday"]

print ("Day" + (" "*12) + "High Temperature")
print ("-"*30)
temperature = []
temp = 0
spaces = 0

for i,x in enumerate(week_days):
    temp_input = input ("Enter the temperature for " +x+str(":"))
    temperature.append(int(temp_input))
    spaces = 15-len(x)
    print (x," "*spaces,temperature[i])

avg= sum(temperature)//len(week_days)


print ("The average temperature for this week is :-", avg )
