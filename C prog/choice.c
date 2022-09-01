#include<stdio.h>
 int main()
 {
 	int square,triangle,circle,ch,length,area;
 	
 	printf("Select your choice\n");
 	printf("1.square\n");
 	printf("2.triangle\n");
 	printf("3.circle\n");
 	scanf("%d",&ch);
 	
 	if(ch==1)
 	{
 		printf("Enter length\n");
 		scanf("%d",&length);
 		area = length*length;
 		printf("square of area is %d",area);
	 }
 	
 	return 0;
 }
