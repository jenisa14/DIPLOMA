#include<stdio.h>
int main()
{
	int a[2][2],i,j;
	
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			
			printf("enter a[%d][%d]=",i,j,a[i],a[j]);
			scanf("%d",&a[i][j]);
		}
		
	}
	printf("two by two array");
	for(i=0;i<2;i++)
	
	{
		printf("\n");
		for(j=0;j<2;j++)
		{
			printf("%d\t",a[i][j]);
			
		}
		
	}
	
}
