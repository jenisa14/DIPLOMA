def calculate_loan_values(principal, rate, years):
    # monthly interest rate
    rate = rate / 100 / 12
    # number of payments
    payments = years * 12
    # monthly EMI
    emi = principal * ((rate * (1 + rate)**payments) / (((1 + rate)**payments) - 1))
    # total payment
    total_payment = emi * payments
    return emi, total_payment

def amortization_schedule(principal, rate, years):
    emi, total_payment = calculate_loan_values(principal, rate, years)
    print("Amortization Schedule:")
    print("Payment #\tPrincipal\tInterest\tTotal Interest\tBalance")
    balance = principal
    for i in range(1, years*12+1):
        interest = balance * (rate / 12)
        principal_payment = emi - interest
        balance -= principal_payment
        total_interest = (emi * i) - (principal)
        print("{}\t\t{}\t\t{}\t\t{}\t\t{}".format(i, round(principal_payment,2), round(interest,2),round(total_interest,2), round(balance,2)))

principal = float(input("Enter the loan amount: "))
rate = float(input("Enter the annual interest rate in percentage: "))
years = int(input("Enter the number of years for the loan: "))
emi, total_payment = calculate_loan_values(principal, rate, years)

print("Loan amount: ", principal)
print("Annual interest rate: ", rate)
print("Number of years: ", years)
print("Monthly EMI: ", round(emi, 2))
print("Total Payment: ", round(total_payment, 2))
amortization_schedule(principal, rate, years)
