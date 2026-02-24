class College {

    void display1()
    {
        System.out.println("this is a main class...");
    }
}
class Department extends College {

    void display2()
    {
        System.out.println("this is  derived from class college...");
    }
}

class Classroom extends Department{

    void display3()
    {
        System.out.println("this is derived from class department...");
    }
}

class Final{

    public static void main(String args[])
    {
        Classroom c1=new Classroom();
        c1.display1();
        c1.display2();
        c1.display3();
    }
}
