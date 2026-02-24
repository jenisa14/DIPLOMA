import java.util.Scanner;

class Vowel{
    public static void main(String[] args) {
        //input from user
        Scanner scanner = new Scanner(System.in);
        //t for total 
        int tA = 0;
        int tE = 0;
        int tI = 0;
        int tO = 0;
        int tU = 0;

        while (true) {
            System.out.print("Enter a sentence or 'quit' to exit: ");
            //convert into lowercase if user enter sentance in uppercase 
            String s = scanner.nextLine().toLowerCase(); 

            if (s.equals("quit")) {
                break;
            }
            //c for count
            int cA = 0, cE = 0, cI = 0, cO = 0, cU = 0;

            // Count vowels in each the sentence
            for (int i = 0; i < s.length(); i++) {
                char ch = s.charAt(i);
                if (ch == 'a') {
                    cA++;
                } else if (ch == 'e') {
                    cE++;
                } else if (ch == 'i') {
                    cI++;
                } else if (ch == 'o') {
                    cO++;
                } else if (ch == 'u') {
                    cU++;
                }
            }// Update total counts
            tA += cA;
            tE += cE;
            tI += cI;
            tO += cO;
            tU += cU;

            // Display counts for the current sentence
            System.out.println("Counts for current sentence:");
            System.out.println("A: " + cA);
            System.out.println("E: " + cE);
            System.out.println("I: " + cI);
            System.out.println("O: " + cO);
            System.out.println("U: " + cU);
        }
        // Display total vowel counts from all the sentences
        System.out.println("Total counts for all sentences:");
        System.out.println("A: " + tA);
        System.out.println("E: " + tE);
        System.out.println("I: " + tI);
        System.out.println("O: " + tO);
        System.out.println("U: " + tU);
 }
}