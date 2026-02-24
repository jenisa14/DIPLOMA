class Static{
    static int count = 5;
    int temp;

    Static(int temp)
    {
        this.temp = temp;
    }

    public void display() {
        //check 'this' keyword can access static variable or not!!
        System.out.println("Static variable: " + count);
        System.out.println("temporary variable: " + this.temp);
    }

    public static void main(String[] args) {
        Static s1 = new Static(3);
        s1.display();
        
    }
}