#include<stdio.h>
#define max 4
int stack[30];
int top=-1;

void  push(int data);
void pop();
void display();

int main()
{
	int data,cho;
	
	while(cho)//1
	{
	
		printf("enter 1 for push \n");
		printf("enter 2 for pop \n");
		printf("enter 3 for display \n");
		printf("enter 4 for exit \n");
		
		printf("enter your choice:-");
		scanf("%d",&cho);
	
	 switch(cho)
	 {
			
		case 1:
				printf("enter data to insert in stack=");
				scanf("%d",&data);
				push(data);
				break;
		case 2:
				pop();
				break;
		case 3:
				display();
				break;
		case 4:
				printf("case is not match \n");
				
     } 
    }
	return 0 ;
	
}
void push(int data)
{
			
			if(top==max-1)
				{
					printf("stack  is overflow \n");
					return;
				}	
			
			else
			{
				top++;
				stack[top]=data;
				
			}	
										
}
void pop()
{
	int data;

	        if(top<top-1)
	    	{
	    		printf("stack is underflow \n");
	    		return;
	    		
			}
			else
			{
				data=stack[top];
				top--;
				printf("deleted elements:- %d \n",data);
				
			}
}
void display()
{
	int i;
	if(top==-1)
	{
		printf("stack  underflow \n");
	}
	else
	
	printf("elements:-");
	for(i=0;i<=top;i++)
	{
			         
		printf("%d\n",i);
	}
}
