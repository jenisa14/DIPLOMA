#include<stdio.h>

struct node
{
	int info;
	struct node *link;
	
}*first=NULL;
void insert_beg(int val);



void main()
{
	int cho,val;

 
	
		printf("enter data :- ");
		scanf("%d",&val);
		
		insert_beg(val);
	
}
void insert_beg(int val)
{
	
//	struct node*avail;
//	avail=malloc(sizeof(struct node*));
	
	struct node *nw;
	nw=malloc(sizeof(struct node*));
	
	
	
	
	// if(avail==NULL)
    //{
    //	printf("availability stack is underflow"); 
	//}
	
	//nw=avail;
	//avail=avail->link;
	
	nw->info = val;
	nw->link = first;
	
	first=nw;
	
	return first;

}

 
