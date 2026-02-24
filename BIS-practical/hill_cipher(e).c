#include<stdio.h>
#include<string.h>
int main() {
    int a[3][3] = { { 17, 17, 5 }, { 21, 18, 21 }, { 2, 2, 19 } };
   
    int i, j,t=0;
    int c[20], d[20];
    
    char text[20];
    printf("Enter plain text: ");
    scanf("%s", text);
    
    for (i = 0; i < 3; i++) {
        c[i] = text[i] - 65;
        printf("%d ", c[i]);
    }
    
    for (i = 0; i < 3; i++) {
        t = 0;
        for (j = 0; j < 3; j++) {
            t = t + (a[i][j] * c[j]);
        }
        d[i] = t % 26;
    }
    
    printf("\nEncrypted Cipher Text :");
    for (i = 0; i < 3; i++)
        {
		    printf(" %c", d[i] + 65);
		}
        
   
    return 0;
}
