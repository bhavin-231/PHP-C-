#include <iostream>
using namespace std;

template <class T>
int swap_numbers(T& x, T& y)
{
	T t;
	t = x;
	x = y;
	y = t;
	return 0;
}
int main()
{
	int a, b;
	a = 10, b = 20;

	swap_numbers(a, b);
	cout << a << " " << b << endl;
	return 0;
}

