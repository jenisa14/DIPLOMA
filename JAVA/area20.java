abstract class Shape
{

    public abstract void area(double base,double height);
    
}
class Triangle extends Shape
{
   public void area(double base,double height)
    {
        
        double at = (base*height)/2;
        System.out.println("area of triangle :"+at);
    }
}
class Circle extends Shape
{
   public void area(double base,double height)
    {
        
        double ac = 3.14*base*base;
        System.out.println("area of circle :"+ac);
    }
}
class Rectangle extends Shape
{
   public void area(double base,double height)
    {
        
        double ar = base*height;
        System.out.println("area of rectangle :"+ar);
    }
}
public class area20{
    public static void main(String[] args)
    {
        Triangle s1=new Triangle();
        s1.area(6.0,1.0);
    
        Rectangle s2=new Rectangle();
        s2.area(5.0,2.0);

        Circle s3=new Circle();
        s3.area(10.0,0);
    }

}


