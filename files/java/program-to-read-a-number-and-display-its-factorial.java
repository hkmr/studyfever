import java.util.*;
class Factorial{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int num,fact=1;
		System.out.println("Enter a number:");
		num=input.nextInt();
		while(num>0){
			fact*=num;
			num--;
		}
		System.out.println("Factorial= "+fact);
	}
}