def calculate_loan(loan_amount, years, interest_rate):
# Calculation of Monthly EMI
 
    interest_rate = interest_rate / (12 * 100)

    months = years * 12
    emi = loan_amount * interest_rate * (1 + interest_rate)**months / ((1 + interest_rate)**months - 1)
    
    total_payment = emi * months

    print("Monthly EMI: ", round(emi, 2))
    print("Total Payment: ", round(total_payment, 2))
    print("Amortization Schedule: ")
    print("Payment# Interest Principal Balance")

    balance = loan_amount

    for i in range(1, months + 1): 
        
       interest = balance * interest_rate
       principal = emi - interest
       balance -= principal

       print(i, " ", round(interest, 2), "  ", round(principal, 2), " ", round(balance, 2))
       

loan_amount = float(input("Enter the loan amount: "))
years = int(input("Enter the number of years: "))
interest_rate = float(input("Enter the interest rate: "))

calculate_loan(loan_amount, years, interest_rate)