#include<stdio.h>
int MIN(int a[100],int n,int min);
int main()
{
	int a[100],n,i,min=0;
	
	printf("enter the value of n=");
	scanf("%d",&n);
	
	for(i=0;i<n;i++)
	{
		
		printf("a[%d]=",i,a[i]);
		scanf("%d",&a[i]);
		
	}
	min=a[0];
	MIN(a,n,min);
//	max=a[0];
	return 0;
}

int MIN(int a[100],int n,int min)
{
	
	int i;
	for(i=0;i<n;i++)
	{
		if(a[i]<min)
		{
			
			min=a[i];
		}
		
	}
	
	printf("%d is min",min);
	
}
