#include<stdio.h>
#include<conio.h>
void merge_sort(int a[],int b[],int c[]);
void main()
{
	int i,j,k,a[100],b[100],c[100],m,n;
	
	printf("enter the value of n:-");
	scanf("%d",&n);
	
	printf("enter %d elements:-",n);
	
	
	for(i=0;i<n;i++)
	{
		
		scanf("%d",&a[i]);
		
	}
	
	printf("enter the value of m:");
	scanf("%d",&m);
	
	printf("enter %d elements:",m);
	
	for(j=0;j<n;j++)
	{
		
		scanf("%d",&b[j]);
		
	}
	

	merge_sort(a,b,c);
	merge_sort(a,b+1);
	merge_sort(a,b,c);
	printf("\n");
	
	printf("after merging:- \n");
	{
		for(k=0;k<n+m;k++)
		{
			
			printf("%d\t",c[k]);
			
		}
	}
	
}
void merge_sort(int a[],int b[],int c[])
{
	int i=0,j=0,k=0,n,m;
	
	while(i<n && j<m)
	{
		if(a[i]<=b[j])
		{
			c[k]=a[i];
			i++;
			k++;
		}
		else
		{
			c[k]=b[j];
			j++;
			k++;
		}
	}
	
	while(i<n)
	
		c[k]=a[i];
		
		i++;
		k++;
	
	while(j<m)
	{
		c[k]=b[j];
	
		j++;
		k++;
	}
	
	
}

