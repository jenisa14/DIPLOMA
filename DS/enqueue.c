#include<stdio.h>

int enqu(int que[],int rear,int max,int data);
int main()
{
	int que[100],rear,max=5,data;
	
	for(rear=0;rear<=max-1;rear++)
	{
		printf("enter que[%d]=",rear,que[rear]);
		scanf("%d",&que[rear]);
	}
	
	enqu(que,rear,max,data);
	
	return 0;
	
}
int enqu(int que[],int rear,int max,int data)
{
   int front=0; 
	
		if(rear==max-1)
		{
			printf("queue  is overflow");
		}
		else
		{
			rear++;
			que[rear]=data;
			
		}
	if(front==-1)
	{
	
      front=0;		
	}	
}
