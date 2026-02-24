class Finall 
{
    final double PI=3.14;
    void display()
    { // final double PI=3.14;
        PI=90;
        System.out.println("vallue of pi:"+PI);
    }
    public static void main(String[] args)
    {
      Finall f1=new Finall();
      f1.display();

    }
}