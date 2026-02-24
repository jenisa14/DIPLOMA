#include<stdio.h>

struct node
{
	int info;
	struct node *link;
	
}*first=NULL;
void insert_end(int val);



void main()
{
	int cho,val;

		printf("enter data :- ");
		scanf("%d",&val);
		
		insert_end(val);
	
}
void insert_end(int val)
{
	
//	struct node*avail;
//	avail=malloc(sizeof(struct node*));
	
	struct node *nw;
	nw=malloc(sizeof(struct node*));
	
	struct node*save;
	save=malloc(sizeof(struct node*));
	

	 //if(avail==NULL)
    //{
  //  	printf("availability stack is underflow"); 
//	}
	
//	nw=avail;
//	avail=avail->link;
	
	nw->info = val;
	nw->link = NULL;
	
    if(first==NULL)
    {
    	first=nw;
	}
	
	while(save->link!=NULL)
	{
		//save->link=save;
		save=save->link;
		
	}
	
	save=first;
	
    save->link=nw;
    //nw=save->link;

}
