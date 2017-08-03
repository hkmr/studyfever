import java.util.*;
class Quotient{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int div,dis,quot=0;
		System.out.print("Enter a number:");
		div=input.nextInt();
		dis=input.nextInt();
		while(div>=dis){
			div-=dis;
			quot++;
		}
		System.out.println("Quotient: "+quot);
	}
}