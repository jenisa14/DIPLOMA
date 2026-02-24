class Complexnumber{

    double real,imaginary;
    
    Complexnumber(double real, double imaginary) {
        this.real = real;
        this.imaginary = imaginary;
    }
    // Default constructor
    Complexnumber()
    {
        real=imaginary=0;
    }

    //addition of two complex numbers
    Complexnumber add(Complexnumber other) {
        double realSum = this.real + other.real;
        double imaginarySum = this.imaginary + other.imaginary;
        return new Complexnumber(realSum, imaginarySum);
    }

    // Method to display complex number
     void display() {
        System.out.println(this.real + " + " + this.imaginary + "i");
    }

    public static void main(String[] args) {
        // Example usage
        Complexnumber n1 = new Complexnumber(3, -2);
        Complexnumber n2 = new Complexnumber(9, 4);

        System.out.println("1st complex no is:");
        n1.display();

        System.out.println("2nd complex no is:");
        n2.display();

        Complexnumber sum = n1.add(n2);
        System.out.println("Sum of 1st complex no and 2nd complex no is:");
        sum.display();
    }
}