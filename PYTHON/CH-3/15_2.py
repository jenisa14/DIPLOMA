set1={39,56,11,22,34,67}
set2={40,23,45,89,39,22,34}

print(set1)
print(set2)

set1.add(14)#add new iteam in set
print('after adding new iteam:-',set1)

set2.remove(40)#remove operation

print('after removing data:-',set2)

set1|set2#union operation
print('union:-',set1.union(set2))

set1&set2#intersection operation
print('intersection:-',set1.intersection(set2))

set1-set2#difference operation
print('different:-',set1.difference(set2))

set1^set2#symmetric difference operation
print('symmetric difference :-',set1.symmetric_difference(set2))
