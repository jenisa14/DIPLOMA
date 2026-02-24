public class Bankaccount{
    int accNo;
    String userName,email,accType;
    double accBal;

    // set account details using set metod
    void setAccountDetails(int accNo, String userName, String email, String accType, double accBal) {
        this.accNo = accNo;
        this.userName = userName;
        this.email = email;
        this.accType = accType;
        this.accBal = accBal;
    }

    // display account details
    public void displayAccountDetails() {
        System.out.println("Account Number: " + accNo);
        System.out.println("User Name: " + userName);
        System.out.println("Email: " + email);
        System.out.println("Account Type: " + accType);
        System.out.println("Account Balance: " + accBal);
    }
    public static void main(String[] args) {

        Bankaccount a = new Bankaccount();
        a.setAccountDetails(39240128, "abc", "abc@gmail.com", "Savings", 100000.0);
        a.displayAccountDetails();
    }
}