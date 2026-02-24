import java.io.*;
class C{

    int hour,min;
    public C(int h,int m)
    {
        hour = h;
        min = m;
       
    }
    public C()
    {
        hour = min = 0;
       
    }
    public C add(C t2)
    {
        C t3 = new C();
        
        t3.min = min + t2.min;
        t3.hour = hour + t2.hour;

        if(t3.min >= 60)
        {
            t3.hour = t3.min / 60;
            t3.min = t3.min % 60;
        }
        return(t3);
       
    }
    public void display()
    {
        System.out.println(hour+ ":"+min);
    }

}
class Display
{
    public static void main(String args[])
    {
       
        C t1 = new C(1,56);
        C t2 = new C(2,00);
        C t3 = new C();

        t3 = t1.add(t2);
        t1.display();
        t2.display();   
        t3.display();
    }

}