import java.util.*;
class evenOdd{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		int num;
		System.out.print("Enter a number:");
		num=sc.nextInt();
		if(num%2==0)
			System.out.println("Number is even");
		else
			System.out.println("Number is odd");
	}
}
