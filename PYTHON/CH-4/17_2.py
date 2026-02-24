def remove_duplicates(ls):

    return ls
ls=list(input("enter list elements:"))

print("original list:",ls)

res=[*set(ls)]

print("list after removing duplication:",remove_duplicates(res))