import java.util.*;
class checkDigit{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		char ch;
		System.out.print("Enter a character:");
		ch=sc.next(".").charAt(0);
		if(ch>=48 && ch<=57)
			System.out.println("It is digit");
		else
			System.out.println("Not a digit");
	}
}