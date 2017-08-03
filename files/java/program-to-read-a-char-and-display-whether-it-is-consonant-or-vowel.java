import java.util.*;
class VowelConsonant{
	public static void main(String[] args) {
		Scanner sc=new Scanner(System.in);
		char ch;
		System.out.print("Enter a character: ");
		ch=sc.next(".").charAt(0);
		switch(ch){
			case 'a':
			case 'A':
			case 'e':
			case 'E':
			case 'i':
			case 'I':
			case 'o':
			case 'O':
			case 'u':
			case 'U':
				System.out.print("Character is Vowel");
				break;
			default:
				System.out.print("Character is Consonant");

		}
	}
}