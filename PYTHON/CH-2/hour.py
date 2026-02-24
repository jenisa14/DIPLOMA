
wages=1000

hour=int(input("enter total hour="))

if hour>40 :

    extra=hour-40
    new_salary=(extra*100)+wages

    print(new_salary)
else:

    print(wages)
    
