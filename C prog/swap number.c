#include<stdio.h>
int main()
{
	int first,second,temp;
	
	printf("Enter first number for swap\n");
	scanf("%d",&first);
	
	printf("Enter second number for swap\n");
	scanf("%d",&second);
    
    temp=first;
    first=second;
    second=temp;
    
    printf("First swap no is %d\n",first);
    
    printf("second swap no is %d\n",second);
	return 0;
}

a=1
1=2
2=a
