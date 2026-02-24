tpl=(28,3.5,'j',"python")#tuple with defferent data type
print(tpl)
ls=list(tpl)#tuple convert to list
print(type(ls))

print(ls)
ls.remove('j')#remove iteam from list
print(ls)

tpl1=tuple(ls)#convert list to tuple
print(tpl1)