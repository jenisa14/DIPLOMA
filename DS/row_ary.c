#include<stdio.h>

void rm_ary(int a[100][100],int m,int n);
int main()
{
	int a[100][100],m,n,i,j;

	
	printf("enter total no of rows:-");
	scanf("%d",&m);
	printf("enter total no of column:-");
	scanf("%d",&n);
	
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
		{
			
			printf("enter a[%d][%d] elements:- ",i,j,a[i],a[j]);
			scanf("%d",&a[i][j]);
		}
			
	}
	
	rm_ary(a,m,n);
	return 0;
}
void rm_ary(int a[100][100],int m,int n)
{
	int i,j;
		
	printf("array in row major order:- \n");
	
	for(i=0;i<m;i++)
	{
		printf("\n");
		for(j=0;j<n;j++)
		{
			printf("%d\t",a[i][j]);
		}
		
		printf("\n");
		
	}
	
	printf("array in column major order:-\n");
	for(i=0;i<m;i++)
	{
        printf("\n");
		for(j=0;j<n;j++)
		{
			printf("%d\t",a[j][i]);
			
		}
		
		printf("\n");
		
	}	
	
}
