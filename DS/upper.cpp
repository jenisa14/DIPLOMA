#include<stdio.h>
#include<conio.h>
int s_upr(char a[]);
int main()
{
	char a[100];
	
	printf("enter string=");
	scanf("%s",&a);
	
	s_upr(a);
	
	return 0;
}
int s_upr(char a[])
{
	char b[100];
	int i;
	
	for(i=0;a[i]!='\0';i++)
	{
		if(a[i]>='a' && a[i]<='z')
		{
			b[i]=a[i]-32;
			printf("%s",b[i]);
			
		}
		else
		{
			
			a[i]=b[i];
		}
    }
		
		
		

	
}
