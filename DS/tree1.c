#include <stdio.h>
#include <stdlib.h>


struct tree
{
	int data;
	struct tree *lptr;
	struct tree *rptr;
};

void inorder(struct tree *);
void preorder(struct tree *);
void postorder(struct tree *);
struct tree* insert_bst(struct tree* root,int val);
struct tree* search(struct tree* root,int val);

struct tree *root = NULL;

int main()
{
	int x,op;
	
	while(1)
	{
		printf("\n1. insert");
		printf("\n2. search");
		printf("\n3. inorder");
		printf("\n4. preorder");
		printf("\n5. postorder");
		printf("\nenter your choice:- ");
		scanf("%d",&op);
	
		switch(op)
		{
			case 1:
				printf("enter the element you want to add:- ");
				scanf("%d", &x);
				root = insert_bst(root,x);
				
				break;
			case 2:
				printf("enter the element you want to search:- ");
				scanf("%d", &x);
				search(root,x);
				break;
			case 3:
				inorder(root);
				break;
			case 4:
				preorder(root);
				break;
			case 5:
				postorder(root);
				break;
			case 6:
				exit(0);
		}
	}
	return 0;
}

struct tree* insert_bst(struct tree* root, int val)
{
	//printf("Inside ....");
	struct tree *ptr;
	ptr = (struct tree*)malloc(sizeof(struct tree));
	if(ptr == NULL)
	{
		printf("Memory not allocated");
		exit(0);
	}
	ptr->data = val;
    ptr->lptr = NULL;
    ptr->rptr = NULL;
    
	if(root==NULL)
	{
		root = ptr;	
		//root->lptr = NULL;
	//	root->rptr = NULL;
	}
    else if(root->data < val)
	{
		root->rptr = insert_bst(root->rptr,val);
	}	
	else
	{
		root->lptr = insert_bst(root->lptr,val);
		
	}
	//printf("function called");
	return root;
	
}

struct tree* search(struct tree* root,int val)
{
	if(root == NULL || root->data == val)
	{
		printf("element found");
		return root;
	
	}
	if(root->data <val)
	{
		return search(root->rptr, val);
	}
	else
	{
		return search(root->lptr, val);
	}
}
void inorder(struct tree *root)
{
	if(root!=NULL)
	{
		inorder(root->lptr);//l
		printf("%d \t ",root->data);//v
		inorder(root->rptr);//r
	}

}

void preorder(struct tree *root)
{
	if(root!=NULL)
	{
		printf("%d\n",root->data);//v
	}
	else
	{
		printf("empty tree");
		
	}

	if(root->lptr!=NULL)
	{
		preorder(root->lptr);//l
	}
	if(root->rptr!=NULL)
	{
		preorder(root->rptr);//r
	}

}
void postorder(struct tree *root)
{

	if(root==NULL)
	{
		printf("empty tree");	
	}

	if(root->lptr!=NULL)
	{
		postorder(root->lptr);//l
	}
	if(root->rptr!=NULL)
	{
		postorder(root->rptr);//r
	}
	printf("%d\n",root->data);//v
}

/*
8
12
9
10
23
30
33
35
39
*/

