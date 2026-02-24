#include<stdio.h>
#include<conio.h>
int s_con(char a[],char b[]);
int main()
{
	char a[100],b[100];
	
	printf("enter the 1st string=");
	scanf("%s",&a);
	
	printf("enter the 2nd string=");
	scanf("%s",&b);
	
	s_con(a,b);
	return 0;
}
int s_con(char a[],char b[])
{
	
    int	 i,j,k;
    char c[100];
    
	for(i=0;a[i]!='\0';i++)
	{
		printf("%c",a[i]);
		
	}
	
	for(j=0;b[j]!='\0';j++)
	{
		printf("%c",b[j]);
	}
	
	for(k=0;k=i+j;k++)
	{
			
	
		scanf("%s",c[k]);
	
	}
	
}
