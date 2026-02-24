class College 
{
    void display()
    {
        System.out.println("this is a main class...");
    }
}
class Department extends College
{

    void display()//function overriding
    {
        System.out.println("method overriding...");
    }
}

class Final

{    public static void main(String args[])
    {
       Department d1=new Department();
       d1.display();

        
    }
}
