#include<stdio.h>
int main()
{    
	int no1, no2, bhagfal, ses;
	//dividend, divisor, quotient, remainder <---enlish name
	
	printf("enter no1\n");
	scanf("%d",&no1);
	
	printf("enter no2\n");
	scanf("%d",&no2);
	
	bhagfal= no1/no2;
	ses= no1%no2;
	
	printf("bhagfal = %d\n",bhagfal);
	printf("ses = %d",ses);
	
	
	return 0;
}
