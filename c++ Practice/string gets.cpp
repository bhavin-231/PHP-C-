#include<iostream>
using namespace std;
int main()
{
	char a[20];
	int length=0;
	cout<<"Enter your string :"<<endl;
	gets(a);  // <-----  ( gets no use karvathi space p6i pan lkhelu run thay che )
	
	cout<<"Your string is "<<a;
	
	for(int i=0;a[i]!='0';i++)
   {
   	length ++;
	} 
    
    cout<<"length of string is "<<length;
	
	
	return 0;
}
