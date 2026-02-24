#read n number
ls=[]

N=int(input("enter list size="))
print('enter ' + str(N) + ' number:-')

sum=int(0)


for i in range(N):
        print("enter ls[",i,"]:")
        num=int(input())
     
        sum = sum + num

        match N:

            case _ if num>0 :
                print('num is positive ')
                if num%2==0:
                        print('num is even')
                else:
                        print('num is odd')


            case _ if num<0 :
                print('num is nagative')
                if num%2==0:
                        print('num is even')
                else:
                        print('num is odd')

                
            case _ if num==0 :
                print('num is zero')
                if num%2==0:
                        print('num is even')
                else:
                        print('num is odd')

                

           
avg=sum/N
print(' average of ' + str(N) + '  number is :-',avg)








