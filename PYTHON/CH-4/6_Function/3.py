def fibonacci(n):
    if n <= 0:
        return []
    elif n == 1:
        return [1]
    elif n == 2:
        return [1, 1]
    else:
        fib_list = fibonacci(n-1)
        fib_list.append(fib_list[-1] + fib_list[-2])
        return fib_list

n = int(input("Enter the number of terms for fibonacci sequence: "))
print(fibonacci(n))
