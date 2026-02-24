import random

def shuffle(lst):
    shuffled_lst = lst.copy()
    random.shuffle(shuffled_lst)
    return shuffled_lst

lst = list(input("Enter elements in list to shuffle, separate by ',' : ").split(','))
shuffled_lst = shuffle(lst)
print("Original list:", lst)
print("Shuffled list:", shuffled_lst)
