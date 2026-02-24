class Counter
{  
    static int count=0;  
      
    Counter()
    {  
     count++;
     
    }  

    void display()
    {
        System.out.println(count); 


    }
      
    public static void main(String args[]){  
    //Creating objects  

    Counter c1=new Counter();  

    Counter c2=new Counter();  

    Counter c3=new Counter();

    Counter c4=new Counter();

    Counter c5=new Counter(); 
   
    System.out.println("total number of object is:");
    c5.display();
  

  
    }  
}  
