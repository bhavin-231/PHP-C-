#include<iostream>
using namespace std;
int main()
{
	char str[20];
	int length=0;
	int i;
	
	cout<<"Enter your stream"<<endl;
	gets(str);
	
	
	for(int i=0; str[i]!=0; i++);
{
	length++;
		
	cout<<"total length is :"<<length;
}
	cout<<"Your stream is :"<<str;
	return 0;
}
