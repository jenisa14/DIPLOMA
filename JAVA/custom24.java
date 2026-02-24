class NotSufficientFundException extends Exception
 {
    public NotSufficientFundException(String message)
    {
        super(message);
    }
}
 class Bank 
{
    double bal;

    public Bank(double bal)
    {
      this.bal = bal;
    }
     
    public void deposit(double amt)
        {
            bal += amt;
        }

    public void withdraw(double amt) throws NotSufficientFundException
         {
            if (amt > bal)
            {
                throw new NotSufficientFundException("Not sufficient fund!!");
            }
            bal -= amt;
        }

        public double getBalance()
        {
            return bal;
        }
     

    public static void main(String[] args)
     {
        Bank b1 = new Bank(0);
        b1.deposit(25000);
    
        try {
            b1.withdraw(20000);
            System.out.println("Balance: " + b1.getBalance());

            b1.withdraw(4000);
            System.out.println("Balance: " + b1.getBalance());

            b1.withdraw(2000);
            System.out.println("Balance: " + b1.getBalance());

        }
        catch (NotSufficientFundException e)
         {
            System.out.println(e.getMessage());
         }
    }        
 }