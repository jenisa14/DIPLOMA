#include<stdio.h>
#include<stdlib.h>

struct node* insert(int val,struct node *root);
//void preorder();
//void postorder();
void inorder(struct node *);
struct node* bst_search(int val,struct node *root);


struct node{

	int data;
	struct node *lptr;
	struct node *rptr;
};

struct node *root='\0';

int main()
{
	int cho,val;
	while(1)
	{
	 printf("enter 1 for insert data into tree \n");	
	 //printf("enter 2 for pre order travers  \n");
	 //printf("enter 3 for post order travers \n");
	 printf("enter 2 for in order travers \n");
	 printf("enter 3 for search \n");
	 //printf("enter 6 for display \n");
	 printf("enter 4 for exit \n");
	 
	
	 printf("enter your choise:-");
	 scanf("%d",&cho); 
		
		switch(cho)
		{
			case 1:
				
				printf("enter data= \n");
				scanf("%d",&val);
				
				root = insert(val,root);
				break;
			
			/*case 2:
	
				preorder();
				break;
			
			case 3:

				postorder();
				break;
			*/	
			case 2:
			   	inorder(root);
			   	break;
			   	
			case 3:
			
			    printf("enter data to search in tree:- ");
				scanf("%d",&val);
				
				bst_search(val,root);
			    break;   	
			   	
			//case 6:
			
			  //  display();
			//    break;
			    
			case 4:
			     
			     exit(0);
			     	   	
		  	
		}
	}
	
		
}
struct node* insert(int val,struct node *root)
{
	struct node *ptr;
	ptr=(struct node*)malloc(sizeof(struct node));
	
	
	if(ptr=='\0')
	{
	  printf("memory not allocated");
	  exit(0);	
	}
	
	ptr->data = val;
	ptr->lptr = NULL;
	ptr->rptr = NULL;

	if(root == NULL)
	{
		root = ptr;
	}

	else if(root->data < val)
	{
		root->rptr = insert(root->rptr,val);
	}
	else
	{
		root->lptr = insert(root->lptr,val);
	}
	
	return root;
}
/*
void preorder(int val)
{

	struct node *lptr;
	struct node *rptr;
	struct node *root;
	struct node *data;
	
	
	data=malloc(sizeof(struct node*));
	
	if(root!='\0')
	{
		root->data;
	}
	else
	{
		printf("tree is empty ");
		return;
	}
	
	if(lptr->root!=NULL)
	{
		lptr->root;
		preorder(val);
	}
	
	if(rptr->root!='\0')
	{
		rptr->root;
		preorder(val);
	}
	

}

void postorder(int val)
{
	
	struct node *data;
	struct node *root;
	struct node *lptr;
	struct node *rptr;

	data=malloc(sizeof(struct node*));
	

	
	if(root=='\0')
	{
		printf("tree empty");
		
	}
	
	if(lptr->root!='\0')
	{
		lptr->root;
		postorder(val);
	}
	
		
	if(rptr->root!='\0')
	{
     	rptr->root;
		postorder(val);
	}
	
	data->root;
		
}
*/
void inorder(struct node *root)
{
  
	if(root!='\0')
	{
		inorder(root->lptr);
		printf("%d\n",root->data);
		inorder(root->rptr);
}
	
}
struct node* bst_search(int val,struct node* root)
{
	if(root=='\0' || root->data == val)
	{
		printf("element found ");
		return root;
	}
	
	if(val>root->data)
	{
		return bst_search(root->rptr,val);
	}
	
	else
	{
		return bst_search(root->lptr,val);	
	}
}



