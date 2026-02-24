#10.4_Anagram.py
def is_anagram(str1, str2):

    return sorted(str1.lower()) == sorted(str2.lower())
str1 = input("Enter the first string: ")
str2 = input("Enter the second string: ")

if is_anagram(str1,str2):
    print("The strings are anagrams.")

else:
    print("The strings are not anagrams.")
