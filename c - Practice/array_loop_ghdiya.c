#include<stdio.h>
int main()
{
	int no[3]= {10,20,30};
	int i;
	int j;
	
	for(i=0;i<3;i++)
	{
		for(j=1;j<5;j++)
		{
			printf("%d*%d=%d\n",no[i],j,no[i]*j);
		}
		printf("\n");
	}
	
	return 0;
}
