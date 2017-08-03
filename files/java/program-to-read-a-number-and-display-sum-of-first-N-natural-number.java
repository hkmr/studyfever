import java.util.*;
class NaturalSum{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int num,sum=0;
		System.out.print("Enter a number:");
		num=input.nextInt();
		System.out.println("Sum of first N natural numbers:");
		for(int i=1;i<=num;i++){
			sum+=i;
		}
		System.out.println(sum);
	}
}