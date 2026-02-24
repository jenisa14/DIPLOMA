#include<stdio.h>
int DELETE(int a[100],int n,int pos);

int main()
{
	int a[100],n,pos,i;
	
	printf("enter the value of n=");
	scanf("%d",&n);
	
	for(i=0;i<n;i++)
	{
		
		printf("a[%d]=",i,a[i]);
		
		printf("\n");
		scanf("%d",&a[i]);
		
		
		
	}
	
	printf("enter the the position which you want to delete in array=");
	scanf("%d",&pos);
	
	
	DELETE(a,n,pos);
	
	return 0;
	
}

int DELETE(int a[100],int n,int pos)
{
	
	int i;
	
	for(i=pos;i<=n-1;i++)
	{
		a[i]=a[i+1];
		
		
	}
	n--;
	
	for(i=0;i<n;i++)
	{
	
		printf("a[%d]\n",a[i]);
		
	}	
	
}
	
