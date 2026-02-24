class Con_over{

            int a,b,c;
            Con_over()
            {
                a=b=c=0;
                System.out.println("constructor without argument...");
                //System.out.println("sum is:"+a+b+c);

            }
            Con_over(int a,int b,int c)
            {
                
                this.a=a;
                this.b=b;
                this.c=c;
                int d=a+b+c;
                System.out.println("constructor with three arguments...");
                System.out.println("sum is:"+d);
            }
            Con_over(Con_over co)
            {
               // System.out.println("copy constuctor called....");
                a=co.a;
                b=co.b;
                c=co.c;
                System.out.println("copy constuctor called....");
                
            }
            
            public static void main(String[]args)
            {
                Con_over co=new Con_over();
                Con_over c1=new Con_over(3,6,5);
                
                
                Con_over c2=new Con_over(c1);//deep copy...
               
                
               
             
            }

} 
