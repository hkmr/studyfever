import java.util.*;
class swap1{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		int n1,n2,temp;
		System.out.print("Enter a two numbers:");
		n1=sc.nextInt();
		n2=sc.nextInt();
		System.out.println("Before swap: \n"+"n1= "+n1+"\nn2= "+n2);
		temp=n1;
		n1=n2;
		n2=temp;
		System.out.println("After swap: \n"+"n1= "+n1+"\nn2= "+n2);
	}
}