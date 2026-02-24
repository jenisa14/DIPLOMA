#include<stdio.h>
#include<conio.h>
void selection_sort(int k[],int n);
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
		
		printf("%d\n",k[i]);
	
	}
	
	selection_sort(k,n);//function call
	
	printf("array after sorting:- \n");
	
	for (i=0;i<n;i++)
	{
		printf("%d\n",k[i]);
	    
    }
  
	
}
void selection_sort(int k[],int n)
{
	int i,pass,temp,min_index;
 
	for(pass=0;pass<n;pass++)
	{
	
		min_index=pass;
		
		for(i=pass+1;i<n;i++)
		{ 
		
			if(k[i]<k[min_index])
			
			
				min_index=1;
					
	    }  
		 temp=k[pass];
		 k[pass]=k[min_index];
		 k[min_index]=temp;
	
	   
    }
	

	
}
