#include<bits/stdc++.h>
using namespace std;
int main()
{
int n;
cin>>n;
int c=0;
for(int i=0;i<n;i+=1)
{
int num;
cin>>num;
if(num%2==0)
c+=1;
}
cout<<c<<endl;
return 0;
}
