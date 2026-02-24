#include<stdio.h>
void fact(int n);
int main()
{
	int n;
	
	printf("enter the n :-");
	scanf("%d",&n);
	
	fact(n);
	
	return 0;
		
}
void fact(int n)
{
	int i,f=1;
	
	
	 for(i=1;i<=n;i++)
	{
		 f=f*i; 	
		 
		
	}
	printf(" factorial of given no is=%d",f);
}
