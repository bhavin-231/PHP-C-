#include<stdio.h>
int main()
{
	float no1,no2,product;
	
	printf("Enter two number\n");
	scanf("%f %f",&no1,&no2);
	
	product=no1*no2;
	
	/*digit p6i jetla point rakhva hoy
	 etla no.lkhvana aama ex.trike 2 lidha vhe*/
	 
	printf("%.2f",product);
	
	return 0;
}
