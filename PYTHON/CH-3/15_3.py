
dict1={1:'a',2:'b',3:'c',4:'d',5:'e'}
dict2={6:'f',7:'g',8:'h',9:'i',10:'j'}

dict3=dict1|dict2#merge two dictionary
print('concatenation:-',dict3)
 
dict2[11]='k'#add new iteam in dict2
print(dict2)

dict1.pop(4)#remove item in dict1
print(dict1)

key=int(input('enter the key value:-'))


if key in dict1 or dict2:
        print('the given key exist in the dictionary')
else:
       print('the given key not present in dictionary')    
