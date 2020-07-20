#include<bits/stdc++.h>
using namespace std;
int main()
{
    int n,k;
    scanf("%d %d",&n,&k);
    int total=240;
    int rem=240-k;
    int c=0;
    int c1=1;
    while(rem>0)
    {
        rem-=(5*c1);
        c+=1;
    }
    printf("%d\n",c);
    return 0;
}