#include<stdio.h>
#include<conio.h>
int pop(int stack[],int top,int max,int data);

int main()
{
    int stack[30],top,max=5,data;
   
	for(top=-1;top>max-1;top--)
	{
		printf("enter stack[%d]=",top,stack[top]);
		scanf("%d",&stack[top]);
	}
	
	
	
	pop(stack,top,max,data);
	
	return 0;
	
}
int pop(int stack[],int top,int data)
{

	        if(top<top-1)
	    	{
	    		printf("stack is underflow");
	    		
			}
			else
			{
				data=stack[top];
				top--;
				
			}
  return 0;  

}


