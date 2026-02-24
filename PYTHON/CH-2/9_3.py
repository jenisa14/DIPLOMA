from itertools import combinations
number=[]

n=int(input("enter the value of n:-"))

print("entre", + n ,"number")
for i  in  range(1,n):

    j=int(input("enter num:"))
    number.append(j)
c=combinations(number,2)
for e in c:
    print(e)    

