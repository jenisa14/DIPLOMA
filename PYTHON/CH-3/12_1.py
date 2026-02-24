my_ls=[]

size=int(input("enter list size:"))
print('enter ' + str(size) + ' elements:-')
#i=0

for i in range(size):

   print("enter my_ls[",i,"] = ")
   elements=int(input())
    

   my_ls.append(elements)
    
print("list:-" +str(my_ls))
   
my_ls.sort()
print("list in ascending order:",my_ls)


my_ls.sort(reverse=True)
print("list in discending order:",my_ls)

my_ls.reverse()#reverse operation

my_ls.append(39) #add operation
print(my_ls)

my_ls.insert(4,14)#access elements using index
print(my_ls)

my_ls.remove(my_ls[0])#remove operation
print(my_ls)