str1 = input('enter first string:')
str2 = input('enter second string:')
str1 = str1.lower()
str2 = str2.lower()

if len(str1) == len(str2):
    n_str1 = sorted(str1)
    n_str2 = sorted(str2)

   if str1 == str2:
    print(str1 + 'and' + str2 + 'are anagram')

   else:
    print(str1 + 'and' + str2 + 'are not anagram')
else:

   print(str1 + 'and' + str2 + 'are not anagram')