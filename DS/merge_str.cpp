#include<stdio.h>
int merge(int a[],int b[],int i,int j);
int main()
{
	int a[100],b[100],i,j,k;
	
	printf("enter i=");
	scanf("%d",&i);
	
	for(k=0;k<i;k++)
	{
		printf("enter a[%d]=",k,a[k]);
		scanf("%d",&a[k]);
		printf("\n");
		
	}
	
	printf("enter j=");
	scanf("%d",&j);
	
	for(k=0;k<j;k++)
   { 
    printf("enter b[%d]=",k,b[k]);
    scanf("%d",&b[k]);
    printf("\n");
 	
 	
   } 
   
   merge(a,b,i,j);
   return 0;
	
}
int merge(int a[],int b[],int i,int j )
{
	
	int k,y,c[100];
	
	while(y<i)
	{
		c[y]=a[y];
		k=k+1;
		i=i+1;
		
		
	}
	while(y<j)
	{
		c[y]=b[j];
		j++;
		k++;
		
	}
	for(y=0;y<i+j;y++)
	{
		printf("c[%d] = ",y,c[y]);
	}
	
}
