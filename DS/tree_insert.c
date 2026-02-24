#include<stdio.h>


int insert(int val);


struct node{

	int data;
	struct node *lptr;
	struct node *rptr;
	
};

 struct node *T='\0';

void main()
{
	int val,i;

				
	printf("enter data= \n");
	scanf("%d",&val);
				
	i=insert(val);
			
  return ;					  		
}
int insert(int val)
{    
  
	struct node *T;
	//T=malloc(sizeof(struct node*));
	struct node *lptr;
	struct node *rptr;

	
	if(T=='\0')
	{
	  T->data=val;
	  T->lptr='\0';
	  T->rptr='\0';	
	}	
    else
    {
    	if(val<T->data)
    	{
    		T->lptr;
    		insert(val);
		}
    	else
    	{
    		T->rptr;
    		insert(val);
    		
		}
    	
	}
	//printf('node inserted \n');
    
	return ;
}


