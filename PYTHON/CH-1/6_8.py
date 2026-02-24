#determine lenght of ladder

import math


height=int(input("enter height:"))
ang=int(input("enter degree:"))

rad=(math.pi/180)*ang
#rad=math.degree(ang)
len=height/(math.sin(rad))

print("the length of the ladder must be",len)