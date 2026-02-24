#sum of odd series

sum=0
#a=1

for i in range(1,99,2):
    for  j in range(i,99,2):
   
     a=i
     b=a+2
    sum = sum+(a/b)
        #a=b


print("sum :",sum)