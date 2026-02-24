ls=[]

N=int(input("enter list size:"))
print('enter ' + str(N) + ' number:-')

for i in range(N):

   print("enter ls[",i,"]= ")
   num=int(input())
   ls.append(num)


print('origanal list:-',ls)

res=[*set(ls)]
print('list after removing duplication:-',res)