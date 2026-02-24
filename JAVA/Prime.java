import java.util.*;

public class Prime{

    public static void main(String args[]){

        Scanner sc=new Scanner(System.in);
        System.out.println("enter number:");
        
        int n=sc.nextInt();

        if(n<=1)
        {

            System.out.println("not prime!!");
        }
        else{

            for(int i=2;i<=Math.sqrt(n);i++){

                if(n%i!=1 )
                // temp == 0 && num != 1
                {
                    System.out.println("prime");
                }
                else{
                    System.out.println("not prime!!");
                }
            }
        }
    }
}