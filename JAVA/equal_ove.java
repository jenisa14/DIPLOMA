class Student1{

    String name;
    int age;

    Student1(String name,int age)
    {
        this.name=name;
        this.age=age;
    }   
  
    public boolean equals(Student st)
    {
        if(st == this)
        {
            return true;
        }

        if(!(st instancneof Student))
        {
            return false;
        }
      
       
        Student s = (Student)st;  
        return name.equals(s.name) &&Integer.compare(age,s.age) == 0;  
    }
    

 public static void main(String []args)
    {
        Student1 s1=new Student1("jenisa",17);
        Student1 s2=new Student1("dhaval",23);

        boolean bool=s1.equals(s2);
        System.out.print(bool);

        System.out.println(s1);
        System.out.println(s2);
    }
}
