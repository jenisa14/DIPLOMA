

weight=int(input("enter weight in kg="))
height=int(input("enter height in cm="))

height = height/100

bmi=weight/(height**2)
print(bmi)

if bmi>19 and bmi<25 :
    print("person is healthy")

elif bmi<19 :
    print("person is underweight")

else :
    print("person is overweight")
