#maximum of 3 number

a=int(input("enter 1st no:"))

b=int(input("enter 2nd no:"))

c=int(input("enter 3rd no:"))

ans= a if a>b  else b if b>c else c

print(ans,"is max")