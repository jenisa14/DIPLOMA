n=int(input("enter n="))

sum=int(0)


for i in range(0,n):

    num=int(input("enter elements:-")) 
    sum += num
    print("sum=",sum)



avg=sum/n

print("avg=",avg)