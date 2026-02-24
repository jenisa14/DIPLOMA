str1 = input('enter string:')
str1 = str1.lower()
vowels=0
consonants=0
i=0

for i in range(len(str1)):

    if(str1[i] == 'a' or str1[i] == 'e' or str1[i] == 'i' or str1[i] == 'o' or str1[i] == 'u'):

        vowels = vowels + 1
    else:
        consonants  = consonants + 1
print('number of vowels:',vowels)
print('number of consonants:',consonants)