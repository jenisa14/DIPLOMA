ls=[23,3.9,'M','python',23,'hello',3.9]
print('original list:-',ls)

ls=list(dict.fromkeys(ls))
#res = [ *set(list)]
print('list after removing duplication:-',ls)