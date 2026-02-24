#include<stdio.h>
#include<ctype.h>

int main() {
	
	int i;
    char text[500],temp;

   
    printf("Enter a message to encrypt:");
	gets(text);


    // Visiting character by character.

    for(i = 0; text[i] != '\0'; ++i) {

        temp = text[i];
        // Check for valid characters.
        if (isalnum(temp)) {

            //Lowercase characters.
            if (islower(temp)) {
                temp = (temp - 'a' + 3) % 26 + 'a';
            }
            // Uppercase characters.
            if (isupper(temp)) {
                temp = (temp - 'A' + 3) % 26 + 'A';
            }

            // Numbers.
            if (isdigit(temp)) {
            	temp = (temp - '0' + 3) % 10 + '0';
            }
        }
        // Invalid character.
        else {
            printf("Invalid Message");
        }

        // Adding encoded answer.
        text[i] = temp;

    }

    printf("Encrypted message: %s", text);

    return 0;
}
