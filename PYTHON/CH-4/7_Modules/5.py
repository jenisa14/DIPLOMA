import random
import matplotlib.pyplot as plt

results = [random.randint(0, 10) for _ in range(100)]

plt.hist(results, bins=11, range=(0, 10))
plt.xlabel('Marks')
plt.ylabel('Number of Students')
plt.title('Test Results')
plt.show()
