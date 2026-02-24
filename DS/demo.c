#include<stdio.h>


struct student{
	
	int roll;
	char *name;
	int age;
	
}s1;

int main()
{
  struct student s1;
	
	s1.roll =  80;
	s1.name="jenisa";
	s1.age=17;
	
    printf("student roll is:-%d\n",s1.roll);
    printf("student name is:- %s\n",s1.name);
	printf("student age is:- %d ",s1.age);
 //return 0;

}
