// handle divide by zero exception
//import java.util.Scanner;
 class Main
{

} 

class base{
    public static void main(String[] args)
 {
      //Scanner s1=new Scanner(System.in);
      
      //int a= s1.nextInt();  
      //System.out.println("Enter value of a- ");

      //int b= s1.nextInt();  
      //System.out.println("Enter values of b - ");
       int a=7;
       int b=0;
         
        
      try {
            float ans = a / b;
            System.out.println("Result: " + ans);
      } 
      catch (ArithmeticException e)
      {
         System.out.println("Error: " + e);
         System.out.println("Cannot divide a value by zero.");
      }
   }
}