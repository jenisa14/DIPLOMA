class Semple
{
     int w,h;
 
     Semple(int w, int h)
    {
        this.w = w;
        this.h = h;
    }
 
   void display()
    {
          System.out.println("width=" + w + " height= " + h);
    }
}
 
class Demo{
 
       public static void main(String[] args)
       {
        Semple s1 = new Semple(5,10);
            s1.display();
       }
}
