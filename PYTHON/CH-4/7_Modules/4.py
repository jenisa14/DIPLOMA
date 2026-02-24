import matplotlib.pyplot as plt
import numpy as np

def relu(x):
    return np.maximum(0, x)

x_start = float(input("Enter the start of the range of x: "))
x_end = float(input("Enter the end of the range of x: "))
x_points = int(input("Enter the number of points in the range of x: "))

x = np.linspace(x_start, x_end, x_points)
y = relu(x)

plt.plot(x, y)
plt.xlabel('x')
plt.ylabel('y')
plt.title('ReLU function')
plt.grid()
plt.show()
