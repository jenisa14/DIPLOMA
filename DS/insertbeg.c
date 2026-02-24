#include<stdio.h>
#include<conio.h>>

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
	struct node *nw;
	nw=malloc(sizeof(struct node*));
	
	nw->info = val;
	nw->link = first;
	
	
}

 
