str1=input('enter string:')
str1=str1.lower()
sum=0

for i in str1:
    sum = sum +ord(i) - 96

print(str1,'=',sum)