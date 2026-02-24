 #include<stdio.h>

int b_search(int a[],int n,int val);
int main()
{
	int a[50],n,i,val;
	
	printf("enter value of n=");
	scanf("%d",&n);
	
    for(i=0;i<n;i++)
	{
		printf("enter a[%d]=",i,a[i]);
		scanf("%d",&a[i]);
		printf("\n");
		
    }
    printf("enter val=");
    scanf("%d",&val);
	
	b_search(a,n,val);

    return 0;
	
}

int b_search(int a[],int n,int val)
{
	int mid,high,low=0;
	
	
	high=n-1;
	while(low<=high)
	
	{
		mid=(low+high)/2;
    
		
		if(a[low]<high)
		
		{
			low=mid+1;
			
			
		}
		else if(a[mid]>val)
		{
			high=mid-1;
		}
		else
		{
			printf("search unsuccessfully");
	
          return 0;
		}
	
	
    }
      if(val==mid)
	  {
	  	
	    
	  	return 0;
	  
	  	
	  }	
	
}
