#include<stdio.h>
int insert(int a[100],int n,int pos,int var);

int main()
{
	int a[100],n,pos,var,i;
	
	printf("enter the value ofn=");
	scanf("%d",&n);
	
	for(i=0;i<n;i++)
	{
		
		printf("a[%d]=",i,a[i]);
		scanf("%d",&a[i]);
		
		printf("\n");
		
	}
	
	printf("enter the the position which you want to change=");
	scanf("%d",&pos);
	
	printf("enter variable=");
	scanf("%d",&var);
	
	insert(a,n,pos,var);
	
	return 0;
	
}

int insert(int a[100],int n,int pos,int var)
{
	
	int i;
	
	for(i=n-1;i>=pos;i--)
	{
		a[i+1]=a[i];
		
		
	}
	n++;
	a[pos]=a[i];
	
	for(i=0;i<n;i++)
	{
		
		printf("a[%d]\n",a[i]);
		
		
	}
	
	
	
}

