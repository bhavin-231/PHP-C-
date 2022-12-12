#include<iostream.h>

#include<conio.h>

class SI{

        int P, T;

        float R, Interest;

    Public:

        SI(){

        }

    SI(int P1, int T1, float R1)

    {

        P=P1;

        T=T1;

        R=R1;

        Interest=(P*T*R)/100;
    }

    float

    {
        return(Interest);
    }

};

void main()

{

    SI s1;

    int p,t;

    float r;

    clrscr();


    cout<<"Enter the value for Principal amount:";

    cin>>p;

    cout<<"\n Enter the value for time:";

    cin>>t;

    cout<<"\n Enter the value for rate:";

    cin>>r;

    s1=SI(p,t,r);

    cout<<"The Simple Interest ="<<s1.show()<<endl;

    getch();

}

