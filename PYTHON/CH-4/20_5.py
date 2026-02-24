def gcd(m,n):
    if(n==0):
        return m
    else:
        return gcd(n,m%n)
m=int(input('enter first number='))
n=int(input('enter second number='))
GCD=gcd(m,n)
print('GCD is:-',GCD)
            