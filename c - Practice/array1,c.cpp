#include<stdio.h>
int main()
{
	int no[5] ={10,20,30,40,50};
	int i;
	int j;
	
	for(i=0;i<5;i++)
	{
		for(j=1;j<8;j++)
		{
			printf("%d*%d=%d\n",no[i],j,no[i]*j);
		}
		printf("\n");
	}

	return 0;
	
}
