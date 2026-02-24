#perfact number


n=int(input("enter any number:"))
sum=0

for i in range(1,n):
    if n % i == 0:
        if n != i:
         sum = sum+i

if sum == n:
    print(n,"is perfect")

else:
    print(n,"is not pefact")