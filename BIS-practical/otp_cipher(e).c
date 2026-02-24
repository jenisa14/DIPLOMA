#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void encrypt(char *text, const char *key) {
    int textLen = strlen(text);

    for (int i = 0; i <textLen; i++) {
        text[i] = text[i] ^ key[i];
    }
}

int main() {
    char text[100];
    char key[100];

    printf("Enter plain text: ");
    gets(text);
    
    printf("Enter the key: ");
    gets(key);

    // Ensure that the key and message have the same length
    int keyLen = strlen(key);
    int textLen = strlen(text);
    
    if (keyLen != textLen) {
        printf(" Key and message must have the same length!!\n");
        return 1;
    }
	
	  // Remove newline characters from input
    text[strcspn(text, "\n")] = '\0';
    key[strcspn(key, "\n")] = '\0';
	encrypt(text, key);
    // Display the result
    printf("encrypted text: %s\n", text);

    return 0;
}
