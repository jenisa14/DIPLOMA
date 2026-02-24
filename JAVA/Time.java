class Time {
    int h, m;

    // Constructor to initialize hour and minute
    public Time(int h, int m) {
        this.h = h;
        this.m = m;
    }

    // Method to add two Time objects
    public Time add(Time t1) {
        int t_m = this.m + t1.m;
        int c = t_m / 60;
        int n_m = t_m % 60;
        int n_h = this.h + t1.h + c;
        n_h %= 24; // Ensure hour stays within 24-hour format

        return new Time(n_h, n_m);
    }

    // Method to display time
    public void display() {
        //display time in valid format
        System.out.printf("%02d:%02d\n", this.h, this.m);
    }

    public static void main(String[] args) {
        // Example usage
        Time t2 = new Time(2, 02);
        Time t3 = new Time(3, 05);

        System.out.println("Time 1:");
        t3.display();

        System.out.println("Time 2:");
        t3.display();

        Time sum = t3.add(t3);
        System.out.println("Sum of Time 1 and Time 2:");
        sum.display();
    }
}