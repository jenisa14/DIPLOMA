import math

def mean(numbers):
    return sum(numbers) / len(numbers)

def deviation(numbers):
    m = mean(numbers)
    return math.sqrt(sum((x - m) ** 2 for x in numbers) / (len(numbers) - 1))

n = int(input("Enter the number of elements in the list: "))
numbers = [float(input("Enter a number: ")) for _ in range(n)]
print("Mean: ", mean(numbers))
print("Standard deviation: ", deviation(numbers))
