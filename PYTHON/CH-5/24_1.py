"""str1=input('enter string:')
j=-1
flag=0

for i in str1:
    if i!=str1[j]:
        flag=1
        break
    j=j-1
if flag != i:

    print('the string is not palindrom')
else:
   print('the string is palindrom')"""

n=int(input('enter n:'))
temp=n
flag=0

while(n>0):
    dig = n % 10
    flag  = flag * 10 + dig
    n = n // 10

if temp == flag:
    print('is palindrom')
else:
    print('is not palindrom')
