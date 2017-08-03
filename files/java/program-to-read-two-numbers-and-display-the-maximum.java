import java.util.*;
class max{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		int n1,n2;
		System.out.print("Enter two numbers:");
		n1=sc.nextInt();
		n2=sc.nextInt();
		if(n1>n2)
			System.out.println(n1+" is Maximum");
		else if(n2>n1)
			System.out.println(n2+" is Maximum");
		else
			System.out.println("Both are equal");
	}
} 