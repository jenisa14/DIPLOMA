#include<stdio.h>
#include<stdlib.h>

void insert(int val);
void preorder();
void postorder();
void inorder();
int bst_search(int n);
void display();


struct node{

	int data;
	struct node *lptr;
	struct node *rptr;
	
};

struct node *T='\0' ;

int main()
{
	int cho,s,n,val;
	while(1)
	{
	 printf('enter 1 for insert data into tree \n');	
	 printf('enter 2 for pre order travers  \n');
	 printf('enter 3 for post order travers \n');
	 printf('enter 4 for in order travers \n');
	 printf('enter 5 for search \n');
	 printf('enter 6 for display \n');
	 printf('enter 7 for exit \n');
	
	 printf("enter your choise:-");
	 scanf("%d",&cho); 
		
		switch(cho)
		{
			case 1:
				
				printf("enter data= \n");
				scanf("%d",&val);
				
				insert(val);
				break;
			
			case 2:
				
				preorder();
				break;
			
			case 3:
				
				postorder();
				break;
				
			case 4:
			
			   	inorder();
			   	break;
			   	
			case 5:
			
			    printf("enter data which you want to search in list:- ",s);
				scanf("%d",&n);
				
				s=bst_search(n);
			    break;
			     	
				
			case 6:
				 
				 display();
				 break;
			case 7:
				 
				 exit(0);
				 break;
						  	
		}
	}
	
		
}
void insert(int val)
{
	struct node *T;
	T=malloc(sizeof(struct node*));
	
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
    		insert(T->lptr,val);
		}
    	else
    	{
    		insert(T->rptr,val);
    		
		}
    	
	}
	printf('node inserted \n');
	
}
void preorder()
{
	
	struct node *data;
	struct node *T;
	struct node *lptr;
	struct node *rptr;

	data=malloc(sizeof(struct node*));
	T=malloc(sizeof(struct node*));

	if(T!='\0')
	{
		data->T;
	}
	else
	{
		printf('tree is empty');
		//return();
	}
	
	if(lptr->T!='\0')
	{
		preorder(lptr->T);
	}
	
	if(rptr->T!='\0')
	{
		preorder(rptr->T);
	}
	

}

void postorder()
{
	
	struct node *data;
	struct node *T;
	struct node *lptr;
	struct node *rptr;

	data=malloc(sizeof(struct node*));
	T=malloc(sizeof(struct node*));

	
	if(T=='\0')
	{
		printf('tree empty');
		//return();
	}
	
	if(lptr->T!='\0')
	{
		postorder(lptr->T);
	}
	
		
	if(rptr->T!='\0')
	{
		postorder(rptr->T);
	}
	
	data->T;
		
}

void inorder()
{
    struct node *data;
	struct node *T;
	struct node *lptr;
	struct node *rptr;

	data=malloc(sizeof(struct node*));
	T=malloc(sizeof(struct node*));
	
	
	if(T=='\0')
	{
		printf('tree empty');
		//return();
	}
	
	if(lptr->T='\0')
	{
		inorder(lptr->T);
	}
	
	data->T;
	
	if(rptr->T='\0')
	{
		inorder(rptr->T); 
		
    } 
	
}
int bst_search(int n)
{
	key=0;
	struct node *data;
	struct node *T;
	struct node *lptr;
	struct node *rptr;


	if(T=='\0')
	{
		printf('tree empty ');
		return();
	}
	
	if(n=data->T)
	{
		return T;
	}
	
	if(n<data->T)
	{
		bst_search(lptr->T,n);
		
		
	}
	else
	{
		bst_search(rptr->T,n)
		return();
		
	}
	
}

void display()
{
	
	struct node *temp=T;
	
	while(temp!='\0')
	{
		printf("elements:-%d\n",temp->data);
		temp=temp->data;
	}
	
}
