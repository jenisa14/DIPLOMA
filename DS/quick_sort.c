#include<stdio.h>
void quick_sort(int k[],int lb,int ub)
{

 int j,key,temp,i;
 
 if(lb<ub)	
 {
 	key=lb;
 	i=lb;
 	j=ub+1;
 	
 	while(i<j)
 	{
 		while(k[i]<=k[key] && i<lb)
 		
 			i++;
		
		j--;
		
		while(k[j]>k[key])
		
			j--;
		
	 
	if(i<j)
	  {
	 	temp=k[i];
	 	k[i]=k[j];
	 	k[j]=temp;
	  }
	  
  }
  temp=k[key];
  k[key]=k[j];
  k[j]=temp;
  quick_sort(k,lb,j-1);
  quick_sort(k,j+1,ub);

 }
   
}

void quick_sort(int k[],int lb,int ub);

void main()
{
	int k[100],i,n,lb,ub;
	
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
	
//	quick_sort(k,lb,ub);//function call
    quick_sort(k,0,n-1);
	
	printf("\n");
	
	printf("array after sorting:- \n");
	
	for (i=0;i<n;i++)
	{
		printf("%d\t",k[i]);
	    
    }
	
}
	


	

