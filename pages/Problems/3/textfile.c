#include<stdio.h>
int main()
{
  int n;
  scanf("%d",&n);
  int c=0;
  for(int i=0;i<n;i+=1)
  {
    int num;
    scanf("%d",&num);
    if(num%2==0)
      c+=1;
  }
  printf("%d\n",c);
return 0;
}