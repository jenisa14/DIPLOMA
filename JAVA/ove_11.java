class Area
{

   
   void Area(float length,float width)
    {  
        
        float ar=length*width;
         System.out.println("area of rectangle is:"+ar);

    }

    void Area(float radius)
    {
        
        double cr=3.14*radius*radius;
        System.out.println("area of circle is:"+cr);
    }
    


public static void main(String []args)
{
  
  area20 a1=new area20();
 a1.Area(4,5);
 a1.Area(5);
  

}
}
