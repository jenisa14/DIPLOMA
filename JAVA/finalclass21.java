final class Main
{
 public abstract void display();
}
class Base1 extends Main
{

   public void display()
    {
        System.out.println("this is final class method...");
    }
    public static void main(String args[])
    {
        Base1 b1=new Base1();
        b1.display();
    }
}

