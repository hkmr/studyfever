import java.util.*;
class Multiply{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int num;
		System.out.print("Enter a number: ");
		num=input.nextInt();
		for(int i=1;i<=10;i++){
			System.out.println(num+"*"+i+"="+num*i);
		}
	}
}