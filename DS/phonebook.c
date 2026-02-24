#include<stdio.h>
#include<stdlib.h>
#include<string.h>

void insert(int num, char name[30]);
//void insert_at_begining(int n, char c[]);
//void del(int x);
//void search(int x);
void display();

struct node
{
	char name[30];
	int num;
	struct node *next;
};

struct node *first = NULL;

int main()
{	
	int num,cho;
	char name[30];


	while(1)
	{
		printf("\n1. to insert ");
		//printf("\n2. search");
		//printf("\n3. delete");
		printf("\n2. to display \n");
		printf("\n3. to exit ");
		printf("\nenter your choice:- ");
		scanf("%d",&cho);
		
		switch (cho)
		{
			case 1:
				//printf("enter number :- ");
				//scanf("%d",&n);
				//fflush(stdin);
				//printf("enter name :- ");
				//gets(c);
				//scanf("%s", c);
				
				printf("enter name :- ");
				scanf("%c", &name);
				//gets(name)
				printf(" \n enter number :- ");
	            scanf("%d", &num);
			//	scanf("%s", name);
	            
				insert(num,name);
				break;
		/*	case 2:
				printf("enter the element you want to add:- ");
				scanf("%d", &x);
				del(x);
				break;
			case 3:
				printf("enter the element you want to add:- ");
				scanf("%d", &x);
				search(x);
				break;
			*/
			case 2:
				display();
				break;
				
			case 3:
				exit(0);
		}
	}
}

void insert(int num, char name[])
{
	struct node *ptr, *save = first;
	
	//char name[10] = "";
    //int num;
	
	
	ptr = (struct node*)malloc(sizeof(struct node));
	
//	printf("enter name :- \n");
//	scanf("%c", &name);
	
//	printf("enter number :- ");
//	scanf("%d", &num);
	
    ptr->num;
	
	ptr->next ='\0';
	
	if(first=='\0')
	{
		ptr->next = '\0';
		return(first);
	}
	else
	{
	while(save->next != '\0')
	{
		save = save->next;
	}
	save->next = ptr;
	ptr->next = '\0';
}

	printf("%d first",first->name);
	printf("%d first",first->num);
	printf("\n %d save",save->name);
	
}





/*
void insert(int n, char *c)
{
	struct node *ptr, *save = first, *pre=first;
	
	ptr = (struct node*)malloc(sizeof(struct node));

	strcpy(ptr->name,c);
	
	ptr->num = n;
	
	if(first==NULL)
	{
		ptr->next = NULL;
		first = ptr;
		return(0);
	}
	
	else if(strcmp(c,save->name)>0)
	{
		ptr->next = first;
		first = ptr;
		return(0);	
	}	
	
	else
	{
		save = save->next;
		while(save!='\0')
		{
			if(strcmp(c,save->name)>0)
			{
				ptr->next = save;
				pre->next = ptr;	
			}
			else
			{
				pre = save;
				save = save->next;
			}
			
			
		}
	}
	printf("%s",c);
    
}*/

void display()
{ 
	struct node *tmp = first;
	printf("%s", first->name);//c

    //while (tmp != '\0')
    while(tmp->next!='\0')
    {
       printf("name : %s\n",tmp->name);//c
       printf("number : %d\n",tmp->num);//n
       tmp = tmp->next;
    }
}


