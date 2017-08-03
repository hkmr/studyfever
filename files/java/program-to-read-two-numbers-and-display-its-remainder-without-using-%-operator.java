import java.util.*;
class WithoutModulus{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int rem,div,dis;
		System.out.print("Enter two numbers:");
		div=input.nextInt();
		dis=input.nextInt();
		rem=div-dis*(div/dis);
		System.out.println("Reaminder: "+rem);
	}
}