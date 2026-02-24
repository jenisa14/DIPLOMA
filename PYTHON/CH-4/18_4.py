#fibonacci up to N number

def fibonacci(n):
    if n <=1 :
        return n
    
    else:
        return(fibonacci(n-1)+fibonacci(n-2))
num=int(input("enter the value of n:"))
print("fibonacci of",num,"is:")

for i in range(num):

    print(fibonacci(i))