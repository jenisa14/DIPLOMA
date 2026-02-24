#include<stdio.h>
#define max 5
int que[30];
int rear=-1;
int front=-1;

void  enq(int data);

void display();

int main()
{
	int data,cho;
	
	while(1)
	{
	
		printf("enter 1 for enqueue \n");
		
		printf("enter 3 for display \n");
		
		
		printf("enter your choice:-");
		scanf("%d",&cho);
	
	 switch(cho)
	 {
			
		case 1:
				printf("enter data which you want to insert in queue=");
				scanf("%d",&data);
				
				enq(data);
				break;
	
		case 2:
				display();
				break;
	
				
     } 
    }
 return 0;
	
}
void enq(int data)
{
			
			if(rear==max-1)
				{
					printf("queue  is overflow \n");
					return;
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
void display()
{
	int i;
	if(rear==-1 && front==-1)
	{
		printf("queue is underflow \n");
	}
	else
	
	printf("elements:-");
	for(i=0;i<=rear;i++)
	{
			         
		printf("%d\n",que[i]);
	}
}
