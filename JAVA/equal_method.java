class Employee{

    String n;
    int a;

    Employee(String n,int a)
    {
        this.n=n;
        this.a=a;
    }    
  
}
class Details{

    public static void main(String []args)
    {
        Employee e1=new Employee("jenisa",17);
        Employee e2=new Employee("dhaval",23);

        boolean bool=e1.equals(e2);
        System.out.print(bool);
    }
 }
