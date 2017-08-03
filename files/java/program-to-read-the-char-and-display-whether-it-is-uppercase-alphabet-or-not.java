import java.util.*;
class upperAlpha{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		char ch;
		System.out.print("Enter a character:");
		ch=sc.next(".").charAt(0);
		if(ch>=65 && ch<=90)
			System.out.println("Character is Uppercase Alphabet");
		else
			System.out.println("Character is not Uppercase Alphabet");
	}
}