def remove_duplicates(lst):
    return list(set(lst))

lst = list(input("Enter elements in list, separate by ',' : ").split(','))

print("Original list:", lst)
print("List with duplicates removed:", remove_duplicates(lst))
