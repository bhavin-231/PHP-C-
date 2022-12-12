#include <iostream.h>
#include <iomanip.h>
#include <string.h>
#include <conio.h>

class CCricket{
	private:
		char country[20], player[20];
		int avg;
	public:
		void getTeams();
		void compTeams(CCricket *, const int);
		void dispTeams(const CCricket *, const int);
	};

void CCricket :: getTeams(){
	cout<<"\n Enter the Name of a Country: ";
	cin>>country;
	cout<<"\n Enter a Player Name: ";
	cin>>player;
	cout<<"\n Enter the Batting Average: ";
	cin>>avg;
	}

void CCricket :: compTeams(CCricket *Ock, const int t_pls){
	int i, j;
	CCricket Otemp;
	// Sorting By Players Name.
	for(i=0; i<=t_pls; i++){
		for(j=i+1; j<=t_pls; j++){
			if(Ock[i].avg < Ock[j].avg){
				Otemp = Ock[i];
				Ock[i] = Ock[j];
				Ock[j] = Otemp;
				}
			}
		}
	// Sorting By Country Name.
	for(i=0; i<=t_pls; i++){
		for(j=i+1; j<=t_pls; j++){
			if(strcmp(Ock[i].country, Ock[j].country) > 0){
				Otemp = Ock[i];
				Ock[i] = Ock[j];
				Ock[j] = Otemp;
				}
			}
		}
	}

void CCricket :: dispTeams(const CCricket *Ock, const int t_pls){
	int i, j;
	char t_c_name[10];
	// Display Players.
	cout<<"\n\n Players Sorted According to their Country and 
  Average:- \n";
	cout<<"\n COUNTRY \t TEAM \t AVERAGE"<<endl;
	for(i=1; i<=t_pls; i++){
		if(strcmp(t_c_name, Ock[i].country) != 0){
			cout<<"\n "<<Ock[i].country;
			strcpy(t_c_name, Ock[i].country);
			}
		cout<<"\n\t\t"<<Ock[i].player<<"  -  "
    <<setw(5)<<Ock[i].avg<<endl;
		}
	}

void main(){
	int i=0;
	char ch;
	CCricket Ock[30], Otemp;

	while(1){
		clrscr();
		Ock[i].getTeams();
		i++;
		cout<<"\n Do you want to Enter next Entry (y/n) ? : ";
		cin>>ch;
		if(ch == 'n')
			break;
		} // End of while Loop.

	cout<<"\n\n Total Players Entered: "<<i<<endl;

	// Sort Teams.
	Otemp.compTeams(Ock, i);

	// Display Teams.
	Otemp.dispTeams(Ock, i);

	getch();
	}
