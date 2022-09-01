#include<stdio.h>
int main()
{
	int n,i,m=0,j=0;
	
	printf("Enter the number to check primr");
	scanf("%d",&n);
	
	m=n/2;
	
	for(i=2;i<=m;i++)
	{
		if(n%i==0)
		{
			printf("Number is not prime");
			j=1;
		}
		if(j==0)
		{
			printf("Number is prime ");
		}
	}
	
	
	return 0;
}

