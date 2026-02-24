#include<stdio.h>


void gcd(int a,int b);
int main()
{
	int a,b;
	
	printf("enter 1st no:-");
	scanf("%d",&a);
	printf("enter 2nd no:-");
	scanf("%d",&b);
	
	gcd(a,b);
	
    return 0;	
}

void gcd(int a,int b)
{
	
	while(a!=b)
	{
		if(a>b)
			
			return(gcd(a-b,b));
		else
			 
			 return(gcd(a,b-a));
		
	}
	

    printf(" GCD of given no is = %d",a);
	
	
}
