import java.util.Scanner;

class Area{
    public static void main(String[] args)
    {  
        int r;
        double PI = 3.142, area;
        System.out.println("Enter the radius: ");
        Scanner sc = new Scanner(System.in);
        r = sc.nextInt();
       
        area = PI * r * r;
     
        System.out.println("Area of circle is :" + area);
    }
}