import java.util.Scanner;
class Diamond {
    public static void main(String[] args)
    {
        int i, j,num;
        System.out.println("Enter the number of rows: ");
        Scanner sc = new Scanner(System.in);
        num = sc.nextInt();
    for (i = 1; i <= num; i++) {
 
         for (j = 1; j <= num - i; j++) {
                //System.out.print(" ");
            }
 
            for (j = 1; j <= i ; j++) {
                System.out.print("*");
            }

            System.out.println();
        }
 
        // Prints the second half diamond
        for (i = num - 1; i > 0; i--) {
 
            for (j = 1; j <= num - i; j++)
            {
               // System.out.print(" ");
            }
 
            for (j = 1; j <= i ; j++) {
                System.out.print("*");
            }
 
            System.out.println();
        }
    }
}