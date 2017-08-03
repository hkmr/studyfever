import java.util.*;

class pallendrome
{
	public static void main(String agr[])
	{
		int num,sm=0;
		Scanner sc= new Scanner(System.in);
		
		System.out.println("Enter number");
		num=sc.nextInt();
		int num1=num;
		while(num>0)
		{
			int rem=num%10;
			sm=rem+sm*10;
			num=num/10;
		}
		System.out.println("Reverse of number is "+sm);
		if(sm==num1)
			System.out.println("It is pallendrome number");
		else
			System.out.println("It is not pallendrome number");
		
	}
}