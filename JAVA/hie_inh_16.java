class College {

    void display1()
    {
        System.out.println("this is a main class...");
    }
}
class Department extends College {

    void display2()
    {
        System.out.println("this is  1st child class derived from class college...");
    }
}

class Classroom extends College {

    void display3()
    {
        System.out.println("this is 2nd child class derived from class college...");
    }
}

class Final{

    public static void main(String args[])
    {
        Department d1=new Department();
        d1.display1();
        d1.display2();

        Classroom c1 = new Classroom();

     
        c1.display3();
    }
}
