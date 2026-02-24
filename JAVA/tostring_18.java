class Car{

     double topspeed;
     String name;

    Car(double t,String n)
    {
        topspeed=t;
        name=n;
    }
    public String toString()
    {
        return topspeed + "" + name;
    }

   // public class Instance
 //{
    public static void main(String[]args)
    {
        Car c1=new Car(22.6,"-Thar");
        Car c2=new Car(24.07,"-Nexon");
        Car c3=new Car(19.9,"-Innova Crysta");
        Car c4=new Car(32.5,"-Fortuner");
        Car c5=new Car(20.6,"-Verna");
        
        System.out.println(c1);
        System.out.println(c2);
        System.out.println(c3);
        System.out.println(c4);
        System.out.println(c5);
    }

    
}

 