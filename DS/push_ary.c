#include<stdio.h>

int push(int stack[],int top,int max,int data);
int main()
{
	int stack[100],top,max=5,data;
	
	for(top=0;top<max-1;top++)
	{
		printf("enter stack[%d]=",top,stack[top]);
		scanf("%d",&stack[top]);
	}
	
	push(stack,top,max,data);
	
	return 0;
	
}
int push(int stack[],int top,int max,int data)
{

	
		if(top==max-1)
		{
			printf("stack  is overflow");
		}
		else
		{
			top++;
			stack[top]=data;
			
		}
		

}

