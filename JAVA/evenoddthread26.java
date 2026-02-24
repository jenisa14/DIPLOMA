
class evenoddthread {
 
    // Starting counter
    int counter = 1;  
    static int N;
 
    // Function to print odd numbers
    public void printOddNumber()
    {
        synchronized (this)
        {
            // Print number till the N
            while (counter < N) {
 
                // If count is even then print
                while (counter % 2 == 0)
                {
 
                    // Exception handle
                    try
                    {
                        wait();
                    }
                    catch (InterruptedException e)
                    {
                        e.printStackTrace();
                    }
                }
 
                // Print even number
             
                System.out.print(counter +":even"+ " \n");
 
                // Increment counter
                counter++;
 
                // Notify to second thread
                notify();
            }
        }
    }
 
    // Function to print even numbers
    public void printEvenNumber()
    {
        synchronized (this)
        {
            // Print number untill the N
            while (counter < N)
            {
 
                // If count is odd then print
                while (counter % 2 == 1)
                {
 
                    // Exception handle
                    try
                    {
                        wait();
                    }
                    catch (InterruptedException e)
                    {
                        e.printStackTrace();
                    }
                }
 
                // Print odd number
               
                System.out.print(counter + ":odd"+"\n");
 
                // Increment counter
                counter++;
 
                // Notify to 2nd thread
                notify();
            }
        }
    }

    // Driver Code
    public static void main(String[] args)
    {
        // Given Number N
        N = 200;
 
        // Create an object of class
        evenoddthread e1 = new evenoddthread();
 
        // Create thread t1
      
        Thread t1 = new Thread(new Runnable()
        {
            
            public void run()
            {
                e1.printEvenNumber();
            }
        });
 
        // Create thread t2
  
        Thread t2 = new Thread(new Runnable()
        {
            
            public void run()
            {
                e1.printOddNumber();
            }
        });
 
        // Start both threads
        t1.start();
        t2.start();
    }
}
