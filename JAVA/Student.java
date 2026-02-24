class Student {
    private int id_no;
    private int no_of_subjects_registered;
    private int[] subject_code;
    private int[] subject_credits;
    private char[] grade_obtained;
    private double spi;

    Student(int id_no, int no_of_subjects_registered, int[] subject_code, int[] subject_credits, char[] grade_obtained) {
        this.id_no = id_no;
        this.no_of_subjects_registered = no_of_subjects_registered;
        this.subject_code = subject_code;
        this.subject_credits = subject_credits;
        this.grade_obtained = grade_obtained;
        calculateSPI();
    }

    void calculateSPI() {
        double totalCredits = 0;
        double totalGradePoints = 0;

        for (int i = 0; i < no_of_subjects_registered; i++) {
            totalCredits += subject_credits[i];
            totalGradePoints += gradeToPoint(grade_obtained[i]) * subject_credits[i];
        }

        spi = totalGradePoints / totalCredits;
    }
    double gradeToPoint(char grade) {
        switch (grade) {
            case 'A':
                return 10.0;
            case 'B':
                return 8.0;
            case 'C':
                return 6.0;
            case 'D':
                return 4.0;
            case 'E':
                return 2.0;
            default:
                return 0.0;
        }
    }

 double getSpi() {
        return spi;
    }

    public static void main(String[] args) {
        if (args.length % 6 != 0) {
            System.out.println("Invalid input format. Please provide data for each student: id_no, no_of_subjects_registered, subject_code[], subject_credits[], grade_obtained[]");
            return;
        }

        int n = args.length / 6;
        Student[] students = new Student[n];

        for (int i = 0; i < n; i++) {
            int id_no = Integer.parseInt(args[i * 6]);
            int no_of_subjects_registered = Integer.parseInt(args[i * 6 + 1]);
            int[] subject_code = new int[no_of_subjects_registered];
            int[] subject_credits = new int[no_of_subjects_registered];
            char[] grade_obtained = new char[no_of_subjects_registered];

            for (int j = 0; j < no_of_subjects_registered; j++) {
                subject_code[j] = Integer.parseInt(args[i * 6 + 2 + j]);
                subject_credits[j] = Integer.parseInt(args[i * 6 + 2 + no_of_subjects_registered + j]);
                grade_obtained[j] = args[i * 6 + 2 + 2 * no_of_subjects_registered + j].charAt(0);
            }

            students[i] = new Student(id_no, no_of_subjects_registered, subject_code, subject_credits, grade_obtained);
        }

        for (int i = 0; i < n; i++) {
            System.out.println("Student " + (i + 1) + " SPI: " + students[i].getSpi());
        }
    }
}