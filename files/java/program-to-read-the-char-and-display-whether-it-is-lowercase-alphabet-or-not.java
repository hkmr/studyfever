import java.util.*;
class lowerAlpha{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		char ch;
		System.out.print("Enter a character:");
		ch=sc.next(".").charAt(0);
		if(ch>=97 && ch<=122)
			System.out.println("Character is Lowercase Alphabet");
		else
			System.out.println("Character is not Lowercase Alphabet");
	}
}