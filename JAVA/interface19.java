interface first 
 {

 void display();
 
}
interface second
{
    void print();
}

 class Main implements first,second
{

 public void display()
    {

        System.out.println("hello");
    }
  public void print()
    {
        System.out.println("world!!");

    }
      public static void main(String []args) 
    {
        Main  m1 = new Main();
        m1.display();
        m1.print();
     }
    
}

   
   
  


