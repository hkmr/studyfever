import java.util.*;

class Recursive
{
	public long fact(int num)
	{
		long res;
		if(num==1)
			return 1;
		res=fact(num-1)*num;
		return res;
	}
	
	public static void main(String arg[])
	{
		int n;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter number");
		n=sc.nextInt();
		rec obj=new rec();
		long result=obj.fact(n);
		System.out.println("factorial = "+result);
		
	}
}