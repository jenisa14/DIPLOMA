import random

def game():
    options = {0: "Scissor", 1: "Rock", 2: "Paper"}

    computer = random.randint(0, 2)
    user = int(input("Enter 0 for Scissor, 1 for Rock, 2 for Paper: "))

    if user not in options:
        print("Invalid input. Please enter 0, 1, or 2.")
        return
    print("You chose: ", options[user])
    print("Computer chose: ", options[computer])

    result = (computer - user + 3) % 3
    if result == 0:
        print("Draw!")
    elif result == 1:
        print("You lose!")
    else:
        print("You win!")

game()
