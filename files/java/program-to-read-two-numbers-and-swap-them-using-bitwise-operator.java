import java.util.*;
class BitwiseSwap{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);	
		int n1,n2;
		System.out.print("Enter a number:");
		n1=input.nextInt();
		n2=input.nextInt();
		System.out.println("Before Swapping:\nn1= "+n1+"\nn2= "+n2);

		n1=n1^n2;
		n2=n1^n2;
		n1=n1^n2;

		System.out.println("After Swapping:\nn1= "+n1+"\nn2= "+n2);

	}
}