 class Employee{

    String name;
    int age;
  
    Employee(String name,int age)
   {
       this.name=name;
       this.age=age;
      
   }

   public String toString()
   {
       return name + "" + age;
   }
   public boolean equals(Employee et)
    {
        if(et == this)
        {
            return true;
        }

        if(!(et instancneof Employee))
        {
            return false;
        }

        Employee e= (Employee)et;  
        return name.equals(e.name) && Integer.compare(age,e.age) == 0;
    }
}
   public static void main(String []args)
   {
       Employee e1=new Employee("jenisa",17);
       Employee e2=new Employee("dhaval",23);

       System.out.println(e1);
       System.out.println(e2);

      
   }

