class Aclass{

    
   void displaya()
    {
        System.out.println( "this is  A class...");
        
    }

}
class Bclass extends Aclass{

void displayb()
{
    System.out.println("this is B class...");
}


}

class Cclass{

public static void main(String []args)
{
    Bclass b1=new Bclass();
    b1.displaya();
    b1.displayb();
}

}



    


    

