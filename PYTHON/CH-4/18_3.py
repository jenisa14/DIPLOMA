def fibonacci(n1):

    if n1<=1:
        return n1
    else:
        return(fibonacci(n1-1) + fibonacci(n1-2))

       
n=int(input('enter value of n:-'))


print('the fibonacci of ',n,'is:') 
for i in range(n):
        print(fibonacci(i))
