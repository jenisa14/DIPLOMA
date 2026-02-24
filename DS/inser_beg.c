#include<stdio.h>
#include<stdlib.h>


void display();
void insert_beg(int val);
void insert_end(int val);
void insert_before(int val,int pos);
void insert_after(int val,int pos);
int delete_first();
int delete_last();
int search(int n);
int count();


struct node{

	int info;
	struct node *link;
};

struct node *first='\0' ;

int main()
{
	int cho,c,val,pos,n,s,d,dl,so;
	while(1)
	{
		printf("\nenter 1 for insert at the beginn ing \n");
		printf("enter 2 for insert at end of the list \n");
		printf("enter 3 for insert at before the node \n");
		printf("enter 4 for insert at after the node \n");
		printf("enter 5 for delete first node \n");
		printf("enter 6 for delete last node \n");
		printf("enter 7 for search data in list \n");
		printf("enter 8 for count \n");	
		printf("enter 9 for display \n");
		printf("enter 10 for exit \n");
		

	

		printf("enter your choise:-");
		scanf("%d",&cho); 
		
		switch(cho)
		{
			case 1:
				printf("enter data= \n");
				scanf("%d",&val);
				
				insert_beg(val);
				break;
			
			case 2:
				
				printf("enter data= \n");
				scanf("%d",&val);
				
				insert_end(val);
				break;
				
			case 3:
				
				
				printf("enter data= \n");
				scanf("%d",&val);
				
				printf("enter pos:-");
	            scanf("%d",&pos);
	          
			   
				insert_before(val,pos);
				break;

			case 4:
				
				printf("enter data= \n");
				scanf("%d",&val); 
				
				printf("enter pos:-");
	            scanf("%d",&pos);
			  
				insert_after(val,pos);
         		break;
         		
         	case 5:
         		
         		d=delete_first();
         		printf("deleted elements :- %d",d);
         	
         		break;
         	
			case 6:
			      
				dl=delete_last();
				printf("deleted elements :- %d",dl);
				break;  	
			
			case 7:
				
				printf("enter data which you want to search in list:- ",s);
				scanf("%d",&n);
				
				s=search(n);
				break;
				
			case 8:
			
			    c=count();
			    printf("total no of nodes :- %d",c);
				break; 
			     
			case 9:
				
				display();
				break;
			
			
			case 10:
				
				exit(0);
						  	
		}
	}
	
		
}
void insert_beg(int val)
{
	
	struct node *nw;

	nw=malloc(sizeof(struct node*));
	
	nw->info=val;
	nw->link=first;
	first=nw;
	
	
}

void insert_end(int val)
{ 	
    struct node *nw;
    nw=malloc(sizeof(struct node*));
    
    struct node *save;
    save=malloc(sizeof(struct node*));
	
	nw->info=val;
	nw->link=NULL;
   
    if(first=='\0')
    {
       nw=first;
    	
	}
	
	save=first;
	
   while(save->link!='\0')
   {
   	
   	save=save->link;
   	save->link=nw;
   	
   }

	
}
void insert_before(int val,int pos)
{   struct node*preptr;
    struct node *ptr=first;
	struct node *nw;
   

	
	nw=malloc(sizeof(struct node*));
	nw->info=val;

  if(first=='\0')
  {
  	first=nw;
  	nw->link='\0';
  	
  }
 else{
   
    while(ptr->info!=pos)
    {
        preptr=ptr;
    	ptr=ptr->link;
	}

	preptr->link=nw;
	nw->link=ptr;
  }
}
void insert_after(int val,int pos)
{
	struct node*nw;
	nw=malloc(sizeof(struct node*));
	
	struct node*ptr;
	
	
	nw->info = val;
	ptr=first;
	
	  while(ptr->info!=pos)
    {
    
    	ptr=ptr->link;
	}
	

	nw->link=ptr->link;
	ptr->link=nw;
	
}

int delete_first()
{
  
  struct node *ptr=first;
  
  if(first=='\0')
  {
  
    printf("list empty");	
  }	
  
  if(first->link=='\0')
  {
  	
  	free(first);
  	first='\0';
  	
  }
  else
  {
  	ptr=first;
  	first=ptr->link;
  	free(ptr);
  	
  }
 
	
}
int delete_last()
{
	struct node *ptr=first;
	struct node *preptr=ptr;
	
	if(first=='\0')
	{
		
		printf("list is empty");
	}
	if(first->link=='\0')
	{
		free(first);
		first='\0';
		
	}
	else
	{ 
	    ptr=first;
		while(ptr->link!='\0')
		{
			preptr=ptr;
			ptr=ptr->link;	
		
		}
		
		preptr->link='\0';
		free(ptr);
	}
	
}
int search(int n)
{  
    
	int flag=0;
	struct node *ptr=first;
	
	if(first=='\0')
	{
		printf("list is empty:-");
	}
	
	while(ptr!='\0')
	{
		if(ptr->info==n)
		{
			flag=1;
			printf("node is found ");
			
		}
		else
		{
			ptr=ptr->link;
			
		}
		if(flag==0)
		{
			printf("element is not found ");
			
		}return 0;
	
	}		
}
int count()
{
	int count=0;
	struct node *ptr=first;
	
	if(first='\0')
	{
		printf("list is empty:-");
		
	}
	while(ptr!='\0')
	{
		count=count+1;
		ptr=ptr->link;
		
	}
	return(count);

	
}

void display()
{
	
	struct node *temp=first;
	
	while(temp!=NULL)
	{
		printf("elements:-%d\n",temp->info);
		temp=temp->link;
	}
	
}
