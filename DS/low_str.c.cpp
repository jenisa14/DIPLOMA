#include<stdio.h>

int s_low(char a[]);
int main()
{
	char a[100];
	
	printf("enter string=");
	scanf("%s",&a);
	
	s_low(a);
	
	return 0;
}
int s_low(char a[])
{
	char b[100];
	int i;
	
	for(i=0;a[i]!='\0';i++)
	{
		if(a[i]>='A' && a[i]<='Z')
		{
			b[i]=a[i]+32;
			printf("%c",b[i]);
			
		}
		else
		{
			
			a[i]=b[i];
		}
    }
		
		
		

	
}
