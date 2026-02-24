marks=int(input("enter marks="))


match marks :

    case _ if marks>=90 and marks<99:
        print("A")
            
            
    case _ if marks>80 and marks<89 :
        print("B")
            
            
    case _ if marks>70 and marks<79 :
        print("C")
            

    case _ if marks>60 and marks<69 :
        print("D")
            

    case _ if marks>=50 and marks<=59:
        print("E")


    case _ if marks<50 :
         print("F")

            
             

        
