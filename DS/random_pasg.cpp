#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<time.h>
#include<unistd.h>

int main()
{
	int length;
	
	printf("length:");
	scanf("%d",&length);
	
	if(length <= 0)
	{
		printf("password length must be >= 1!");
		return 1;
	}
	char *password=malloc(length + 1);
    //char password[length + 1];
    char *digit="0123456789";
    int digits_length = strlen(digits);
    
    char *lower = "abcdefghijklmnopqrstuvwxyz";
    int lowers_lenght = strlen(lower);
    
    char *upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    int upper_length = strlen(upper);
    
    char *symbols = "!@#$%^&*()";
    int symbols_length = strlen(symbols); 
	
	srand(time(NULL) * getpid());
	
	for (int i = 0;i<length;i++)
	{
		int char_type=rand() % 4;
		
		if(char_type == 0) 
		
		 password[i] = digits[rand() % digits_length];
		 
	    else if(char_type == 1)
	     password[i] = lower[rand() % lowers_length];
	     
	    else if(char_type == 2)
	     password[i] = upper[rand() % uppers_length];
	 
	    else
	    
	     password[i] = symbol[rand() % symbols_length]; 
	     
	     password[length] = '\0';
	     printf("password: %s\n",password);
		  
	    
		   
		
	}  
	free(password);
	
	
	
	return 0;
	
}
