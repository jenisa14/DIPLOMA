#include<stdio.h>
int search(int a[],int n,int var);
int main()
{
	int a[100],n,var,i,temp=0;
	
	printf("enter the range of n=");
	scanf("%d",&n);
	
	for(i=0;i<n;i++)
	{
       printf(" enter a[%d]=",i,a[i]);
	   scanf("%d",&a[i]);
	   printf("\n");
	  
	}
	printf("enter the elements which you want to search in array=");
	scanf("%d",&var);
	
	search(a,n,var);
	
	return 0;
}

int search(int a[],int n,int var)
{
	int i,temp;
	
	for(i=0;i<n;i++)
  {
	  	 if(a[i]==var)
	 {
         temp=var;	
		
	 } 
  } 
	 if(temp==var)
	 {
	 	
	 	printf("search is successfully");
	 }
	
	else

	{		
		printf("search is not successfully");
    }
}
