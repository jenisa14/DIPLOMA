#include<stdio.h>
int MAX(int a[100],int n,int max);
int main()
{
	int a[100],n,i,max=0;
	
	printf("enter the value of n=");
	scanf("%d",&n);
	
	for(i=0;i<n;i++)
	{
		
		printf("a[%d]=",i,a[i]);
		scanf("%d",&a[i]);
		
	}
	max=a[0];
	MAX(a,n,max);
//	max=a[0];
	return 0;
}

int MAX(int a[100],int n,int max)
{
	
	int i;
	for(i=0;i<n;i++)
	{
		if(a[i]>max)
		{
			
			max=a[i];
		}
		
	}
	
	printf("%d is max",max);
	
}
