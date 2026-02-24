#include<stdio.h>
#include<conio.h>
void insertion_sort(int k[],int n);
void main()
{
	int k[100],i,n;
	
	printf("enter the value of n : ");
	scanf("%d",&n);
	
	printf("enter %d data :-\n",n);

	for (i=0;i<n;i++)
	{
      scanf("%d",&k[i]);
		
	}

	printf("array before sorting:- \n");
	
	for (i=0;i<n;i++)
	{
		
		printf("%d\t",k[i]);
	
	}
	
	insertion_sort(k,n);//function call
	printf("\n");
	
	printf("array after sorting:- \n");
	
	for (i=0;i<n;i++)
	{
		printf("%d\t",k[i]);
	    
    }
  
	
}
void insertion_sort(int k[],int n)
{
	int i,key,j;
 
	//while(i<n)
	//{
	for(i=1;i<n;i++)
	{
	
		key=k[i];
		j=i-1;
	}
	 
	 while(j>=0 && key<k[j])
	 {
	 	k[j+1]=k[j];
	 	j=j-1;
	 //	k[i+1]=key;
	 }
	 k[j+1]=key;
	 i++;
}

	

	

