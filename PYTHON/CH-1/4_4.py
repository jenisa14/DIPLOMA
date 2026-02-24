#compount interest

p=int(input("enter total amount:"))

r=int(input("enter the rate of interest:"))

t=int(input("enter the numbet of year:"))

n=int(input("enter the no of month:"))

CI=p*(1+(r/100*n))**n*t

print("your compound interest is ",CI)




