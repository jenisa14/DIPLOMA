def gcd(m, n):
    if m == 0:
        return n
    else:
        return gcd(n % m, m)

m = int(input("Enter first number: "))
n = int(input("Enter second number: "))

print(f"GCD of {m} and {n} is: ", gcd(m, n))
