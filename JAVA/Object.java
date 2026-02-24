class Object{

    static int count = 0;

    Object()
    {
        count++;
    }

     static int getObjectNo()
    {
        return count;
    }
    public static void main(String[] args) {
        Object o1 = new Object();
        Object o2 = new Object();
        Object o3 = new Object();
        Object o4 = new Object();
        Object o5 =new Object();

         System.out.println("total no of object:"+count);
    }
}