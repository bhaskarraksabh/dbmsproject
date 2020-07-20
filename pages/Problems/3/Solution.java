import java.
class Solution
{
public static void main(String args[])
{
  Scanner myObj = new Scanner(System.in);
    int num=myObj.nextInt();
  int c=0;
  while(num>0)
  {
    num-=1;
    int k=myObj.nextInt();
    if(k%2==0)
      c+=1;
  }
  System.out.println(c);
}
}