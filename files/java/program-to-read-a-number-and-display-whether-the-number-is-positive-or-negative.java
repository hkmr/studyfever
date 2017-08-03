import java.util.*;
class posNeg{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		int num;
		System.out.print("Enter a number:");
		num=sc.nextInt();
		if(num>0)
			System.out.println(num+" is positive number");
		else if(num<0)
			System.out.println(num+" is negative number");
		else
			System.out.println(num+" is zero");
	}
}