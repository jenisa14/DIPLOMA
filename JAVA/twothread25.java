
class Threadtwo extends Thread
{
    Threadtwo(String s)
    {
        super(s);
        start();
    }
    public void run()
    {
        for(int i=0;i<5;i++)
        {
            System.out.println(Thread.currentThread().getName());
            
            try
            {
                if(Thread.currentThread().getName()=="Thread1")
                {
                    Thread.sleep(1000);
                }
                else
                {
                    Thread.sleep(2000);
                }
            }
            catch(Exception e){}
        }
    }
}
class TwoThread
{
    public static void main(String arg[])
    {
        System.out.println("Thread name : "+Thread.currentThread().getName());
        Threadtwo t1=new Threadtwo("Thread1");
        Threadtwo t2=new Threadtwo("Thread2");
    }
}