#include<stdio.h>


int main()
{

	int a[100],n,i;
	

    printf("enter the value of n=");
    scanf("%d",&n);
    
    for(i=0;i<n;i++)
    {
    	
    	printf("a[%d]=",i,a[i]);
    	
    	printf("\n");
    	scanf("%d",&a[i]);
    	
	}
	
	
	return 0;
}
