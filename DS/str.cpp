#include<stdio.h>
#include<conio.h>
void s_len(char a[],int l);
int main()
{
	char a[50],l=0,i;
	printf("enter string:-");
	scanf("%s",&a);
	
	s_len(a,l);
	
	
   return 0;
	
}
void s_len(char a[],int l)
{
	int i;
	for(i=0;a[i]!='\0';i++)
	{
		l=l+1;
		
		
	}
	
	printf("length of string is :-%d",l);
	
}
