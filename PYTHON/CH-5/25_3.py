#print date 
print('enter date in DD/MM/YYYY:')

date=input()
print('DD/MM/YYYY format:')

str1=date[3:5] + "-" + date [:2] + "-" + date[6:]
print(str1)