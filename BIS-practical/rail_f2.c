#include <stdio.h>
#include <string.h>

#define MAX_LEN 100
int i,j;
char* encryptRailFence(char *text, int key) {
    char rail[key][strlen(text)];
    
    for (i = 0; i < key; i++)
    {
	
        for (j = 0; j < strlen(text); j++)
        {
		
            rail[i][j] = '\0';
    	}
	}
    int dir_down = 0, row = 0, col = 0;
    
    for (i = 0; i < strlen(text); i++) {
        if (row == 0 || row == key - 1)
            dir_down = !dir_down;
        
        rail[row][col++] = text[i];
        
        dir_down ? row++ : row--;
    }

    char *result = malloc(strlen(text) + 1);
    strcpy(result, "");
    
    for (i = 0; i < key; i++)
    {
	
        for(j = 0; j < strlen(text); j++)
        {
		
            if (rail[i][j] != '\0')
                strncat(result, &rail[i][j], 1);
    	}
	}
    return result;
}

int main() {
    char text[MAX_LEN];
    int key;
    
    printf("Enter text: ");
    fgets(text, MAX_LEN, stdin);
    text[strcspn(text, "\n")] = '\0'; // remove newline character
    
    printf("Enter key: ");
    scanf("%d", &key);

    char *encryptedText = encryptRailFence(text, key);
    printf("Encrypted text: %s\n", encryptedText);

    free(encryptedText);

    return 0;
}
