import java.util.*;
class checkChar{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		char ch;
		System.out.print("Enter a character:");
		ch=sc.next(".").charAt(0);
		if(ch>=48 && ch<=57)
			System.out.println("Character is Digit: "+ch);
		else if(ch>=65 && ch<=90)
			System.out.println("Character Uppercase Alphabet: "+ch);
		else if(ch>=97 && ch<=122)
			System.out.println("Character Lower case Alphabet: "+ch);
		else
			System.out.println("Character Special symbol: "+ch);
	}
}