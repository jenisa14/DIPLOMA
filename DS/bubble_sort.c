#include<stdio.h>
#include<conio.h>
void bubble_sort(int k[],int n);
void main()
{
	int k[100],i,n;
	
	printf("enter the value of n  ");
	scanf("%d",&n);
	
	printf("enter %d data ",n);
	
	for (i=0;i<n;i++)
	{
	
	
		scanf("%d\n",&k[i],i);
		
	}
	
	printf("array before sorting:- \n");
	
	for (i=0;i<n;i++)
	{
		
		printf("%d\n",k[i],i);
		
	}
	
	bubble_sort(k,n);//function call
	
	printf("array after sorting:- \n");
	
	for (i=0;i<n;i++)
	{
		printf("%d\n",k[i],i);
	
    }
	
//	return;
	
}
void bubble_sort(int k[],int n)
{
	int pass,i,swap,exch;
 
	
	for(pass=0;pass<n-1;pass++)
	{
		exch=0;
		
			if(k[i]>k[i+1])
			{
				swap=k[i];
				k[i]=k[i+1];
				k[i+1]=swap;
				exch=exch+1;
			}
			
		
		
	}
	if(exch==0)
	{
		printf("\n array already sorted ");
	}

	
}
