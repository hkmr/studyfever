import java.util.*;
class NaturalNumber{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int num;
		System.out.print("Enter a number:");
		num=input.nextInt();
		System.out.println("First N natural numbers:");
		for(int i=1;i<=num;i++){
			System.out.println(i);
		}
	}
}