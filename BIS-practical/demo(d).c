#include<stdio.h>  
#include<conio.h>  
int main()  
{  
    int i;  
    char text[100], temp;  
    printf("enter an encrypted text \t");  
    gets(text);  
    
    for(i = 0; text[i] != '\0'; i++)  
    {  
        temp = text[i];  
        if(temp >= 'a' && temp <= 'z')  
        {  
            temp = temp - 3;  
            if(temp < 'a')  
            {  
                temp = temp + 'z' - 'a' + 1;  
            }  
            text[i] = temp;  
        }  
        else if(temp >= 'A' && temp < 'Z')  
        {  
            temp = temp + 3;  
            if(temp < 'A')  
            {  
                temp = temp + 'Z' - 'A' + 1;  
            }  
            text[i] = temp;  
        }  
    }  
    printf(" Dycrypted message: %s", text);  
    return 0;  
}  
